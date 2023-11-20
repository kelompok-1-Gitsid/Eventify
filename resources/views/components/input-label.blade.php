@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm leading-6 text-gray-900 mb-1.5']) }}>
    {{ $value ?? $slot }}
</label>
