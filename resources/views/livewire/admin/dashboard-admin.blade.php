@push('vendorCss')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ vendorCss('toastr.min.css') }}">
@endpush

@push('pageCss')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ pluginCss('ext-component-toastr.min.css') }}">
@endpush
<div>
    <x-links.breadcrumb>
        <x-slot:judul_halaman>Dashboard</x-slot:judul_halaman>
        <x-slot:halaman_aktif>Dashboard</x-slot:halaman_aktif>
    </x-links.breadcrumb>
    <div class="row mb-1">
        <div class="col-md-6 col-lg-3 col-12">
            <div class="mb-1 mb-lg-0 mb-xl-1 card mt-lg-1 mt-xl-0">
                <div class="card-header">
                    <div>
                        <p class="mb-0 card-text">Laundry Proses</p>
                        <h2 class="text-info fw-bolder">{{ $this->laundryProses() }}</h2>
                    </div>
                    <div class="m-0 avatar bg-light-info p-50">
                        <div class="avatar-content">
                            <span><i class="feather feather-briefcase font-medium-5"
                                    data-feather="briefcase"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12">
            <div class="mb-1 mb-lg-0 mb-xl-1 card mt-lg-1 mt-xl-0">
                <div class="card-header">
                    <div>
                        <p class="mb-0 card-text">Laundry Selesai</p>
                        <h2 class="text-primary fw-bolder">{{ $this->laundrySelesai() }}</h2>
                    </div>
                    <div class="m-0 avatar bg-light-primary p-50">
                        <div class="avatar-content">
                            <span><i class="feather feather-shopping-bag font-medium-5"
                                    data-feather="shopping-bag"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12">
            <div class="mb-1 mb-lg-0 mb-xl-1 card mt-lg-1 mt-xl-0">
                <div class="card-header">
                    <div>
                        <p class="mb-0 card-text">Laundry Diambil</p>
                        <h2 class="text-success fw-bolder">{{ $this->laundryDiambil() }}</h2>
                    </div>
                    <div class="m-0 avatar bg-light-success p-50">
                        <div class="avatar-content">
                            <span><i class="feather feather-calendar font-medium-5" data-feather="calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12">
            <div class="mb-1 mb-lg-0 mb-xl-1 card mt-lg-1 mt-xl-0">
                <div class="card-header">
                    <div>
                        <p class="mb-0 card-text">Total Pendapatan</p>
                        <h2 class="text-warning fw-bolder">{{ $this->totalRevenue() }}</h2>
                    </div>
                    <div class="m-0 avatar bg-light-warning p-50">
                        <div class="avatar-content">
                            <span><i class="feather feather-dollar-sign font-medium-5"
                                    data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-lg-8 col-12">
            <div class="card card-company-table">
                <div class="card-header">
                    <h4 class="card-title">Laundry Terbaru</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Category</th>
                                    <th>Views</th>
                                    <th>Revenue</th>
                                    <th>Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Dixons</div>
                                                <div class="font-small-2 text-muted">meguc@ruj.io</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-primary me-1">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-monitor font-medium-3">
                                                        <rect x="2" y="3" width="20" height="14" rx="2"
                                                            ry="2"></rect>
                                                        <line x1="8" y1="21" x2="16"
                                                            y2="21"></line>
                                                        <line x1="12" y1="17" x2="12"
                                                            y2="21"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                            <span>Technology</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">23.4k</span>
                                            <span class="font-small-2 text-muted">in 24 hours</span>
                                        </div>
                                    </td>
                                    <td>$891.2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">68%</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trending-down text-danger font-medium-1">
                                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                <polyline points="17 18 23 18 23 12"></polyline>
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">Statistik</h4>
                    <div class="d-flex align-items-center">
                        <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                    </div>
                </div>
                <div class="card-body statistics-body">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-2 mb-sm-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-info me-2">
                                    <div class="avatar-content">
                                        <span><i data-feather="user-plus"
                                                class="feather feather-user-plus font-medium-5"></i></span>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{ $totalLangganan }}</h4>
                                    <p class="card-text font-small-3 mb-0">Bulanan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <span><i data-feather="user-x"
                                                class="feather feather-user-x font-medium-5"></i></span>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{ $totalBiasa }}</h4>
                                    <p class="card-text font-small-3 mb-0">Biasa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-company-table">
                <div class="card-header">
                    <h4 class="card-title">Overdue Bill</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Category</th>
                                    <th>Views</th>
                                    <th>Revenue</th>
                                    <th>Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Dixons</div>
                                                <div class="font-small-2 text-muted">meguc@ruj.io</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-primary me-1">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-monitor font-medium-3">
                                                        <rect x="2" y="3" width="20" height="14"
                                                            rx="2" ry="2"></rect>
                                                        <line x1="8" y1="21" x2="16"
                                                            y2="21"></line>
                                                        <line x1="12" y1="17" x2="12"
                                                            y2="21"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                            <span>Technology</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">23.4k</span>
                                            <span class="font-small-2 text-muted">in 24 hours</span>
                                        </div>
                                    </td>
                                    <td>$891.2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">68%</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trending-down text-danger font-medium-1">
                                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                <polyline points="17 18 23 18 23 12"></polyline>
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('vendorScript')
    <script data-navigate-once src="{{ vendorJs('toastr.min.js') }}"></script>
@endpush

@push('pageScript')
    <script data-navigate-once src="{{ pluginJs('ext-component-toastr.min.js') }}"></script>
    <script data-navigate-once>
        window.addEventListener('sukses-login', function() {
            'use strict';
            var isRtl = $('html').attr('data-textdirection') === 'rtl';

            // On load Toast
            setTimeout(function() {
                toastr['success'](
                    'Selamat Datang Kembali! {{ Auth::user()->name }}',
                    'Hallo!', {
                        closeButton: true,
                        tapToDismiss: true,
                        rtl: isRtl
                    }
                );
            }, 500);
        });

        window.addEventListener('sukses-register', function() {
            'use strict';
            var isRtl = $('html').attr('data-textdirection') === 'rtl';

            // On load Toast
            setTimeout(function() {
                toastr['success'](
                    'Yeay anda berhasil membuat akun',
                    'Berhasil', {
                        closeButton: true,
                        tapToDismiss: true,
                        rtl: isRtl
                    }
                );
            }, 500);
        });
    </script>
@endpush
