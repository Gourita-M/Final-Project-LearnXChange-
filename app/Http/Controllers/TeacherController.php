<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Connect_sessions;

class TeacherController extends Controller
{
    public function index()
    {
        $requests = DB::table('users as u')
                    ->join('learning_requests as l', 'l.learner_id', '=', 'u.id')
                    ->join('teacher_skills as ts', 'l.teacher_skills_id', '=','ts.id')
                    ->join('skills as s', 's.id','=','ts.skills_id')
                    ->Where('u.role', 'learner')
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
                        
        return View('teacher.Dashboard', compact('requests', 'ActiveSessions', 'reviews'));
    }
}
