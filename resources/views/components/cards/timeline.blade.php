<div {{ $attributes->merge(['class' => 'card']) }}>
    @isset($header)
        <div class="card-header">
            <h4 class="card-title">{{ $header }}</h4>
            @isset($subHeader)
                <div class="d-flex align-items-center">
                    {{ $subHeader }}
                </div>
            @endisset
        </div>
    @endisset
    <div class="card-body">
        @isset($action)
            {{ $action }}
        @endisset
        <div {{ $slot->attributes->merge(['class' => $attributes->has('class') ? '' : 'scroller4']) }}>
            <ul class="timeline">
                {{ $slot }}
            </ul>
        </div>
    </div>
</div>
