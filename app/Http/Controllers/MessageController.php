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
use DateTime;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $sessionid = $id;
        $user = auth::user();
        $connectSession = Connect_sessions::Where('id', $sessionid)
                                ->Where('status', 'active')->first();
        if($connectSession->learner_id === auth::user()->id || $connectSession->teacher_id === auth::user()->id){
            return view('Messages.index', compact('sessionid'));
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
    /**
     * Store a newly created resource in storage.
     */
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

        //broadcast(new MessageSent($message))->toOthers();

        return response()->json($message);
    }
}
