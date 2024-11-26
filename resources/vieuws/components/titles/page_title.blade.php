<div class="fixed top-0 left-0 pl-4 md:pl-64 py-4 pr-8 flex justify-center items-center w-full mb-4 z-10 md:bg-gray-50 bg-white border-b border-gray-100">
    <div class="flex justify-between items-center flex-wrap gap-2 w-full">
        <x-titles.h3>
            {{ $slot }}
        </x-titles.h3>
        <div class="flex items-center flex-wrap gap-2">
            <livewire:components.profile />
        </div>
    </div>
</div>

