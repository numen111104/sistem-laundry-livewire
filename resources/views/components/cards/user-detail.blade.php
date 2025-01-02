<div {{ $attributes->merge(['class' => 'card']) }}>
    <div class="card-body">
        <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
                @isset($photo)
                    {{ $photo }}
                @endisset
                {{-- @if ($user->photo==NULL)
                    @if ($santri->jk=='Laki-Laki')
                        <img class="mt-3 mb-2 rounded img-fluid" src="{{ asset('style/app-assets/images/avatars/user-ikhwan.png') }}" height="110" width="110" />
                    @else
                        <img class="mt-3 mb-2 rounded img-fluid" src="{{ asset('style/app-assets/images/avatars/user-akhwat.png') }}" height="110" width="110" />
                    @endif
                @else
                <img class="mt-3 mb-2 rounded img-fluid" src="{{ asset('style/app-assets/images/avatars/'.$user->photo) }}" height="110" width="110" />
                @endif --}}
                <div class="text-center user-info">
                    <h4>{{ $nama }}</h4>
                    <span class="badge bg-light-secondary">{{ $subtitle }}</span>
                </div>
            </div>
        </div>
        @isset($judul_fitur)
        <div class="my-2 d-flex justify-content-around pt-75">
            <div class="d-flex align-items-start me-2">
                <span class="rounded badge bg-light-secondary p-75">
                    {{ $icon_fitur }}
                </span>
                <div class="ms-75">
                    <h4 class="mb-0">{{ $judul_fitur }}</h4>
                    <small>{{ $keterangan_fitur }}</small>
                </div>
            </div>
        </div>
        @endisset

        <h4 class="mt-1 mb-1 fw-bolder border-bottom pb-50">{{ $judul_informasi }}</h4>
        <div class="info-container">
            <ul class="list-unstyled">
                {{ $informasi }}
            </ul>
        </div>
    </div>
</div>
