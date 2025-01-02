<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::macro('avatar', fn(string $asset) => $this->asset("resources/images/avatars/{$asset}"));
        Vite::macro('icon', fn(string $asset) => $this->asset("resources/images/icons/{$asset}"));
        Vite::macro('logo', fn(string $asset) => $this->asset("resources/images/logo/{$asset}"));
    }
}
