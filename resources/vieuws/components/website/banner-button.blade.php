<a href="{{ $href ?? '' }}"
   class="ripple flex justify-between items-center w-full p-4 transition-all duration-200 hover:bg-gray-200 group cursor-pointer relative overflow-hidden">
    <div class="flex gap-x-4 items-center">
        <img src="{{ $image ?? '' }}" class="size-8 object-contain">
        <p>{{ $slot ?? '' }}</p>
    </div>
    <x-icons.arrow-right class="size-4 group-hover:text-site-600 transition-all duration-200" />
</a>

