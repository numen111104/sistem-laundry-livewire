@props(['id', 'inputAttr' => [], 'labelAttr' => []])

<div {{ $attributes->merge(['class'=>"input-style has-borders no-icon input-style-always-active validate-field"]) }}>
    <input {{ \Illuminate\Support\Arr::toHtmlString($inputAttr + [
        'id' => $id,
        'type' => 'text',
        'class' => 'form-control validate-text',
        'placeholder' => 'Masukan text...',
    ]) }}>
    <label {{ \Illuminate\Support\Arr::toHtmlString($labelAttr + [
        'for' => $id,
        'class' => 'color-highlight',
    ]) }}>{{ $label }}</label>
</div>
