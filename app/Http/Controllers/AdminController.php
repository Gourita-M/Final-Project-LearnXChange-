<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Certificates;
use App\Models\Report;

class AdminController extends Controller
{
    public function index()
    {

        $totalUsers = User::Count();
        $totalCertificates = Certificates::where('status', 'pending')->Count();
        $totalReports = Report::Count();
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

        return View('admin', compact('certificates','totalReports','totalCertificates','totalUsers'));
    }
}
