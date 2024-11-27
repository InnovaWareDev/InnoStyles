<div class="flex justify-center items-start fixed inset-0 bg-[#292f4cb3] z-20 h-screen overflow-y-auto">
    <!-- Modal Container with limited height and positioned slightly lower -->
    <div class="flex flex-col w-[90vw] max-w-2xl max-h-[80vh] bg-[#f6f7fb] p-6 rounded-lg shadow-lg mt-40 overflow-y-auto">

        <!-- Modal Header -->
        <div class="flex justify-between items-center w-full bg-white p-4 rounded-t-lg border-b border-gray-200 z-40">
            <x-inno-styles::titles.h3>
                @isset($title)
                    {{ $title }}
                @endisset
            </x-inno-styles::-titles.h3>
            @isset($closeForm)
                {{ $closeForm }}
            @endisset
        </div>

        <!-- Modal Content with conditional scrolling -->
        <div class="p-4 w-full overflow-y-auto">
            {{ $slot }}
        </div>
    </div>
</div>
