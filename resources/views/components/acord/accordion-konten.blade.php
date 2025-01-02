@props([
    'name' => 'Example',
    'kode' => 'One',
])
<div id="accordion{{ $kode }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $kode }}"
    data-bs-parent="#accordion{{ $name }}" style="" @click.stop>
    <div class="py-1 accordion-body">
        {{ $slot }}
    </div>
</div>
