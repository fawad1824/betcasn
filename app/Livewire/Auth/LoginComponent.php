<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Http\RedirectResponse;

class LoginComponent extends Component
{

    public function render()
    {
        return view('livewire.auth.login-component');
    }
}
