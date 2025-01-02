@props(['number'])

<li {{ $attributes->merge(['class' => 'timeline-item']) }}>
    @isset($number)
        <span {{ $number->attributes->merge(['class' => 'timeline-point']) }}><small>{{ $number }}</small></span>
    @endisset
    <div class="timeline-event">
        <div class="mb-1 d-flex justify-content-between flex-sm-row flex-column mb-sm-0">
            <h6>{{ $title }}</h6>
            <span class="timeline-event-time">{{ $label }}</span>
        </div>
        @isset($content)
            <p {{ $content->attributes->merge(['class' => 'm-0']) }}>
                {{ $content }}
            </p>
        @endisset
        {{ $slot }}
    </div>
</li>
