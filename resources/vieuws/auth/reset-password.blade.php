<x-guest-layout>

    <div class="flex justify-center items-center flex-col w-full">
        <div class="flex justify-center items-start flex-col w-3/4">
            <x-titles.h3 class="mb-1">Wachtwoord...</x-titles.h3>
            <x-titles.p class="mb-4 text-center">Reset je wachtwoord!</x-titles.p>

            <form method="POST" action="{{ route('password.update') }}" class="w-full">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div>
                    <x-inputs.label>E-mailadres</x-inputs.label>
                    <x-inputs.input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
                        @error('email')
                            <x-slot name="validation">{{ $message }}</x-slot>
                        @enderror
                    </x-inputs.input>
                </div>
                <div class="mt-4">
                    <x-inputs.label>Wachtwoord</x-inputs.label>
                    <x-inputs.input id="password" type="password" name="password" required autocomplete="new-password">
                        @error('password')
                            <x-slot name="validation">{{ $message }}</x-slot>
                        @enderror
                    </x-inputs.input>
                </div>
                <div class="mt-4">
                    <x-inputs.label>Bevestig wachtwoord</x-inputs.label>
                    <x-inputs.input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                            <x-slot name="validation">{{ $message }}</x-slot>
                        @enderror
                    </x-inputs.input>
                </div>
                <div class="flex justify-end mt-4 w-full">
                    <x-buttons.button>
                        {{ __('Reset Password') }}
                    </x-buttons.button>
                </div>
            </form>
        </div>
    </div>

</x-guest-layout>
