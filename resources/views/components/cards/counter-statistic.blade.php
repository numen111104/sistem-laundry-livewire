@props(['color'])

<div class="card">
    <div class="card-header">
        <div>
            <h3 class="mb-0 fw-bolder">{{ $title }}</h3>
            <p class="card-text">{{ $subTitle }}</p>
        </div>
        <div {{ $attributes->merge([
            'class' => 'avatar p-50 m-0 bg-light-' . $color . '',
        ]) }}>
            <div class="avatar-content" wire:ignore>
                <!--Gunakan feathericon dan tambah class font-medium-5-->
                {{ $icon }}
            </div>
        </div>
    </div>
    {{ $slot }}
</div>
