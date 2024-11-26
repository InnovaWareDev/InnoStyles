<div x-data="{ modelOpen: false }">
    @isset($openPopup)
        {{ $openPopup }}
    @endisset

    <div x-cloak x-show="modelOpen" @click="modelOpen = false" class="fixed inset-0 z-20 bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

    <div x-cloak x-show="modelOpen"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
         class="fixed inset-0 flex items-center justify-center z-30 mx-2"
    >
        <div class="inline-block w-full max-w-xl p-8 overflow-hidden text-left bg-white rounded-lg shadow-xl">
            <div class="flex items-center justify-between space-x-4">
                <h1 class="text-xl font-medium text-gray-800">
                    @isset($title)
                        {{ $title }}
                    @endisset
                </h1>

                <button @click="modelOpen = false" type="button" class="text-gray-600 focus:outline-none hover:text-gray-700">
                    <x-icons.cross class="size-5" />
                </button>
            </div>

            <p class="mt-2 text-sm text-gray-500">
                @isset($description)
                    {{ $description }}
                @endisset
            </p>

            <form class="mt-5">
                @isset($form)
                    {{ $form }}
                @endisset
            </form>
        </div>
    </div>
</div>
