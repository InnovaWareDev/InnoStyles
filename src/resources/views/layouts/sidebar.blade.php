<div x-data="{ openSections: JSON.parse(localStorage.getItem('openSections')) || {}, isSidebarOpen: true }" x-init="() => { $watch('openSections', value => localStorage.setItem('openSections', JSON.stringify(value))); }">
    <div class="hs-overlay lg:block fixed top-0 z-20 start-0 bottom-0 overflow-x-hidden w-0 md:w-56 bg-white rounded-tr-lg transition-all duration-300 pb-10 overflow-y-auto lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:hidden" x-bind:class="{ 'w-0': isSidebarOpen, 'w-56': !isSidebarOpen }">

        {{--Sidebar content--}}
        <nav class="w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="">
                <div class="flex justify-center items-center w-full">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24 object-contain my-2 p-1.5">
                </div>

{{--                both accesible for users and admins.--}}


{{--                for the users,show orders on order page but only r,for admin crud? --}}
                @if(auth()->check() && auth()->user()->role === 'user')

                    <x-sidebar.item href="{{ route('userinterface.index') }}" class="{{ request()->routeIs(['userinterface.index']) ? 'bg-blue-50 text-blue-600' : '' }}">
                        <x-icons.dashboard class="size-4" />
                        Dashboard
                        <x-slot:marge>my-1</x-slot:marge>
                    </x-sidebar.item>

{{--                TODO: fix this using livewire guess--}}
                    <x-sidebar.item href="{{ route('orders.index') }}" class="{{ request()->routeIs(['orders.index']) ? 'bg-blue-50 text-blue-600' : '' }}">
                        <x-icons.dashboard class="size-4" />
                        Orders
                        <x-slot:marge>my-1</x-slot:marge>
                    </x-sidebar.item>

                @elseif(auth()->check() && auth()->user()->role === 'admin')

                    <x-sidebar.item href="{{ route('dashboard.index') }}" class="{{ request()->routeIs(['dashboard.index']) ? 'bg-blue-50 text-blue-600' : '' }}">
                        <x-icons.dashboard class="size-4" />
                        Dashboard
                        <x-slot:marge>my-1</x-slot:marge>
                    </x-sidebar.item>

                    <x-sidebar.item href="{{ route('users.index') }}" class="{{ request()->routeIs(['users.index']) ? 'bg-blue-50 text-blue-600' : '' }}">
                        <x-icons.user-group class="size-4" />
                        Gebruikers
                        <x-slot:marge>my-1</x-slot:marge>
                    </x-sidebar.item>
                    <x-sidebar.item href="{{ route('products.index') }}" class="{{ request()->routeIs(['products.index']) ? 'bg-blue-50 text-blue-600' : '' }}">
                        <x-icons.list-bullet class="size-4" />
                        Producten
                        <x-slot:marge>my-1</x-slot:marge>
                    </x-sidebar.item>
{{--                should users with the user role see the faq too?--}}
                    <x-sidebar.item href="{{ route('faq.index') }}" class="{{ request()->routeIs(['faq.index']) ? 'bg-blue-50 text-blue-600' : '' }}">
                        <x-icons.question class="size-4" />
                        Faq
                        <x-slot:marge>my-1</x-slot:marge>
                    </x-sidebar.item>

                @endif

                    <x-sidebar.item href="{{ route('website.home') }}" class="{{ request()->routeIs(['website.home']) ? 'bg-blue-50 text-blue-600' : '' }}">
                        <x-icons.arrow-left class="size-4" />
                        Terug naar shop
                        <x-slot:marge>my-1</x-slot:marge>
                    </x-sidebar.item>

            </ul>
        </nav>

    </div>

    <div class="fixed left-2 bottom-2 md:hidden z-50">
        <button @click="isSidebarOpen = !isSidebarOpen" class="p-1 rounded bg-gray-200">
            <x-icons.bars-3 class="size-5" />
        </button>
    </div>
</div>
