<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginAndRegister extends Component
{
    public function render()
    {
        return view('livewire.frontend.login-and-register')->layout("layouts.app");
    }
}
