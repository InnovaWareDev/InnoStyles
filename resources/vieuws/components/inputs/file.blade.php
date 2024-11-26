<div class="flex justify-center items-center w-full mt-4">
    <div class="relative overflow-hidden flex justify-center items-center flex-wrap gap-4 p-4 rounded-xl bg-white">
        <div class="flex justify-start items-center flex-wrap gap-2">
            <x-icons.clipboard-document-list class="h-8 w-10 text-secondary-500" />
            <x-titles.h5>{{ $importType ?? '' }}</x-titles.h5>
        </div>
        <x-icons.chevron-right class="size-4" />
        <div class="flex justify-start items-center flex-wrap gap-2">
            <img src="{{ asset('images/logo.png') }}" class="w-[70px] h-auto object-contain transition-all duration-100 transform hover:scale-105" alt="Logo">
        </div>
        <div wire:loading wire:target="import, file" class="w-full absolute bottom-0 left-0 rounded-xl z-50">
            <div class="h-1 w-full bg-main-100 overflow-hidden">
                <div class="progress w-full h-full bg-blue-500 left-right"></div>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center w-full items-center mt-4 p-4">
    <div>
        <form {{ $submit ?? '' }}>
            <div class="flex justify-center items-center relative w-full max-w-screen-sm h-44">
                <label title="Click to upload" for="file" class="cursor-pointer flex items-center justify-center flex-col gap-4 px-6 py-4 before:border-gray-400/60 hover:before:border-gray-300 group before:absolute before:inset-0 before:rounded-xl before:border before:border-dashed before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                    <div class="w-max relative">
                        <x-icons.clipboard-document-list class="size-12 text-secondary-500" />
                    </div>
                    <div class="flex justify-center items-center flex-col relative">
                        <span class="block text-xl font-normal relative text-primary-950 text-center">
                            {{ $title ?? '' }}
                        </span>
                        <span class="mt-2 block text-sm text-gray-500">
                            ({{ $requirements ?? '' }})
                        </span>
                    </div>
                </label>
                <input type="file" {{ $model ?? '' }} id="file" class="hidden" accept="{{ $requirements ?? '' }}">
            </div>
            {{ $error ?? '' }}
            <div class="flex justify-end mt-4">
                <x-buttons.button type="submit">
                    {{ $button ?? '' }}
                </x-buttons.button>
            </div>
        </form>
    </div>
</div>
