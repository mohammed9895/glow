<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;
    #[Validate('required|string|min:6')]
    public $password;

    public function login()
    {
        $this->validate();

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('/');
        }
        else {
            session()->flash('error', 'The provided credentials do not match our records.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
