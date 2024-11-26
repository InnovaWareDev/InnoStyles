<a {{ $attributes->merge(['class' => 'group flex flex-col w-full cursor-pointer bg-gray-50 border shadow-sm rounded-xl cursor-default']) }}>
    <div class="p-4 md:p-5">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="font-semibold text-gray-800">
                    {{ $title ?? '' }}
                </h3>
                <p class="flex justify-start items-center gap-x-2 text-sm text-gray-500">
                    {{ $description ?? '' }}
                </p>
            </div>
            <div class="ps-3">
                {{ $value ?? '' }}
            </div>
        </div>
    </div>
</a>
