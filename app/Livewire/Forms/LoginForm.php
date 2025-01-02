<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginForm extends Form
{
    #[Validate('string|email')]
    public string $email = '';

    #[Validate('min:4|string')]
    public string $password = '';

    #[Validate('boolean')]
    public bool $remember = false;

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        // Cek apakah email terdaftar
        $user = User::where('email', $this->email)->first();

        if (!$user) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'form.email' => 'Email tidak terdaftar!',
            ]);
        }

        // Cek apakah password benar
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'form.password' => 'Password salah!',
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'form.email' => 'Terlalu banyak percobaan login. Silakan coba lagi dalam ' . $seconds . ' detik.',
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email) . '|' . request()->ip());
    }
}
