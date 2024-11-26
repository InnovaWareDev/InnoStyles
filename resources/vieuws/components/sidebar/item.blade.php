<li class="mx-4 {{ $marge ?? '' }}">
    <a {{ $attributes->merge(['class' => 'w-full text-start tracking-wider flex items-center gap-x-3.5 p-2 text-sm text-[#323338] hover:bg-blue-50 hover:text-blue-600 rounded-xl transition-all duration-300 transform active:scale-95']) }}>
        {{ $slot }}
    </a>
</li>
