<button {{ $attributes->class(['btn btn-primary'])->merge(['type' => '']) }}>
    @isset($icon)
        {{ $icon }}
    @endisset
    {{ $slot }}
</button>
