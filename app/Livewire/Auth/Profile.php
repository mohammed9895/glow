<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public $fullname;
    public $email;
    public $current_password;
    public $new_password;
    public function mount()
    {
        $this->fullname = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function updateProfile()
    {
        $this->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'new_password' => 'nullable|string|min:6',
        ]);
        $user = auth()->user();
        $user->name = $this->fullname;
        $user->email = $this->email;
        if ($this->current_password) {
            if (!Hash::check($this->current_password, $user->password)) {
                session()->flash('error', 'Current password is incorrect.');
                return;
            }
        }
        if ($this->new_password) {
            $user->password = Hash::make($this->new_password);
        }
        $user->save();
        session()->flash('success', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.auth.profile');
    }
}
