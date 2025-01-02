@props(['messages'])
@if ($messages)
    <ul class="text-danger font-small-3 mt-25">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
