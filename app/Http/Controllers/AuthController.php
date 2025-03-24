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

    public function LoginView(Request $request)
    {
        if ($request->emailPhone) {

            $user = User::where('phone', $request->emailPhone)->first();

            $credentials = [
                'email' => $user->email,
                'password' => $request->password,
            ];
        } else {
            $credentials = $request->only('email', 'password');
        }

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json(['message' => 'User logged in successfully', 'user' => $user], 200);
        } else {
            return response()->json(['error' => 'Invalid email or password'], 401);
        }
    }
}
