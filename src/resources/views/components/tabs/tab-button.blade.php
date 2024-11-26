<button {{ $attributes->merge(['class' => 'flex items-center py-2.5 px-2 rounded-full bg-blue-600 text-sm gap-x-2 font-weight-light text-white hover:opacity-90 whitespace-nowrap']) }}>
    @isset($iconBefore)
        {{ $iconBefore }}
    @endisset
    {{ $slot }}
    @isset($iconAfter)
        {{ $iconAfter }}
    @endisset
</button>
