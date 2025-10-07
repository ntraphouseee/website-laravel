@props(['active' => false, 'href'])

@php
$classes = $active
    ? 'bg-[#891121] text-white px-3 py-2 rounded-md text-sm font-medium'
    : 'text-gray-300 hover:bg-[#C81E34] hover:text-white px-3 py-2 rounded-md text-sm font-medium';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>