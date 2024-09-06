<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function testLogin(Request $request)
    {
        // return "hello";
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                "message" => "invalid credentials"
            ]);
        }
        $user  = $request->user();
        return response()->json([
            "message" => "logged in successfully",
            'token' => $user->createToken($user->email)->plainTextToken
        ]);
    }
    public function testLogout(Request $request)
    {
        dd('hello');
        // return "hello";
       dd(auth()->user());
    }
}
