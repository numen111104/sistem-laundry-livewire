@props([
    'name' => 'Example',
    'kode' => 'One',
])
<div {{ $attributes->merge(['class' => 'accordion-margin', 'id' => 'accord' . $name, 'data-toggle-hover' => 'true']) }}>
    <div class="accordion-item">
        {{ $header ?? $slot }}
        {{-- Isi dengan accordion-header --}}
        {{ $konten }}
        {{-- Isi dengan accordion-konten --}}
    </div>
</div>
