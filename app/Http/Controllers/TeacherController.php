<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Connect_sessions;
use App\Models\Badges;
use App\Models\Certificates;
use Carbon\Carbon;

class TeacherController extends Controller
{
    public function index()
    {
        $requests = DB::table('users as u')
                    ->join('learning_requests as l', 'l.learner_id', '=', 'u.id')
                    ->join('teacher_skills as ts', 'l.teacher_skills_id', '=','ts.id')
                    ->join('skills as s', 's.id','=','ts.skills_id')
                    ->Where('ts.users_id', auth::user()->id)
                    ->Where('l.status', 'pending')
                    ->Select(
                        'ts.users_id as teacher_id',
                        'l.learner_id',
                        'l.id',
                        'u.firstname',
                        'u.lastname',
                        's.name',
                        'l.description',
                        'u.xp'
                        )
                    ->get();

        $ActiveSessions = DB::table('connect_sessions as cs')
                            ->join('users as u', 'cs.learner_id','=','u.id')
                            ->Where('status', 'active')
                            ->Where('teacher_id', auth::user()->id)
                            ->Select(
                                'cs.session_type as type',
                                'cs.meeting_link',
                                'cs.start_time',
                                'cs.end_time',
                                'u.firstname',
                                'u.lastname',
                                'u.profilepic',
                                'cs.status',
                                'cs.id',
                            )
                            ->get();
                            
        $reviews = DB::table('reviews as r')
                        ->join('connect_sessions as cs', 'r.connect_sessions_id','=','cs.id')
                        ->join('users as u', 'u.id','=','cs.learner_id')
                        ->Select(
                            'u.firstname',
                            'u.lastname',
                            'u.profilepic',
                            'r.comment',
                            'r.rating'
                        )->get();
        
        $badge = DB::table('users as u')
                    ->join('badges as b','b.id','=','u.badges_id')
                    ->Where('u.id', auth::user()->id)
                    ->first();

        $teacherSkills = DB::table('teacher_skills as ts')
                        ->join('skills as s', 'ts.skills_id', '=', 's.id')
                        ->where('ts.users_id', auth::user()->id)
                        ->select(
                            'ts.id as teacherskillid',
                            's.id as skill_id',
                            's.name',
                            'ts.level',
                            'ts.years_experience'
                        )
                        ->get();

        $pendingCertificates = Certificates::where('users_id', auth::user()->id)
                        ->where('status', 'pending')
                        ->pluck('skills_id')
                        ->toArray();

        foreach ($ActiveSessions as $session) {

            $startTime = Carbon::parse($session->start_time);

            $session->canJoin = now()->greaterThanOrEqualTo(
                $startTime->copy()->subMinutes(10)
            );
        }
                        
        return View('teacher.Dashboard', compact('badge','requests', 'ActiveSessions', 'reviews', 'teacherSkills', 'pendingCertificates'));
    }
}
