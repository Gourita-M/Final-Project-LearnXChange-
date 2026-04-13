<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Categories;

class ProfileController extends Controller
{
    public function index()
    {

        $user = auth::user();

        $userskills = DB::table('users as u')
                    ->join('teacher_skills as ts','ts.users_id','=','u.id')
                    ->join('skills as s','s.id','=','ts.skills_id')
                    ->select('s.name', 's.id as skillid')
                    ->get();
        $categories = Categories::get();

        return view('Profile.index', compact('categories','user','userskills'));

    }

    public function editInfo(Request $request)
    {
        
        $data = $request->validate([
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'bio' => 'required|string',
        ]);

        User::Where('id', auth::user()->id)
                ->update([
                    'firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'Bio' => $data['bio'],
                ]);
        
        return Redirect('/profile')->with('success','Your Profile Info is Updated');
    }
}
