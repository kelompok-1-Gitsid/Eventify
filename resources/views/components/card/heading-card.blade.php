@props(['value'])

<h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">
    {{ $value ?? $slot }}
</h5>

{{-- <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">
    {{ $title }}
</h5> --}}
