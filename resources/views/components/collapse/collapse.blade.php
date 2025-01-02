@push('pageCss')
    <style>
        .rotate-90 {
            transform: rotate(90deg);
        }
    </style>
@endpush
@props([
    'kode' => 'One',
    'title' => 'Title',
    'icon' => '',
    'margin' => 'ms-1 mt-1',
])
<div class="p-0 m-0" x-data="{ expanded: false }">
    <div class="p-0 m-0 d-inline-flex align-items-center justify-content-between">
        <a class="d-flex fw-bold align-items-center {{ $margin }}" @click="expanded = !expanded"
            data-bs-toggle="collapse" href="#{{ $kode }}" role="button" aria-expanded="true"
            aria-controls="{{ $kode }}">
            <span class="icon" :class="{ 'rotate-90': expanded }"
                style="transition: transform 0.3s ease;">&#x3e;</span>
            <span class="ms-1 p-ellipsis-1">{{ $title }}</span>
        </a>
        {{ $icon }}
    </div>
    <div class="collapse {{ $margin }}" id="{{ $kode }}" x-bind:class="{ 'show': expanded }"
        wire:ignore.self>
        {{ $konten ?? $slot }}
    </div>
</div>
