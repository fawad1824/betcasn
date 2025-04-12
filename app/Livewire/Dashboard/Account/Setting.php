<?php

namespace App\Livewire\Dashboard\Account;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Setting extends Component
{
    public $imageModel = false;
    public $NameModel = false;
    public $loginPassword = false;
    public $genderModel = false;
    public $WihdrawlModel = false;
    public $loginModel = false;
    public $WihdrawAccountlModel = false;
    public $name, $gender, $email, $phone, $image, $countrycode, $network = 'TRC20';


    public $new_password;
    public $confirm_password;

    public $showNewPassword = false;
    public $showConfirmPassword = false;

    public function toggleNewPasswordVisibility()
    {
        $this->showNewPassword = !$this->showNewPassword;
    }

    public function toggleConfirmPasswordVisibility()
    {
        $this->showConfirmPassword = !$this->showConfirmPassword;
    }

    public $avatars = [
        'assets/images/avaitor/1.webp',
        'assets/images/avaitor/2.png',
        'assets/images/avaitor/3.png',
        'assets/images/avaitor/4.png',
        'assets/images/avaitor/5.png',
        'assets/images/avaitor/6.png',
        'assets/images/avaitor/7.png',
        'assets/images/avaitor/8.png',
    ];


    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->gender = Auth::user()->gender;
        $this->email = Auth::user()->email;
        $this->phone = '+' . Auth::user()->countrycode . '' . Auth::user()->phone;
        $this->image = Auth::user()->image;
    }
    public function changeWithdrawlAccountModel()
    {
        $this->WihdrawAccountlModel = true;
    }

    public function changeWithdrawlAccountModelClose()
    {
        $this->WihdrawAccountlModel = false;
    }

    public $selectedAvatar = null;

    public function selectAvatar($avatar)
    {
        $this->selectedAvatar = $avatar;
    }

    public function changeImage()
    {
        $this->imageModel = true;
    }

    public function saveAvatar()
    {
        $checUser = User::where('id', Auth::user()->id)->first();
        $checUser->image = $this->selectedAvatar;
        $checUser->save();
        $this->dispatch('showToast', 'Avatar Added Successfully!');
        $this->imageModel = false;
        $this->image = $this->selectedAvatar;
    }

    public function changeWihdrawlModel()
    {
        $this->WihdrawlModel = true;
    }
    public function changeWihdrawlModelClose()
    {
        $this->WihdrawlModel = false;
    }

    public function changeLoginlModel()
    {
        $this->loginModel = true;
    }
    public function changeLoginlModelClose()
    {
        $this->loginModel = false;
    }

    public function changeName()
    {
        $this->NameModel = true;
        $checUser = User::where('id', Auth::user()->id)->first();
        $this->name = $checUser->name;
    }

    public function saveName()
    {
        $checUser = User::where('id', Auth::user()->id)->first();
        $checUser->name = $this->name;
        $checUser->save();
        $this->NameModel = false;

        $this->dispatch('showToast', 'Name Added Successfully!');
    }

    public function saveGender()
    {
        $checUser = User::where('id', Auth::user()->id)->first();
        $checUser->gender = $this->gender;
        $checUser->save();
        $this->genderModel = false;

        $this->dispatch('showToast', 'Gender Added Successfully!');
    }
    public function changeGender()
    {
        $checUser = User::where('id', Auth::user()->id)->first();
        $this->gender = $checUser->gender;
        $this->genderModel = true;
    }
    public function closeGenderModel()
    {
        $this->genderModel = false;
    }
    public function closeImageModel()
    {
        $this->imageModel = false;
    }
    public function closeNameModel()
    {
        $this->NameModel = false;
    }
    public function render()
    {
        return view('livewire.dashboard.account.setting');
    }
}
