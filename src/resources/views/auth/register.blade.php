<x-guest-layout>

    <div class="flex justify-center items-center flex-col w-full md:mt-0 mt-12">
        <div class="flex justify-center items-center flex-col lg:w-2/4 w-full">

            <h3 class="md:text-4xl text-2xl mb-2 font-lato text-center">Account aanmaken</h3>
            <p class="font-light text-slate-600 text-xs mb-8 text-center">
                Registreer je hier om plaatmateriaal te bestellen en eenvoudig je bestellingen te bekijken in je account!
            </p>

            <form method="POST" action="{{ route('register') }}" class="w-full">
                @csrf
                <div>
                    <div class="relative">
                        <input type="text" autofocus id="hs-floating-input-email-value" name="name" :value="old('name')" class="peer p-4 block w-full border-gray-200 rounded-xl text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="Naam">
                        <label for="hs-floating-input-email-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-90 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500">Naam</label>
                    </div>
                    @error('name')
                    <p class="w-full text-xs text-red-500"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mt-5">
                    <div class="relative">
                        <input type="text" id="hs-floating-input-email-value" name="email" :value="old('email')" required autocomplete="mail" class="peer p-4 block w-full border-gray-200 rounded-xl text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="E-mailadres">
                        <label for="hs-floating-input-email-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-90 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500">E-mailadres</label>
                    </div>
                    @error('email')
                    <p class="w-full text-xs text-red-500"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mt-5">
                    <div class="relative">
                        <input type="text" id="hs-floating-input-email-value" name="phone" :value="old('phone')" required autocomplete="phone" class="peer p-4 block w-full border-gray-200 rounded-xl text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="Telefoonnummer">
                        <label for="hs-floating-input-email-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-90 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500">Telefoonnummer</label>
                    </div>
                    @error('phone')
                    <p class="w-full text-xs text-red-500"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mt-5">
                    <div class="relative">
                        <input type="text" id="hs-floating-input-chamber_of_commerce-value" name="chamber_of_commerce" :value="old('chamber_of_commerce')" required autocomplete="chamber_of_commerce" class="peer p-4 block w-full border-gray-200 rounded-xl text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="Kvk-nummer">
                        <label for="hs-floating-input-email-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-90 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500">KVK nummer</label>
                    </div>
                    @error('chamber_of_commerce')
                    <p class="w-full text-xs text-red-500"> {{ $message }} </p>
                    @enderror
                </div>


                <div class="flex md:justify-end justify-center w-full mt-5">
                    <a href="{{ route('login') }}" class="text-blue-600 text-sm">Ik heb al een account</a>
                </div>

                <div class="flex justify-center mt-8 w-full">
{{--                    data in db en hier mail versturen,kijken naar project --}}
                    <x-buttons.button type="submit" >
                        Registreren
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
