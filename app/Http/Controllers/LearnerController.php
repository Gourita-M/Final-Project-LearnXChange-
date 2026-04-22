<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Connect_sessions;
use Carbon\Carbon;

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
            ->Where('cs.learner_id', $learner->id)
            ->select(
                'u.firstname','u.lastname','u.profilepic',
                's.name',
                'cs.duration', 'cs.session_type', 'cs.start_time'
                ,'cs.id'
            )
            ->get();

            $recommended = DB::table('skills as s')
                            ->join('categories as c','c.id','=','s.categories_id')
                            ->inRandomOrder()
                            ->limit(5)
                            ->get();

            foreach ($ActiveSessions as $session) {

                $startTime = Carbon::parse($session->start_time);

                $session->canJoin = now()->greaterThanOrEqualTo(
                    $startTime->copy()->subMinutes(10)
                );
            }
        $badge = DB::table('users as u')
                    ->join('badges as b','b.id','=','u.badges_id')
                    ->Where('u.id', auth::user()->id)
                    ->first();
                
        return View('learner.Dashboard', compact('badge','recommended','totalHours', 'totalsessions', 'ActiveSessions', 'learner'));
    }
}
