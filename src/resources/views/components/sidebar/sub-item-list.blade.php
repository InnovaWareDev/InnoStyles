<a {{ $attributes->merge(['class' => 'cursor-pointer w-full text-start flex items-center gap-x-3.5 py-2 px-1.5 text-[13px] text-slate-300 rounded-lg hover:bg-gray-700 transition-all duration-300 transform active:scale-95']) }}>
    <span class="w-[5px] h-[5px] rounded-full border border-gray-600"></span>
    {{ $slot }}
</a>
