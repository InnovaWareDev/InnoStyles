<div {{ $attributes->merge(['class' => 'w-full cursor-pointer text-start flex items-center font-bold gap-x-3.5 p-4 mb-2 text-sm text-primary-950 rounded-lg bg-gray-50 hover:bg-secondary-500 hover:text-white transition-all duration-300 transform active:scale-95']) }}>
    {{ $slot }}
</div>
