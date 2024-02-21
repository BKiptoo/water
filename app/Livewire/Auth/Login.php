<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    public $remember;

    public function render()
    {
//        dd(2029);
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }

    public function login()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user using the provided credentials
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password], $this->remember)) {
            // Authentication passed, redirect the authenticated user
            return redirect()->intended('welcome');
        } else {
            // Authentication failed, display error message
            session()->flash('error', 'Invalid username or password. Please try again.');
        }
    }

}
