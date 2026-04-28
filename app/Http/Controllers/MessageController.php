<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSent;
use App\Models\Connect_sessions;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use DateTime;

class MessageController extends Controller
{
    
    public function leaveSeason(Request $request)
    {
    
        Connect_sessions::Where('id', $request->sessionid)
                            ->update([
                                'status' => 'Finished',
                            ]);

        User::where('id', auth::user()->id)->increment('xp', 50);
        
        return Redirect('/teacher')->with('success','Your Session is Finished');
    }

    public function index($id)
    {
        $sessionid = $id;
        $user = auth::user();
        $connectSession = Connect_sessions::Where('id', $sessionid)
                                ->Where('status', 'active')->first();
        
        if(!$connectSession){
            
            if ($user->hasRole('teacher')) {
            return redirect('/teacher');
            }

            if ($user->hasRole('learner')) {
                return redirect('/learner');
            }
        }

        $participants = DB::table('connect_sessions as cs')
                        ->join('users as learner','learner.id','=','cs.learner_id')
                        ->join('users as teacher', 'teacher.id','=','cs.teacher_id')
                        ->select(
                            'learner.profilepic as learnerprofile',
                            'teacher.profilepic as teacherprofile',
                            'learner.firstname as learnername',
                            'teacher.firstname as teachername',
                            'teacher.id as teacherid'
                        )
                        ->first();
        if($connectSession->learner_id === auth::user()->id || $connectSession->teacher_id === auth::user()->id){
            return view('Messages.index', compact('participants','sessionid'));
        }
        
        if ($user->hasRole('teacher')) {
            return redirect('/teacher');
        }

        if ($user->hasRole('learner')) {
            return redirect('/learner');
        }
    }

    public function getAll($id)
    {
        $messages = Message::with('sender')
            ->where('connect_sessions_id', $id)
            ->orderBy('sent_at', 'asc')
            ->get();

        return response()->json([
            'messages' => $messages
        ]);
    }
   
    public function store(StoreMessageRequest $request)
    {

        Message::Create([
            'content' => $request['content'],
            'is_read' => False,
            'sent_at' => New DateTime(), //try to check it later
            'connect_sessions_id' => $request['connect_sessions_id'],
            'sender_id' => $request['sender_id'],
        ]);

        
    }

    public function send(Request $request)
    {
        $message = Message::Create([
            'content' => $request->message,
            'is_read' => False,
            'sent_at' => Carbon::now(), //i'll check it later wakha i don't need it 
            'connect_sessions_id' => $request['connect_sessions_id'],
            'sender_id' => auth::user()->id,
        ]);

        return response()->json($message);
    }
}
