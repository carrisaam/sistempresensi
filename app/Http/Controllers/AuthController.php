<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\ResponseBase;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function loginAttempt(Request $request)
    {
        $credentials = $request->validate([
            'nim' => 'required|string|exists:users,nim',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function getUserProfile()
    {
        $user = JWTAuth::parseToken()->authenticate();

        return ResponseBase::success('Berhasil mendapatkan data profile', [
            'user' => $user
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}