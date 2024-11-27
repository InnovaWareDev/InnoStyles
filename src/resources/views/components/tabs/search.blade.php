<div>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
            <x-inno-styles::icons.magnifying-glass class="size-4" />
        </div>
        <input placeholder="Zoeken..." wire:model.live="{{ $search ?? '' }}" class="block outline-0 w-full py-2.5 px-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full focus:ring-blue-600 focus:border-blue-600" />
    </div>
</div>
