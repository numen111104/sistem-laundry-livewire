<?php

use Livewire\Volt\Volt;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;

Route::middleware('guest')->group(function () {
    Volt::route('login', Login::class)
        ->name('login');
    Volt::route('register', Register::class)
        ->name('register');
});
