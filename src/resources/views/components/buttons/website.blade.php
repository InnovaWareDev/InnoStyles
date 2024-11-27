<a {{ $attributes->merge(['class' => 'relative whitespace-nowrap cursor-pointer inline-flex items-center group']) }} class="ripple">
    <div class="flex items-center text-white justify-center py-4 px-8 rounded-full border border-site-400 bg-site-500 tracking-normal text-sm z-20 transition-all duration-200 group-hover:pr-16 group-hover:pl-16">
        {{ $slot }}
    </div>
    <div class="absolute flex justify-end items-center right-[-25px] pr-1 py-4 w-20 rounded-full rounded-l-lg border border-site-500 bg-white text-sm z-10 transition-all duration-500 group-hover:right-0">
        <x-inno-styles::icons.chevron-right class="size-5 text-site-500" />
    </div>
</a>
