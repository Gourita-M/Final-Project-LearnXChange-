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
        $totalCertificates = Certificates::Count();
        $totalReports = Report::Count();
        $certificates = DB::table('certificates')
                        ->join('')

        return View('admin', compact('certificates','totalReports','totalCertificates','totalUsers'));
    }
}
