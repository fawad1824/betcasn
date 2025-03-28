<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function RegisterView(Request $request)
    {
        return $request->all();
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
                "countrycode" => '+' . $request->code,
                "phone" => '+' . $request->code . '' . $request->phone,
                "uuid" => $request->uuid,
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
    public function otpSend(Request $request)
    {

        try {
            $email = $request->input('email');
            $otp = $request->input('otp');

            if (!$email || !$otp) {
                return response()->json(['error' => 'Email and OTP are required'], 400);
            }


            // Send OTP via email
            Mail::raw("Your OTP is: $otp", function ($message) use ($email) {
                $message->to($email)
                    ->subject('Your OTP Code');
            });

            return response()->json(['message' => 'OTP sent successfully!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send OTP', 'details' => $e->getMessage()], 500);
        }
    }
}
