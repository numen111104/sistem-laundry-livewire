@props(['heading'])

<table {{ $attributes->class(['table']) }} style="width: 100%; ">
    @isset($heading)
        <thead {{ $heading->attributes->class(['']) }}>
            <tr>
                {{ $heading }}
            </tr>
        </thead>
    @endisset
    <tbody>
        <!--Isi slot dengan component: "basic-row"-->
        {{ $slot }}
    </tbody>
</table>
