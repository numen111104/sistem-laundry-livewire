@props(['color', 'disabled' => false])

<button {{ $attributes->merge([
    'class' => 'btn btn-'.$color.'',
    'type' => 'button'
])}} @if($disabled == true) disabled @endif>
    @isset($icon)
    {{ $icon }}
    @endisset
    <span>
        {{ $slot }}
    </span>
</button>