<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login()
    {
        $validated = $this->validate([ 
            'email' => 'email|required|exists:users,email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validated)){
            return redirect()->route('home');
        }

        $this->addError('invalid', 'Incorrect credentials!');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
