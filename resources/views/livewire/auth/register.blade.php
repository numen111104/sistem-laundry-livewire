@push('vendorCss')
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/vendors/css/extensions/toastr.min.css') }}">
@endpush

@push('pageCss')
    <link rel="stylesheet" type="text/css"
        href="{{ Vite::asset('resources/css/plugins/extensions/ext-component-toastr.css') }}">
@endpush

<div class="m-0 auth-inner row">
    <!-- Brand logo--><a class="brand-logo" href="index.html">
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
                src="{{ Vite::asset('resources/images/pages/register-v2.svg') }}" alt="Register V2" /></div>
    </div>
    <!-- /Left Text-->
    <!-- Register-->
    <div class="px-2 d-flex col-lg-4 align-items-center auth-bg p-lg-5">
        <div class="mx-auto col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
            <h2 class="mb-1 card-title fw-bold">Mulai Laundry Sekarang 😉</h2>
            <p class="mb-2 card-text">Kelola laundry Anda dengan mudah dan menyenangkan!</p>
            <form class="mt-1 auth-register-form" wire:submit='register'>
                <div class="mb-1" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                    x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                    x-on:livewire-upload-error="uploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <label class="form-label" for="register-photo">Foto Profil</label>
                    @if ($photo)
                        <div class="position-relative d-flex justify-content-center my-2">
                            <img src="{{ $photo->temporaryUrl() }}" alt="Foto Profil"
                                class="img-fluid rounded-circle border" style="max-width: 100px; max-height: 100px;" />
                            <!-- Tombol Batal Upload -->
                            <button type="button" wire:click="resetPhoto"
                                class="position-absolute top-0 end-0 translate-middle btn btn-sm btn-danger cursor-pointer"
                                style="cursor: pointer; font-size: 14px; padding: 0.125rem 0.5rem;"
                                title="Batalkan Upload">
                                X
                            </button>
                        </div>
                    @else
                        <input wire:model.live.450ms="photo" class="form-control" id="register-photo" type="file"
                            name="register-photo" accept="image/jpeg,image/png,image/jpg,image/gif,image/svg+xml"
                            aria-describedby="register-photo" tabindex="0" />
                    @endif
                    @error('photo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <!-- Progress Bar -->
                    <div x-show="uploading" class="progress mt-2" style="height: 10px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" x-bind:style="'width: ' + progress + '%'" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="register-name">Nama</label>
                    <input wire:model.live='name' class="form-control" id="register-name" type="text"
                        name="register-name" autocomplete="off" placeholder="Fulan bin Fulan"
                        aria-describedby="register-name" autofocus="" tabindex="1" />
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="form-label" for="register-email">Email</label>
                    <input autocomplete="off" wire:model.live.debounce.750ms='email' class="form-control"
                        id="register-email" type="text" name="register-email" placeholder="fulan@example.com"
                        aria-describedby="register-email" tabindex="2" />
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="form-label" for="register-password">Password</label>
                    <div wire:ignore class="input-group input-group-merge form-password-toggle">
                        <input autocomplete="off" wire:model.live.debounce.700ms='password'
                            class="form-control form-control-merge" id="register-password" type="password"
                            name="register-password" placeholder="············" aria-describedby="register-password"
                            tabindex="3" /><span class="cursor-pointer input-group-text"><i
                                data-feather="eye"></i></span>
                    </div>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="form-label" for="register-phone">No. Telpon</label>
                    <input autocomplete="off" role="tel" wire:model.live.debounce.700ms='phone'
                        class="form-control" id="register-phone" type="number" name="register-phone"
                        placeholder="+62123456789" aria-describedby="register-email" tabindex="4" />
                    @error('phone')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="form-label" for="register-gender">Jenis Kelamin</label>
                    <select wire:model.live='gender' class="form-select" id="register-gender" name="register-gender"
                        aria-describedby="register-gender" tabindex="5">
                        <option value="Male">Laki-laki</option>
                        <option value="Female">Perempuan</option>
                    </select>
                    @error('gender')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-1">
                    <div class="form-check">
                        <input class="form-check-input" wire:model.live='isSantri' id="register-privacy-policy"
                            type="checkbox" tabindex="6" />
                        <label class="form-check-label" for="register-privacy-policy">Saya adalah Santri atau
                            Walsan</label>
                    </div>
                    @error('isSantri')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <x-buttons.basic-primary wire:loading.remove wire:target="register" type="submit" :disabled="$isSubmitActive && !$errors->any() ? false : true"
                    class="w-100">Daftar</x-buttons.basic-primary>
                <x-buttons.basic-primary wire:loading wire:target="register" class="w-100 disabled">
                    <x-slot:icon>
                        <span class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true"></span></x-slot:icon>
                    <span class="visually-hidden">Loading...</span>
                </x-buttons.basic-primary>
            </form>
            <p class="mt-2 text-center"><span>Sudah ada akun?</span><a href="{{ route('login') }}"
                    wire:navigate><span>&nbsp;Masuk</span></a> sekarang!</p>
        </div>
    </div>
    <!-- /Register-->
</div>

@push('vendorScript')
    <script src="{{ asset('js/vendors/extensions/toastr.min.js') }}"></script>
@endpush

@push('pageScript')
    <script src="{{ asset('js/scripts/extensions/ext-component-toastr.js') }}"></script>
    <script data-navigate-once>
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
