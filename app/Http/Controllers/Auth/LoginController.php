<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->hasRole('teacher')) {
            return redirect('/teacher')->with('success',"Welcome Back " . Auth::user()->firstname);
            }

            if ($user->hasRole('learner')) {
                return redirect('/learner')->with('success',"Welcome Back " . Auth::user()->firstname);
            }

            if ($user->hasRole('admin')) {
                return redirect('/admin')->with('success',"Welcome Back " . Auth::user()->firstname);
            }
            }

            return Redirect('/login')->with('error','Your Email or Password in Not Correct');
    }
}