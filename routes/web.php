<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;

Route::name('user::')->middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
});

require __DIR__ . '/auth.php';
