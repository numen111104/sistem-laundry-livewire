@props(['widht' => 400, 'height' => 400, 'alt' => 'Data Not Found'])
<div {{ $attributes->class(['col-12']) }}>
    <div class="mx-auto">
        <img src="{{ asset('style/app-assets/images/illustration/data-not-found.png') }}" alt="{{ $alt }}"
            width="{{ $widht }}" height="{{ $height }}">
    </div>
</div>
