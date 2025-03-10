<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginComponent extends Component
{
    public function registerform($step)
    {
        // Handle the logic for registration step here
        // For example, storing the step in a session or state
        session()->put('registration_step', $step);

        // You can also emit an event if needed
        $this->dispatch('stepChanged', $step);
    }

    public function render()
    {
        return view('livewire.auth.login-component');
    }
}
