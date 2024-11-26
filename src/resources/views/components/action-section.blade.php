<div {{ $attributes->merge(['class' => 'w-full']) }}>
    <x-titles.h3>
        <x-slot name="title">{{ $title  ?? ''}}</x-slot>
        <x-slot name="description">{{ $description ?? ''}}</x-slot>
    </x-titles.h3>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white sm:rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
