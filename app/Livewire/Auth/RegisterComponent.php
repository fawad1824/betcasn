<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $steps = 1;
    public $activeTab = 'email';
    public $showLangModal = false;

    public $email;
    public $phone;
    public $otp;
    public $otpgenerate;
    public $lppassword;
    public $lcpassword;
    public $wlpassword;
    public $wcppassword;
    public $whatsapp;
    public $code;

    public $language = 'English';

    public $title = 'Register';
    public $title1 = 'Email Registration';
    public $title2 = '';
    public $countryCode = '92';
    public $countryCodeModel = false;

    protected $rules = [
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'otp' => 'required|min:4|max:6',
        'lppassword' => 'required|min:6',
        'lcpassword' => 'required|same:lppassword',
        'wlpassword' => 'required',
        'wcppassword' => 'required|same:wlpassword',
        'whatsapp' => 'required',
        'code' => 'required',
    ];

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function openModel()
    {
        $this->countryCodeModel = true;
    }
    public function closeModelCountry()
    {
        $this->countryCodeModel = false;
    }
    public function selectPhone($code)
    {
        $this->countryCode = $code;
        $this->countryCodeModel = false;
    }
    public function closeLanguage()
    {
        $this->showLangModal = false;
    }
    public function toggleLanguageModal()
    {
        $this->showLangModal = !$this->showLangModal;
    }

    public function setLanguage($lang)
    {
        $this->language = $lang;
        $this->showLangModal = false;
    }

    public function step2()
    {
        // You can use tab-specific validation here if needed
        $this->validateOnly($this->activeTab === 'email' ? 'email' : 'phone');

        $this->validate([
            'email' => 'required|unique:users,email',
            'otp' => 'required',
        ]);

        if ($this->activeTab == 'email') {
            if ($this->otp != $this->otpgenerate) {
                $this->dispatch('showToast', 'OTP Not Match');
                return;
            }
        }


        $this->title = 'Register';
        $this->title1 = 'Set your login password';
        $this->title2 = 'Password length 6-16 characters';

        $this->steps = 2;
    }

    public function step3()
    {
        $this->validate([
            'lppassword' => 'required|min:6',
            'lcpassword' => 'required|same:lppassword',
        ]);


        $this->title = 'Register';
        $this->title1 = 'Set Withdrawal Password';
        $this->title2 = 'Set Withdrawal Password';
        $this->steps = 3;
    }
    public function step4()
    {
        $this->validate([
            'wlpassword' => 'required|min:6',
            'wcppassword' => 'required|same:wlpassword',
        ]);

        $this->title = 'Register';
        $this->title1 = 'Other Options';
        $this->title2 = 'Set Withdrawal Password';
        $this->steps = 4;
    }

    public function step5()
    {

        $this->validate([
            'whatsapp' => 'required|min:6',
            'code' => 'required',
        ]);

        $this->title = 'Register';
        $this->title1 = 'Other Options';
        $this->title2 = 'Set Withdrawal Password';

        // dd($this->all());
        $user = new User();
        $user->uuid = rand(109999000, 999999999);
        $user->email = $this->email ?? "";
        $user->name =  "";
        $user->phone = $this->phone ?? "";
        $user->password = Hash::make($this->lppassword);
        $user->lpassword = Hash::make($this->lppassword);
        $user->cpassword = Hash::make($this->lcpassword);
        $user->wlpassword = Hash::make($this->wlpassword);
        $user->wcpassword = Hash::make($this->wcppassword);
        $user->whatsapp = $this->whatsapp;
        $user->countrycode = $this->countryCode;
        $user->is_admin = "0";
        $user->role = "2";
        $user->save();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->lppassword])) {
            $this->dispatch('showToast', 'OTP Sent Successfully!', 'success');
            return redirect()->route('home');
        }
    }

    public function backSteps($step)
    {
        $this->steps = max(1, $step);
    }

    public function otpSending()
    {
        if ($this->activeTab == 'phone') {
            $this->validate([
                'phone' => 'required',
            ]);

            $this->otpgenerate = rand(10000, 99999);
            $this->otp = $this->otpgenerate;
        } elseif ($this->activeTab == 'email') {
            $this->validate([
                'email' => 'required|email',
            ]);

            $this->otpgenerate = rand(10000, 99999); // Generate 5-digit OTP

            $email = $this->email;
            $otp = $this->otpgenerate;
            $this->otp = $this->otpgenerate;
            $msg = "{$otp} is the OTP for the verification of your email. OTPs are secret. Therefore do not disclose this to anyone.";

            // Send OTP via email
            Mail::raw($msg, function ($message) use ($email) {
                $message->to($email)
                    ->subject('Your OTP Code');
            });
        }

        $this->dispatch('showToast', 'OTP Sent Successfully!', 'success');
    }

    public function render()
    {
        return view('livewire.auth.register-component');
    }
}
