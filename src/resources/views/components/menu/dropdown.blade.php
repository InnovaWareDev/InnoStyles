<div class="flex" x-data="{ open: false }">
    <div class="relative flex">
        <button @click="open = !open" @click.away="open = false" type="button"
                class="relative z-10 -mb-px px-4 flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 transition-colors duration-200 ease-out hover:text-site-600 hover:bg-gray-100 ripple overflow-hidden"
                :class="{ 'border-site-600 text-site-600 bg-gray-100': open }" aria-expanded="false">
            {{ $title ?? '' }}
        </button>
    </div>

    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
         class="absolute inset-x-0 top-full text-sm text-gray-500">
        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
        <div class="relative bg-white">
            <div class="mx-auto max-w-7xl px-8">
                {{ $slot ?? '' }}
            </div>
        </div>
    </div>
</div>
