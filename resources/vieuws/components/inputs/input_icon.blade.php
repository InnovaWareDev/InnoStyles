<div class="relative w-full">
    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        {{ $slot }}
    </div>
    <input {{ $attributes->merge(['class' => 'block outline-0 w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500']) }} />
</div>
