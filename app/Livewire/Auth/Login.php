<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false; // Add the remember property

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        // Attempt to authenticate with the remember flag
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->flash('message', 'Login successful!');
            return redirect()->intended('/dashboard');
        } else {
            session()->flash('error', 'Invalid credentials.');
        }
    }
    #[Layout('components.layouts.guest')]
    #[Title('Login')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
