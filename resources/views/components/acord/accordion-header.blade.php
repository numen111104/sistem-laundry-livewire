@props([
    'name' => 'Example',
    'kode' => 'One',
    'expanded' => 'false',
])
<h2 class="align-items-center accordion-header d-flex" id="headingOne">
    {{ $action ?? '' }}
    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
        data-bs-target="#accordion{{ $kode }}" aria-expanded="{{ $expanded }}"
        aria-controls="accordion{{ $kode }}">
        {{ $name }}
    </button>
</h2>
