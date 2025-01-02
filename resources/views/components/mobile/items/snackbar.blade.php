@props([
'icon' => 'fa-check',
'color' => 'green-dark',
])

<div {{ $attributes->merge([
  'class' => 'snackbar-toast rounded-m bg-'.$color,
  'data-bs-delay' => '1500',
  'data-bs-autohide' => 'true',
  ]) }}>
  @isset($icon)
  <i class="fa {{ $icon }} me-3"></i>
  @endisset
  {{ $slot }}
</div>