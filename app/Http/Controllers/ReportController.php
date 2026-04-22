<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{

    public function reportMessage(Request $request)
    {
   
        $reportedinfo = DB::table('users as u')
                            ->join('messages as m', 'm.sender_id','=','u.id')
                            ->Where('m.id', $request->message_id)
                            ->select(
                                'u.id',
                                'u.firstname',
                                'm.content',
                            )->first();

        Report::Create([
            'reason' => $reportedinfo->content,
            'status' => 'Active',
            'reporter_id' => auth::user()->id,
            'reported_id' => $reportedinfo->id,
        ]);

        return Redirect('/messages/{$request->sessionid}')->with('success','You Have Reported {$reportedinfo->firstname}');
    }

    public function store(StoreReportRequest $request)
    {
        Report::Create([
            'reason' => $request['reason'],
            'status' => 'Active',
            'resolution' => $request['resolution'],
            'reporter_id' => $request['reporter_id'],
            'reported_id' => $request['reported_id'],
            'resolved_by' => $request['resolved_by'],
        ]);
    }

}
