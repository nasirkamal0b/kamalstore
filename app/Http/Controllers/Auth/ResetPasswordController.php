<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{

public function showResetForm($token)
{
    // Find the reset request using the token
    $resetData = DB::table('password_resets')->where('token', $token)->first();

    if (!$resetData) {
        return response()->view('error.404', [], 404);
    }

    return view('auth.reset-password', [
        'token' => $token,
        'email' => $resetData->email // Pass the email to the view
    ]);
}


    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
            'token' => 'required'
        ]);

        // Verify token
        $resetEntry = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if (!$resetEntry) {
            return redirect()->back()->with('error', 'Invalid or expired token.');
        }

        // Update user's password
        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        // Remove reset token from DB
        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('success', 'Password has been reset.');
    }
}
