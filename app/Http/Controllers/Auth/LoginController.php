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
            return redirect('/teacher');
            }

            if ($user->hasRole('learner')) {
                return redirect('/learner');
            }

            return redirect('/');
            }

            return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}