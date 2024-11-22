@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
