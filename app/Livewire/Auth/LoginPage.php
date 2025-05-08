<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class LoginPage extends Component
{
    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $password = '';

    public function mount()
    {
        if (request()->has('email')) {
            $this->email = request()->get('email');
        }
        if (request()->has('password')) {
            $this->password = request()->get('password');
        }
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return $this->redirect('/admin', navigate: true); // reload trang admin nếu là admin
            }
            // Nếu là user thường, chuyển hướng về trang chủ và giữ đăng nhập
            return $this->redirect('/', navigate: true);
        }

        $this->addError('email', 'These credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
