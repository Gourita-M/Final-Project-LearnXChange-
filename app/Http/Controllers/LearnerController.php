<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Connect_sessions;

class LearnerController extends Controller
{
    public function index()
    {
        $learner = auth::user();
        $totalsessions = Connect_Sessions::Where('learner_id', $learner->id)->count();
        $totalHours = DB::table('connect_sessions')
            ->where('learner_id', $learner->id)
            ->sum('duration');
        $ActiveSessions = DB::table('users as u')
            ->leftjoin('connect_sessions as cs', 'u.id', '=', 'cs.teacher_id')
            ->join('learning_requests as lr', 'lr.id', '=', 'cs.learning_requests_id')
            ->join('teacher_skills as ts', 'ts.id','=','lr.teacher_skills_id')
            ->join('skills as s','s.id','=','ts.skills_id')
            ->Where('cs.status', 'active')
            ->select(
                'u.firstname','u.lastname','u.profilepic',
                's.name',
                'cs.duration', 'cs.session_type', 'cs.start_time'

            )
            ->get();

        return View('learner.Dashboard', compact('totalHours', 'totalsessions', 'ActiveSessions', 'learner'));
    }
}
