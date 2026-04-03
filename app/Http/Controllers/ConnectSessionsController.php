<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeconnect_sessionsRequest;
use App\Http\Requests\Updateconnect_sessionsRequest;
use Illuminate\Http\Request;
use App\Models\Connect_sessions;
use DateTime;
use App\Models\LearningRequest;

class ConnectSessionsController extends Controller
{
    public function acceptRequest(Storeconnect_sessionsRequest $request)
    {

        $start = new DateTime($request['start_time']);
        $end = new DateTime($request['end_time']);

        $interval = $start->diff($end);

        $hours = ($interval->days * 24) + $interval->h;

        connect_sessions::Create([
            'session_type' => $request['session_type'],
            'status' => 'active',
            'start_time' => $request['start_time'],
            'end_time' => $request['end_time'],
            'duration' => $hours,
            'meeting_link' => 'will be created soon',
            'learning_requests_id' => $request['request_id'],
            'learner_id' => $request['learner_id'],
            'teacher_id' => $request['teacher_id'],
        ]);

        LearningRequest::Where('id', $request->request_id)
                        ->update(['status' => 'Accepted']);

        return Redirect('/teacher')->with('success','You Have Accepted Request ');
    }
}