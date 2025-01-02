<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Attributes\Title;

class Login extends Component
{
    #[Title('Login')]
    public LoginForm $form;
    public $isSubmitActive = false;

    public function login()
    {
        $this->validate();
        $this->form->authenticate();
        Session::regenerate();
        $this->dispatch('sukses-login');
        $this->redirectIntended(default: route('user::dashboard', absolute: false), navigate: true);
    }

    public function isFormFilled()
    {
        if (empty($this->form->email) || empty($this->form->password)) {
            $this->isSubmitActive = false;
        } else {
            $this->isSubmitActive = true;
        }
        return $this->isSubmitActive;
    }

    public function updated($props)
    {
        $this->isFormFilled();
        if ($props == 'email') $this->validateOnly('email');
        if ($props == 'password') $this->validateOnly('password');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.guest');
    }
}
