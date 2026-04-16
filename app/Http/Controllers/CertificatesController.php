<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCertificatesRequest;
use App\Http\Requests\UpdateCertificatesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Certificates;

class CertificatesController extends Controller
{
    
    public function approve(Request $request)
    {

        Certificates::Where('id', $request->certifid)
                    ->update(['status' => 'approved']);

        return Redirect('/admin')->with('success','You Have Approved Certificate Request');
    }

    public function decline(Request $request)
    {

        Certificates::Where('id', $request->certifid)
                    ->update(['status' => 'decline']);

        return Redirect('/admin')->with('success','You Have Declined Certificate Request');
    }
}
