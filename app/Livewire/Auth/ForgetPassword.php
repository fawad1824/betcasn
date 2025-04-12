<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ForgetPassword extends Component
{
    public $showLangModal = false;
    public $steps = '1';
    public $title = 'Forgot Password';
    public $title1 = 'Retrieve Password via Email';
    public $title2 = '';
    public $otp, $otpgenerate, $email, $lppassword, $lcpassword;
    public function render()
    {
        return view('livewire.auth.forget-password');
    }


    public function otpSending()
    {

        $this->title = 'Forgot Password';
        $this->title1 = 'Reset your login password';
        $this->title2 = '';

        $this->validate([
            'email' => 'required',
        ]);

        $this->otpgenerate = rand(10000, 99999); // Generate 5-digit OTP

        $email = $this->email;
        $otp = $this->otpgenerate;
        $this->otp = $this->otpgenerate;

        $msg = "Betcrown OTP Confirmation\n\n";
        $msg .= "Dear User,\n\n";
        $msg .= "You are taking action on your Betcasn account. Please use the following OTP to complete identity verification:\n\n";
        $msg .= $otp . "\n\n";
        $msg .= "This OTP is valid for 10 minutes. Please complete the verification as soon as possible.\n\n";
        $msg .= "If you did not request this OTP, please ignore this email.\n\n";
        $msg .= "Security Reminder: Please do not share this OTP with anyone, even if they claim to be Betcasn staff. Beware of phishing emails and phone scams.\n\n";
        $msg .= "If you have any questions, please contact our customer support team.\n";

        Mail::raw($msg, function ($message) use ($email) {
            $message->to($email)
                ->subject('Your OTP Code');
        });

        $this->dispatch('showToast', 'OTP Sent Successfully!', 'success');
    }
    public function backSteps()
    {
        $this->steps = $this->steps - 1;
    }
    public function step2()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'otp' => 'required',
        ]);

        if ($this->otp != $this->otpgenerate) {
            $this->dispatch('showToast', 'OTP Not Match!', 'success');
        }
        $this->steps = $this->steps + 1;
    }

    public function step3()
    {
        $this->validate([
            'lppassword' => 'required|min:6',
            'lcpassword' => 'required|min:6',
        ]);

        $user =  User::where('email', $this->email)->first();
        $user->password = Hash::make($this->lppassword);
        $user->lpassword = Hash::make($this->lppassword);
        $user->cpassword = Hash::make($this->lcpassword);
        $user->save();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->lppassword])) {
            $this->dispatch('showToast', 'Login Successfully!', 'success');
            return redirect()->route('home');
        }
    }

    public function toggleLanguageModal()
    {
        $this->showLangModal = true;
    }
    public function toggleLanguageModalClose()
    {
        $this->showLangModal = false;
    }
}
