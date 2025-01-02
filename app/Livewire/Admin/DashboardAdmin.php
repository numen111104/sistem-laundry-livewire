<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardAdmin extends Component
{
    #[Title('Admin Dashboard')]
    public function render()
    {
        return view('livewire.admin.dashboard-admin')->layout('layouts.app');
    }
}
