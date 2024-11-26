<button {{ $attributes->merge(['class' => 'w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-200 rounded-lg hover:bg-gray-700 transition-all duration-300 transform active:scale-95']) }}>
    {{ $slot }}
    <x-icons.chevron-down x-cloak x-show="open" class="transform rotate-180 ms-auto block size-3 text-gray-400" width="16" height="16" />
    <x-icons.chevron-up x-cloak x-show="!open" class="transform rotate-180 ms-auto block size-3 text-gray-400" width="16" height="16" />
</button>
