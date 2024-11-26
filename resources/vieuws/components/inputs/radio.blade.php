@props(['id'])

<div class="flex items-center p-2 rounded hover:bg-gray-100">
    <input type="radio" name="filter-radio" id="{{ $id }}" {!! $attributes->merge(['class' => 'w-4 h-4 text-secondary-600 bg-gray-100 border-gray-300 focus:ring-secondary-500']) !!}>
    <label for="{{ $id }}" class="w-full cursor-pointer ms-2 text-sm font-medium text-gray-900 rounded">
        {{ $slot }}
    </label>
</div>
