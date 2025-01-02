<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

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
        switch (auth()->user()->role_id) {
            case User::ROLE_USER:
                $this->dispatch('sukses-login');
                $this->redirect(route('user::dashboardUser', absolute: true), navigate: true);
                break;
            case User::ROLE_ADMIN:
                $this->dispatch('sukses-login');
                $this->redirect(route('admin::dashboardAdmin', absolute: true), navigate: true);
                break;
            case User::ROLE_WALSAN:
                $this->dispatch('sukses-login');
                $this->redirect(route('walsan::dashboardWalsan', absolute: true), navigate: true);
                break;
            default:
                $this->dispatch('sukses-login');
                $this->redirect(route('user::dashboardUser', absolute: true), navigate: true);
                break;
        }
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
