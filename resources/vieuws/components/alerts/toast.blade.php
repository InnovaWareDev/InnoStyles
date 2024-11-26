@props(['type' => 'success', 'on'])

@php
    $typeClasses = [
        'success' => 'text-green-800 bg-green-200 border-green-400',
        'error' => 'text-red-800 bg-red-200 border-red-400',
    ];
    $typeClass = $typeClasses[$type] ?? $typeClasses['info'];
@endphp
<div
    x-data="{ shown: false, timeout: null }"
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms
    style="display: none;"
    class="fixed top-2 right-2 whitespace-nowrap z-50 p-4 text-sm rounded-lg border {{ $typeClass }} {{ $attributes->get('class') }}" role="alert">
    <span class="font-medium">{{ $slot }}</span>
</div>
