@push('vendorCss')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ vendorCss('toastr.min.css') }}">
@endpush

@push('pageCss')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ pluginCss('ext-component-toastr.min.css') }}">
@endpush

<div class="m-0 auth-inner row">
    <!-- Brand logo-->
    <a class="brand-logo" href="javascript:void(0)">
        <img src="{{ Vite::logo('logo.png') }}" alt="Al-Mahabbah Laundry" height="70">
        <h2 class="brand-text mt-1 text-primary ms-1">Al-Mahabbah Laundry</h2>
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
    <script data-navigate-once src="{{ vendorJs('toastr.min.js') }}"></script>
@endpush

@push('pageScript')
    <script data-navigate-once src="{{ pluginJs('ext-component-toastr.min.js') }}"></script>
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
