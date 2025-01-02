@props(['color'])

<div class="card">
    <div class="card-header " style="padding-bottom: 0px">
        <h3>{{ $header }}</h3>
    </div>
    <div class="card-header" style="margin-top: 0px;">
        <div>
            <h3 class="fw-bolder mb-0">{{ $title }}</h3>
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
