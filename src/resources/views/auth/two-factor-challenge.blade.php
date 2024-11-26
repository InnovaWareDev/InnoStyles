<x-guest-layout>
    <div x-data="{ recovery: false }"  class="flex justify-center items-center flex-col w-full">
        <div class="flex justify-center items-center flex-col lg:w-2/4 w-3/4">

            <h3 class="text-4xl mb-2 font-lato">Een extra beveiliging</h3>
            <p x-show="! recovery" class="font-light text-slate-600 text-xs mb-8 text-center">
                Bevestig de toegang tot uw account door de authenticatiecode in te voeren die u bij uw authenticatietoepassing hebt ontvangen.
            </p>
            <p x-cloak x-show="recovery" class="font-light text-slate-600 text-xs mb-8 text-center">
                Bevestig de toegang tot uw account door de authenticatiecode in te voeren die u bij uw authenticatietoepassing hebt ontvangen.
            </p>

            <form method="POST" action="{{ route('two-factor.login') }}" class="w-full">
                @csrf
                <div x-show="! recovery">
                    <div class="relative">
                        <input placeholder="XXXXXX" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" id="hs-floating-input-email-value" class="peer p-4 block w-full border-gray-200 rounded-xl text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2">
                        <label for="hs-floating-input-email-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-90 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500">Code</label>
                    </div>
                    @error('code')
                    <p class="w-full text-xs text-red-500"> {{ $message }} </p>
                    @enderror
                </div>

                <div x-cloak x-show="recovery">
                    <div class="relative">
                        <input placeholder="XXXXXXXXXX-XXXXXXXXXX" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" id="hs-floating-input-email-value" class="peer p-4 block w-full border-gray-200 rounded-xl text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2">
                        <label for="hs-floating-input-email-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-90 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500">XXXXXXXXXX-XXXXXXXXXX</label>
                    </div>
                    @error('code')
                    <p class="w-full text-xs text-red-500"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="flex justify-end mt-4 w-full">
                    <div
                        type="button" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 underline cursor-pointer mt-2 mr-2"
                        x-show="! recovery"
                        x-on:click="recovery = true;$nextTick(() => { $refs.recovery_code.focus() })">
                        Gebruik een herstelcode
                    </div>
                    <div
                        type="button" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 underline cursor-pointer mt-2 mr-2"
                        x-cloak
                        x-show="recovery"
                        x-on:click="recovery = false;$nextTick(() => { $refs.code.focus() })">
                        Gebruik een authenticatiecode
                    </div>
                </div>

                <div class="flex justify-center mt-8 w-full">
                    <button type="submit" class="py-4 px-8 text-sm rounded-full bg-blue-600 text-white transition-all duration-200 hover:transform hover:scale-105 hover:bg-blue-700">
                        Inloggen
                    </button>
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
