@props(['margin'=> '', 'color'=>''])
<span {{ $attributes->merge(['class' => $margin." badge badge-light-".$color]) }}>
    {{ $slot }}
</span>
