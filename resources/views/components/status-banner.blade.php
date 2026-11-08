@props(['tipe' => 'info'])

@php
$kelasWarna = [
    'success' => 'alert-success',
    'error' => 'alert-danger',
    'info' => 'alert-info',
][$tipe] ?? 'alert-info';
@endphp

<div class="alert {{ $kelasWarna }} alert-dismissible fade show" role="alert">
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>