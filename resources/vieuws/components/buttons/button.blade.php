@props(['showLoader' => false, 'disabled' => false, 'color' => 'default'])

@php
    $typeClasses = [
        'default' => 'bg-blue-600 hover:opacity-90 focus:ring-blue-600 text-white',
        'site' => 'bg-site-600 hover:opacity-90 focus:ring-site-600 text-white',
        'danger' => 'bg-red-500 hover:opacity-90 focus:ring-red-500 text-white',
        'warning' => 'bg-orange-500 hover:opacity-90 focus:ring-orange-500 text-white',
        'info' => 'bg-blue-500 hover:opacity-90 focus:ring-blue-500 text-white',
        'success' => 'bg-secondary-500 hover:opacity-90 focus:ring-secondary-500 text-white',
        'lighter' => 'bg-transparant border border-gray-300 focus:ring-gray-300 text-gray-500',
    ];
    $typeClass = $typeClasses[$color] ?? $typeClasses['default'];
@endphp

<button class="flex items-center justify-center font-semibold outline-none transition duration-150 rounded-full gap-1.5 py-4 px-8 text-sm shadow-sm focus:outline-none hover:transform hover:scale-[1.01] {{ $typeClass }} {{ $attributes->get('class') }} @if($disabled) cursor-not-allowed @endif"
    @if($disabled) disabled @endif
    {{ $attributes->except('class') }}
>
    @if($showLoader)
        <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin transition duration-75 h-5 w-5 text-white">
            <path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
            <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
        </svg>
    @endif
    @isset($iconBefore)
        {{ $iconBefore }}
    @endisset
        <span class="flex justify-start items-center gap-x-2">
            {{ $slot }}
        </span>
    @isset($iconAfter)
        {{ $iconAfter }}
    @endisset
</button>
