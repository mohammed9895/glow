<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|string|max:255')]
    public $fullname;
    #[Validate('required|email|max:255|unique:users,email')]
    public $email;
    #[Validate('required|string|min:6')]
    public $password;

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->fullname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
