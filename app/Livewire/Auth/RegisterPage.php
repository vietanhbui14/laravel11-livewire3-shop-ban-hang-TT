<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Rule;

class RegisterPage extends Component
{
    #[Rule('required|min:3|max:255')]
    public $name = '';

    #[Rule('required|email|unique:users,email')]
    public $email = '';

    #[Rule('required|min:8')]
    public $password = '';

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'user', // luôn là user khi đăng ký
        ]);

        auth()->login($user);

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
