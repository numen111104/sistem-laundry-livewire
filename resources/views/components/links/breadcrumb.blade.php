<div class="content-header row">
    <div class="mb-2 content-header-left col-md-12 col-12">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="mb-0 content-header-title float-start">{{ $judul_halaman }}</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg></a>
                        </li>
                        @isset($halaman1)
                            <li class="breadcrumb-item">
                                <a {{ $halaman1->attributes->class([''])->merge(['href' => '']) }}>
                                    {{ $halaman1 }}
                                </a>
                            </li>
                            @endif
                            @isset($halaman_aktif)
                                <li class="breadcrumb-item active">
                                    {{ $halaman_aktif }}
                                </li>
                            @endisset
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
