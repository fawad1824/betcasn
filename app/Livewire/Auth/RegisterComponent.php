<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class RegisterComponent extends Component
{
    public $register = false;
    public $activeTab = 'email';
    public $step = 0;

    public function ActiveTab($tab)
    {
        $this->activeTab = $tab;
    }
    public function registerform()
    {
        $this->register = true;
    }
    public function render()
    {
        return view('livewire.auth.register-component');
    }
}
