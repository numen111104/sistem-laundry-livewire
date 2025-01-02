<?php

use App\Livewire\Admin\DashboardAdmin;
use App\Livewire\Dashboard;
use App\Livewire\User\DashboardUser;
use Illuminate\Support\Facades\Route;
use App\Livewire\Walsan\DashboardWalsan;


Route::group(['middleware' => ['auth', 'user'], 'as' => 'user::'], function () {
    Route::get('/', DashboardUser::class)->name('dashboardUser');
});

Route::group(['middleware' => ['auth', 'admin'], 'as' => 'admin::'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', DashboardAdmin::class)->name('dashboardAdmin');
    });
});

Route::group(['middleware' => ['auth', 'walsan'], 'as' => 'walsan::'], function () {
    Route::prefix('walsan')->group(function () {
        Route::get('/', DashboardWalsan::class)->name('dashboardWalsan');
    });
});

require __DIR__ . '/auth.php';
