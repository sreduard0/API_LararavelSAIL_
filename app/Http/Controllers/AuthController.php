<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(AuthRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if ($token = auth()->attempt($credentials)) {
            return response()->json(
                [
                    'data' => [
                        'token' => $token,
                        'token_type' => 'bearer',
                        'expires_in' => auth()->factory()->getTTL() * 60
                    ]
                ],
                200
            );
        } else {
            return response()->json('Email or password invalid.', 200);
        }
    }

    public function logout()
    {
        if (auth()->logout()) {
            return response()->json('Successfully logged out.', 200);
        } else {
            return response()->json('Failed to logout.', 200);
        }
    }
    public function user()
    {
        return auth()->user();
    }
}
