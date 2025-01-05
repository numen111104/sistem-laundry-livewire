@push('vendorCss')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ vendorCss('toastr.min.css') }}">
@endpush

@push('pageCss')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ pluginCss('ext-component-toastr.min.css') }}">
@endpush

<div class="m-0 auth-inner row">
    <a class="brand-logo" href="javascript:void(0)">
        <img src="{{ Vite::logo('logo.png') }}" alt="Al-Mahabbah Laundry" height="70">
        <h2 class="brand-text mt-1 text-primary ms-1">Al-Mahabbah Laundry</h2>
    </a>
    <!-- /Brand logo-->
    <!-- Left Text-->
    <div class="p-5 d-none d-lg-flex col-lg-8 align-items-center">
        <div class="px-5 w-100 d-lg-flex align-items-center justify-content-center"><img class="img-fluid"
                src="{{ Vite::asset('resources/images/pages/login-v2.svg') }}" alt="Login V2" /></div>
    </div>
    <!-- /Left Text-->
    <!-- Login-->
    <div class="px-2 d-flex col-lg-4 align-items-center auth-bg p-lg-5">
        <div class="mx-auto col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
            <h2 class="mb-1 card-title fw-bold">Welcome to Al-Mahabbah Laundry! 👋</h2>
            <p class="mb-2 card-text">Silakan Log-in ke akun Anda dan mulai laundri sekarang! </p>
            <x-inputs.session :status="session('status')" />
            <form class="mt-2 auth-login-form" wire:submit='login'>
                <div class="mb-1">
                    <label class="form-label" for="login-email">Email</label>
                    <input class="form-control" id="login-email" type="text" wire:model.live='form.email'
                        name="login-email" placeholder="john@example.com" aria-describedby="login-email" autofocus=""
                        tabindex="1" />
                    @error('form.email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-1">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="login-password">Password</label><a
                            href="auth-forgot-password-cover.html"><small>Lupa Password?</small></a>
                    </div>
                    <div wire:ignore class="input-group input-group-merge form-password-toggle">
                        <input wire:model.live='form.password' class="form-control form-control-merge"
                            id="login-password" type="password" name="login-password" placeholder="············"
                            aria-describedby="login-password" tabindex="2" /><span
                            class="cursor-pointer input-group-text"><i data-feather="eye"></i></span>
                    </div>
                    @error('form.password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-1">
                    <div class="form-check">
                        <input wire:model.live='form.remember' class="form-check-input" id="remember-me" type="checkbox"
                            tabindex="3" />
                        <label class="form-check-label" for="remember-me"> Ingat Saya</label>
                    </div>
                </div>
                <x-buttons.basic-primary wire:loading.remove wire:target="login" type="submit" :disabled="$isSubmitActive && !$errors->any() ? false : true"
                    class="w-100">Masuk</x-buttons.basic-primary>
                <x-buttons.basic-primary wire:loading wire:target="login" class="w-100 disabled">
                    <x-slot:icon>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></x-slot:icon>
                    <span class="visually-hidden">Loading...</span>
                </x-buttons.basic-primary>
            </form>
            <p class="mt-2 text-center"><span>Baru di platform kami?</span><a href="{{ route('register') }}"
                    wire:navigate><span>&nbsp;Buat akun</span></a></p>
        </div>
    </div>
    <!-- /Login-->
</div>

@push('vendorScript')
    <script data-navigate-once src="{{ vendorJs('toastr.min.js') }}"></script>
@endpush

@push('pageScript')
    <script data-navigate-once src="{{ pluginJs('ext-component-toastr.min.js') }}"></script>
    <script data-navigate-once>
        window.addEventListener('sukses-logout', function() {
            'use strict';
            var isRtl = $('html').attr('data-textdirection') === 'rtl';

            // On load Toast
            setTimeout(function() {
                toastr['info'](
                    'Anda sudah keluar',
                    'Bye!', {
                        closeButton: true,
                        tapToDismiss: true,
                        rtl: isRtl
                    }
                );
            }, 500);
        });
        window.addEventListener('gagal-register', function() {
            'use strict';
            var isRtl = $('html').attr('data-textdirection') === 'rtl';

            // On load Toast
            setTimeout(function() {
                toastr['error'](
                    'Gagal melakukan registrasi',
                    'OK!', {
                        closeButton: true,
                        tapToDismiss: true,
                        rtl: isRtl
                    }
                );
            }, 500);
        });
    </script>
@endpush
