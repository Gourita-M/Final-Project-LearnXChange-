<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = User::Where('id', auth::user()->id)->first();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect('profile')->with('error','You Current Password is not Correct');
        }

        if (Hash::check($request->new_password, $user->password)) {
            return redirect('profile')->with('error','New password cannot be the same as current password');
            
        }

        User::Where('id', auth::user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect('profile')->with('success', 'Password changed successfully');
        }
}