@props(['id' => ''])

<div id="carouselExampleIndicators{{ $id }}" class="carousel slide" data-bs-ride="carousel">
    @isset($caroselIndicator)
    <div class="carousel-indicators">
        {{ $caroselIndicator }}
        {{-- <button type="button" data-bs-target="#carouselExampleIndicators{{ $id }}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators{{ $id }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators{{ $id }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators{{ $id }}" data-bs-slide-to="3" aria-label="Slide 4"></button> --}}
    </div>
    @endisset

    <div class="carousel-inner rounded-2">
        {{ $slot }}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators{{ $id }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators{{ $id }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
