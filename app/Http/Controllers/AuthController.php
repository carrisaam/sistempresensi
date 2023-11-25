<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\ResponseBase;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'nim' => 'required|string|exists:users,nim',
            'password' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
            return ResponseBase::error($validator->errors(), 422);

        $user = User::where('nim', $request->nim)->firstOrFail();

        if (!Hash::check($request->password, $user->password)) {
            return ResponseBase::error('Password salah', 403);
        }

        $token = JWTAuth::fromUser($user);

        return ResponseBase::success('Login berhasil', [
            'token' => $token,
            'type' => 'bearer'
        ]);
    }

    public function getUserProfile()
    {
        $user = JWTAuth::parseToken()->authenticate();

        return ResponseBase::success('Berhasil mendapatkan data profile', [
            'user' => $user
        ]);
    }

    public function logout()
    {
        JWTAuth::invalidate();

        return ResponseBase::success('Logout berhasil');
    }
}
