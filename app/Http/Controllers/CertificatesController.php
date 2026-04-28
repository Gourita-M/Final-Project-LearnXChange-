<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCertificatesRequest;
use App\Http\Requests\UpdateCertificatesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Certificates;

class CertificatesController extends Controller
{
    public function requestCertificate(Request $request)
    {
        $request->validate([
            'skill_id' => 'required|integer',
        ]);

        $teacherSkill = DB::table('teacher_skills')
            ->where('id', $request->skill_id)
            ->where('users_id', auth::user()->id)
            ->first();

        if (! $teacherSkill) {
            return redirect()->back()->with('error', 'Skill not found or not owned by you.');
        }

        $existing = Certificates::where('users_id', auth()->id())
            ->where('skills_id', $teacherSkill->skills_id)
            ->where('status', 'pending')
            ->exists();

        if ($existing) {
            return redirect()->back()->with('error', 'You already have a pending certificate request for this skill.');
        }

        Certificates::create([
            'users_id' => auth::user()->id,
            'skills_id' => $teacherSkill->skills_id,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Certificate request submitted successfully.');
    }

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
