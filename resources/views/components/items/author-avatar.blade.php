@props(['photo', 'name', 'info', 'route', 'jk'])

<div class="mb-2 d-flex align-items-center">
    <div class="me-1">
        <div class="avatar avatar-lg">
            @if ($photo == null)
            @if ($jk == 'Laki-Laki')
            <img src="{{ asset('style/app-assets/images/avatars/user-ikhwan.png') }}" alt="Avatar"
                width="24" height="24" />
            @else
            <img src="{{ asset('style/app-assets/images/avatars/user-akhwat.png') }}" alt="Avatar"
                width="24" height="24" />
            @endif
            @else
            <img src="{{ asset('style/app-assets/images/avatars/'.$photo) }}"
                alt="Avatar" width="24" height="24" />
            @endif
        </div>
    </div>
    <div class="author-info">
        <small><a wire:navigate
                href="{{ $route }}"
                class="text-body">
                {{ Str::excerpt($name, '', ['radius' => 24]) }}
            </a></small>
        <br />
        <small class="text-muted">{{ $info }}</small>
    </div>
</div>
