@push('vendorCss')
    <link data-navigate-once rel="stylesheet" type="text/css"
        href="{{ Vite::asset('resources/vendors/css/extensions/toastr.min.css') }}">
@endpush

@push('pageCss')
    <link data-navigate-once rel="stylesheet" type="text/css"
        href="{{ Vite::asset('resources/css/plugins/extensions/ext-component-toastr.css') }}">
@endpush

<div class="m-0 auth-inner row">
    <a class="brand-logo" href="index.html">
        <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
            <defs>
                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                    <stop stop-color="#000000" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                    <g id="Group" transform="translate(400.000000, 178.000000)">
                        <path class="text-primary" id="Path"
                            d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                            style="fill: currentColor"></path>
                        <path id="Path1"
                            d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                            fill="url(#linearGradient-1)" opacity="0.2"></path>
                        <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                            points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                        <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                            points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                            points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                    </g>
                </g>
            </g>
        </svg>
        <h2 class="brand-text text-primary ms-1">{{ env('APP_NAME') ?? 'Al-Mahabbah Laundry' }}</h2>
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
                        <input wire:model.live='form.remember' class="form-check-input" id="remember-me"
                            type="checkbox" tabindex="3" />
                        <label class="form-check-label" for="remember-me"> Ingat Saya</label>
                    </div>
                </div>
                <x-buttons.basic-primary wire:loading.remove wire:target="login" type="submit" :disabled="$isSubmitActive && !$errors->any() ? false : true"
                    class="w-100">Masuk</x-buttons.basic-primary>
                <x-buttons.basic-primary wire:loading wire:target="login" class="w-100 disabled">
                    <x-slot:icon>
                        <span class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true"></span></x-slot:icon>
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
    <script src="{{ asset('js/vendors/extensions/toastr.min.js') }}"></script>
@endpush

@push('pageScript')
    <script data-navigate-once src="{{ asset('js/scripts/extensions/ext-component-toastr.js') }}"></script>
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
