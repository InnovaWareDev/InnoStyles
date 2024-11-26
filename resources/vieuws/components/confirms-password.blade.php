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
<x-dialog-modal wire:model.live="confirmingPassword">
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="content">
        {{ $content }}

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <x-inputs.input
                type="password" placeholder="{{ __('Password') }}" autocomplete="current-password"
                x-ref="confirmable_password"
                wire:model="confirmablePassword"
                wire:keydown.enter="confirmPassword"
            >
                @error('confirmable_password')
                    <x-slot name="validation">{{ $message }}</x-slot>
                @enderror
            </x-inputs.input>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-buttons.button wire:click="stopConfirmingPassword" wire:loading.attr="disabled" color="info">
            {{ __('Cancel') }}
        </x-buttons.button>
        <x-buttons.button class="ms-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
            {{ $button }}
        </x-buttons.button>
    </x-slot>
</x-dialog-modal>
@endonce
