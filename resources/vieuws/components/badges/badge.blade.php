@props(['color' => 'blue'])

@php
    $typeClasses = [
        'dark' => 'bg-primary-950 text-white',
        'blue' => 'bg-blue-100 text-blue-800',
        'red' => 'bg-red-100 text-red-800',
        'green' => 'bg-green-100 text-green-800 ',
        'yellow' => 'bg-yellow-100 text-yellow-800',
        'indigo' => 'bg-indigo-100 text-indigo-800',
        'purple' => 'bg-purple-100 text-purple-800',
        'pink' => 'bg-pink-100 text-pink-800',
    ];
    $typeClass = $typeClasses[$color] ?? $typeClasses['default'];
@endphp
<span {{ $attributes }} class="text-xs font-medium px-2 py-0.5 rounded-full {{ $typeClass }} {{ $attributes->get('class') }}">
    {{ $slot }}
</span>
