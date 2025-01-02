@props(['cardBody', 'cardHeader', 'subHeader'])

<div {{ $attributes->merge(['class' => 'card']) }}>
    @isset($cardHeader)
    <div {{ $cardHeader->attributes->class(['card-header mb-50 align-items-start']) }}>
        <h3 class="card-title">{{ $cardHeader }}</h3>
        @isset($subHeader)
        <div {{ $subHeader->attributes->class(['d-flex align-items-center mt-50']) }}>
            {{ $subHeader }}
        </div>
        @endisset
    </div>
    @endisset

    @isset($cardBody)
    <div {{ $cardBody->attributes->class(['card-body']) }}>
        {{ $cardBody }}
    </div>
    @endisset
    {{ $slot }}
</div>