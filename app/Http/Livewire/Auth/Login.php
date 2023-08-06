<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    public function submit()
    {
        $valid = $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        dd($valid);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}