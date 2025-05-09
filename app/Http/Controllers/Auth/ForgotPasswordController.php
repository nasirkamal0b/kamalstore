<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function showForgotPassForm()
    {
        return view('auth.forgotPassword');
    }

    public function sendPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'No account found with this email.');
        }

        // Generate a password reset token
        $token = str::random(60);
        \DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now()
        ]);

        $resetLink = url('/reset/' . $token);

        Mail::to($request->email)->send(new ForgotPassword($resetLink));

        return redirect()->route('EmailForm')->with('PasswordMessage', 'Password Sent Successfully');
    }
}
