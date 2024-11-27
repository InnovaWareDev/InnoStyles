@props(['title' => __('Confirm Password'), 'content' => __('For your security, please confirm your password to continue.'), 'button' => __('Confirm')])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
<x-inno-styles::dialog-modal wire:model.live="confirmingPassword">
    <x-inno-styles::slot name="title">
        {{ $title }}
    </x-inno-styles::-slot>

    <x-inno-styles::slot name="content">
        {{ $content }}

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <x-inno-styles::inputs.input
                type="password" placeholder="{{ __('Password') }}" autocomplete="current-password"
                x-ref="confirmable_password"
                wire:model="confirmablePassword"
                wire:keydown.enter="confirmPassword"
            >
                @error('confirmable_password')
                    <x-inno-styles::slot name="validation">{{ $message }}</x-inno-styles::-slot>
                @enderror
            </x-inno-styles::-inputs.input>
        </div>
    </x-inno-styles::-slot>

    <x-inno-styles::slot name="footer">
        <x-inno-styles::buttons.button wire:click="stopConfirmingPassword" wire:loading.attr="disabled" color="info">
            {{ __('Cancel') }}
        </x-inno-styles::-buttons.button>
        <x-inno-styles::buttons.button class="ms-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
            {{ $button }}
        </x-inno-styles::-buttons.button>
    </x-inno-styles::-slot>
</x-inno-styles::-dialog-modal>
@endonce
