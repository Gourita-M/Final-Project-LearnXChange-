<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Certificates;
use App\Models\Report;

class AdminController extends Controller
{
    public function index()
    {

        $totalUsers = User::Count();
        $totalCertificates = Certificates::where('status', 'pending')->Count();
        $totalReports = Report::where('status', '!=', 'resolved')->Count();
        $certificates = DB::table('certificates as c')
                        ->join('users as u','c.users_id','=','u.id')
                        ->join('teacher_skills as ts','ts.users_id','=','u.id')
                        ->join('skills as s','s.id','=','ts.skills_id')
                        ->WhereColumn('s.id', 'c.skills_id')
                        ->Where('status', 'pending')
                        ->select(
                            'c.created_at as date',
                            's.name as skillname',
                            'u.firstname',
                            'u.lastname',
                            'c.id as certifid'
                            )
                        ->get();

        $reports = DB::table('reports as r')
                    ->join('users as reporter', 'r.reporter_id', '=', 'reporter.id')
                    ->join('users as reported', 'r.reported_id', '=', 'reported.id')
                    ->where('r.status', '!=', 'resolved')
                    ->select(
                        'r.id as reportid',
                        'r.reason',
                        'r.status',
                        'r.resolution',
                        'r.created_at as date',
                        'reporter.firstname as reporter_firstname',
                        'reporter.lastname as reporter_lastname',
                        'reported.id as reported_id',
                        'reported.firstname as reported_firstname',
                        'reported.lastname as reported_lastname'
                    )
                    ->orderBy('r.created_at', 'desc')
                    ->get();

        $users = User::get();

        return View('admin', compact('users','certificates','reports','totalReports','totalCertificates','totalUsers'));
    }

    public function resolveReport(Request $request)
    {
        $request->validate([
            'report_id' => 'required|integer',
            'resolution' => 'nullable|string|max:500',
        ]);

        Report::where('id', $request->report_id)
              ->update([
                  'status' => 'resolved',
                  'resolution' => $request->resolution ?: 'Reviewed by admin',
                  'resolved_by' => auth::user()->id,
              ]);

        return Redirect('/admin')->with('success', 'Report marked as reviewed.');
    }

    public function banUser($id)
    {

        $user = User::findOrFail($id);

        if($user){
            if($user->Banned === True){
                User::Where('id', $id)->update([ 'Banned' => False ]);

                return Redirect('/admin')->with('success', "User {$user->firstname} {$user->lastname} successfully unbanned");
            }else{
                User::Where('id', $id)->update([ 'Banned' => True ]);

                return Redirect('/admin')->with('success', "User {$user->firstname} {$user->lastname} successfully banned");
            }
            
        }
        
        return Redirect('/admin')->with('success', "User is not found");
        
    }
}
