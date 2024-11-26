<x-guest-layout>

    <div class="flex justify-center items-center flex-col w-full">
        <div class="flex justify-center items-center flex-col lg:w-2/4 w-3/4">

            <h3 class="text-4xl mb-2 font-lato">Even opnieuw instellen...</h3>
            <p class="font-light text-slate-600 text-xs mb-8 text-center">
                Je wachtwoord vergeten? Geen probleem. Laat ons je e-mailadres weten en wij sturen je per e-mail een link voor het opnieuw instellen van je wachtwoord waarmee je een nieuw wachtwoord kunt kiezen.
            </p>

            <form method="POST" action="{{ route('password.email') }}" class="w-full">
                @csrf
                <div>
                    <div class="relative">
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" id="hs-floating-input-email-value" class="peer p-4 block w-full border-gray-200 rounded-xl text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="john@doe.com">
                        <label for="hs-floating-input-email-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-90 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500">Email</label>
                    </div>
                    @error('email')
                    <p class="w-full text-xs text-red-500"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="flex justify-center mt-8 w-full">
                    <x-buttons.button type="submit">
                        Verzenden
                    </x-buttons.button>
                </div>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            </form>
        </div>
    </div>

</x-guest-layout>
