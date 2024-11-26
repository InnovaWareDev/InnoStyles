<div>
<div class="pb-4 px-4 bg-white rounded">
    <div class="relative overflow-x-auto sm:rounded-lg">
        <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 py-4 px-1 bg-white">
            <div class="flex flex-wrap gap-2">
{{--                @isset($bulkActions)--}}
{{--                    <div x-data="{ bulkOpen: false }" class="relative">--}}
{{--                        <x-buttons.button color="lighter" @click="bulkOpen = !bulkOpen">--}}
{{--                            {{ $bulkActionsButton ?? '' }}--}}
{{--                            <x-slot name="iconBefore">--}}
{{--                                <x-icons.ellipsis-vertical class="size-5" />--}}
{{--                            </x-slot>--}}
{{--                        </x-buttons.button>--}}
{{--                        <div x-show="bulkOpen" @click.away="bulkOpen = false" x-cloak class="absolute z-10 bg-white border border-gray-200 dark:border-gray-600 rounded-lg w-44 mt-1 dark:bg-gray-700 dark:divide-gray-600">--}}
{{--                            <ul class="text-sm text-gray-700 dark:text-gray-200">--}}
{{--                                {{ $bulkActions ?? '' }}--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endisset--}}
{{--                @isset($filterButton)--}}
{{--                    <div x-data="{ open: false }" class="relative">--}}
{{--                        <x-buttons.button @click="open = !open" color="lighter">--}}
{{--                            <span class="flex items-center">--}}
{{--                                {{ $filterButton ?? '' }}--}}
{{--                                <x-icons.chevron-down x-bind:class="{ 'transform rotate-180': open }" class="size-4 ml-2" />--}}
{{--                            </span>--}}
{{--                        </x-buttons.button>--}}
{{--                        <div x-show="open" @click.away="open = false" x-cloak class="absolute z-10 bg-white border border-gray-200 dark:border-gray-600 rounded-lg w-44 mt-1 dark:bg-gray-700 dark:divide-gray-600">--}}
{{--                            <ul class="text-sm text-gray-700 dark:text-gray-200">--}}
{{--                                {{ $filterItems ?? '' }}--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endisset--}}
{{--                @isset($filterTimeButton)--}}
{{--                    <div x-data="{ isOpen: false }">--}}
{{--                        <x-buttons.button @click="isOpen = !isOpen">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <x-icons.clock class="size-4 mr-2" />--}}
{{--                                    {{ $filterTimeButton ?? '' }}--}}
{{--                                <x-icons.chevron-down x-bind:class="{ 'transform rotate-180': isOpen }" class="size-4 ml-2" />--}}
{{--                            </div>--}}
{{--                        </x-buttons.button>--}}
{{--                        <div x-show.transition="isOpen" @click.away="isOpen = false" x-cloak class="z-10 absolute w-48 mt-1 bg-white border border-gray-200 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:divide-gray-600">--}}
{{--                            <ul class="p-3 text-sm text-gray-700 dark:text-gray-200">--}}
{{--                                {{ $filterTimeItems ?? '' }}--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endisset--}}
            </div>
            <div class="relative">
                {{ $search ?? '' }}
            </div>
        </div>

        @isset($bulkActions)
            <div class="flex flex-col justify-between gap-y-1 bg-gray-50 px-3 py-2 sm:flex-row sm:items-center sm:px-6 sm:py-1.5 rounded-t-lg">
                <div class="flex gap-x-3">
                    <span class="text-sm font-medium leading-6 text-gray-700">1 record selected</span>
                </div>
                <div class="flex gap-x-3">
                    <button class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom fi-color-primary" type="button">
                        <span class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600">
                            Select all 1000
                        </span>
                    </button>
                    <button class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom fi-color-danger" type="button">
                        <span class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-red-600">
                            Deselect all
                        </span>
                    </button>
                </div>
            </div>
        @endisset
        <table class="w-full text-sm text-left rtl:text-right text-gray-50 mb-2">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                {{ $thead ?? '' }}
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    {{ $tbody ?? '' }}
                </tr>
            </tbody>
        </table>
        @isset($paginate)
            {{ $paginate ?? '' }}
        @endisset
    </div>
</div>

</div>
