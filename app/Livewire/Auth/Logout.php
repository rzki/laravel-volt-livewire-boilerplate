<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    protected $listeners = ['logout'=>'logout'];
    public function logout()
    {
        Auth::logout(); // Log out the user
        session()->invalidate(); // Invalidate the session
        session()->regenerateToken(); // Regenerate the CSRF token

        return $this->redirectRoute('login'); // Redirect to login page
    }
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
