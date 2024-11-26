@props(['type' => 'info', 'on'])

@php
    $typeClasses = [
        'danger' => 'text-red-800 bg-red-50 border-red-200',
        'warning' => 'text-orange-800 bg-orange-50 border-orange-200',
        'info' => 'text-blue-800 bg-blue-50 border-blue-200',
        'success' => 'text-green-800 bg-green-50 border-green-200',
    ];
    $typeClass = $typeClasses[$type] ?? $typeClasses['info'];
@endphp
<div
    x-data="{ shown: false, timeout: null }"
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms
    style="display: none;"
    class="p-4 mb-4 text-sm rounded-lg border {{ $typeClass }} {{ $attributes->get('class') }}" role="alert">
    <span class="font-medium">{{ $title }}</span>
    {{ $description }}
</div>
