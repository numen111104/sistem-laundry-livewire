<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardUser extends Component
{
    #[Title('User Dashboard')]
    public function render()
    {
        return view('livewire.user.dashboard-user')->layout('layouts.app');
    }
}
