<nav class="p-0 navbar navbar-light bg-light navbar-expand d-lg-none d-xl-none fixed-bottom">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item active">
            <a href="/" class="text-center nav-link">
                <i data-feather='home' class="text-primary"></i>
                <span class="small d-block"><b>Home</b></span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a wire:navigate href="{{ route('staff_dapur::tapping_qr') }}" class="text-center nav-link">
                <i data-feather='check-circle'
                    class="{{ Route::is('staff_dapur::tapping_qr') ? 'text-primary' : '' }}"></i>
                <span class="small d-block {{ Route::is('staff_dapur::tapping_qr') ? 'text-primary' : '' }}">
                    <b>Tapping</b>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a wire:navigate href="{{ route('staff_dapur::riwayat_makan_santri') }}" class="text-center nav-link">
                <i data-feather='book-open'
                    class="{{ Route::is('staff_dapur::riwayat_makan_santri') ? 'text-primary' : '' }}"></i>
                <span
                    class="small d-block {{ Route::is('staff_dapur::riwayat_makan_santri') ? 'text-primary' : '' }}">
                    <b>Absensi</b>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a wire:navigate href="{{ route('staff_dapur::menu_makanan') }}" class="text-center nav-link">
                <i data-feather='pie-chart'
                    class="{{ Route::is('staff_dapur::menu_makanan') ? 'text-primary' : '' }}"></i>
                <span class="small d-block {{ Route::is('staff_dapur::menu_makanan') ? 'text-primary' : '' }}">
                    <b>Makanan</b>
                </span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link menu-toggle" href="#">
                <i class="ficon" data-feather="menu"></i>
                <span class="small d-block"><b>Menu</b></span>
            </a>
        </li>
    </ul>
</nav>
