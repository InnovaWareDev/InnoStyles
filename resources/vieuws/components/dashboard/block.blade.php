<div class="relative flex flex-col bg-clip-border rounded-xl bg-white dark:bg-gray-800 text-gray-700 border border-blue-gray-100 dark:border-gray-700 shadow-sm">
    @isset($icon)
        <div class="mt-4 mx-4 rounded-xl overflow-hidden text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
            {{ $icon }}
        </div>
    @endisset
    <div class="p-4 text-right">
        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600 dark:text-gray-200">{{ $title ?? '' }}</p>
        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900 dark:text-gray-200">{{ $value ?? '' }}</h4>
    </div>
    <div class="border-t border-blue-gray-50 dark:border-gray-700 p-4">
        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600 dark:text-gray-200">
            {{ $extra ?? '' }}
    </div>
</div>
