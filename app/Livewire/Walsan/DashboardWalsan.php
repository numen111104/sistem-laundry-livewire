<?php

namespace App\Livewire\Walsan;

use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardWalsan extends Component
{
    #[Title('Walsan Dashboard')]
    public function render()
    {
        return view('livewire.walsan.dashboard-walsan')->layout('layouts.app');
    }
}
