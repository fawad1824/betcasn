<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function RegisterView(Request $request)
    {
        try {
            $user = User::create([
                'email' => $request->email,
                'name' => "test",
                'password' => bcrypt($request->lpassword),
                "lpassword" => bcrypt($request->lpassword),
                "cpassword" =>  bcrypt($request->cpassword),
                "wlpassword" =>  bcrypt($request->wlpassword),
                "wcpassword" =>  bcrypt($request->wcpassword),
                "whatsapp" => $request->whatsapp,
                // "code" => $request->code,
                "role" => '2',
                "is_admin" => '0',
            ]);

            if ($user) {
                Auth::login($user); // Log in the user
                return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
