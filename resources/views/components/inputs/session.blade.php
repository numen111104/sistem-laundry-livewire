@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-success alert-dismissible fade show']) }}>
        {{ $status }}
    </div>
@endif
