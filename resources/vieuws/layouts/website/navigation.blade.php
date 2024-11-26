<div class="sticky top-0 left-0 w-full bg-white z-30">
    @php
        $categories = \App\Models\Category::limit(4)->get();
    @endphp
    <div x-data="{ open: false }">
        <div x-show="open" x-cloak class="relative z-40 lg:hidden" role="dialog" aria-modal="true" @keydown.window.escape="open = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <div x-show="open" class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true" @click="open = false"></div>

            <div x-show="open" class="fixed inset-0 z-40 flex">
                <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl transition ease-in-out duration-300 transform"
                     :class="{ '-translate-x-full': !open, 'translate-x-0': open }">
                    <!-- Mobile menu content -->
                    <div class="flex justify-between items-center px-4 pb-2 pt-5">
                        <button @click="open = false" type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <x-logo />
                    </div>

                    <div class="mt-2">
                        <div class="space-y-10">
                            <div>
                                <ul role="list" class="mt-3 flex flex-col">
                                    @foreach($categories as $category)
                                        <li class="flow-root transition-all duration-200 hover:bg-gray-100 py-4 px-4">
                                            <a href="{{ route('website.category.show', ['category_slug' => $category->slug]) }}" class="-m-2 block p-2 text-gray-900 font-medium">{{ $category->name ?? '' }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200">
                        <div>
                            <ul role="list" class="flex flex-col">
                                <li class="flow-root transition-all duration-200 hover:bg-gray-100 py-4 px-4">
                                    <a href="{{ route('website.faq') }}" class="-m-2 block p-2 text-gray-900 font-bold">Faq</a>
                                </li>
                                <li class="flow-root transition-all duration-200 hover:bg-gray-100 py-4 px-4">
                                    <a href="#" class="-m-2 block p-2 text-gray-900 font-bold">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <a href="#" class="-m-2 flex items-center p-2">
                            <img src="{{ asset('images/flags/nl.png') }}" alt="" class="block h-auto w-5 flex-shrink-0">
                            <span class="ml-3 block text-base font-medium text-gray-900">NL</span>
                            <span class="sr-only">, change currency</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <header class="relative bg-white z-10">
            <p class="flex h-10 items-center justify-center bg-site-500 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">Gratis verzending bij bestellingen vanaf €350,-!</p>
            <nav aria-label="Top" class="mx-auto max-w-7xl z-10 px-4">
                <div class="border-b border-gray-200">
                    <div class="flex h-16 items-center">
                        <button type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden" @click="open = true">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>

                        <div class="ml-1 flex lg:ml-0">
                            <x-logo />
                        </div>

                        <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                            <div class="flex h-full space-x-0">
                                @foreach($categories as $category)
                                    <x-menu.dropdown>
                                        <x-slot:title>
                                            {{ $category->name ?? '' }}
                                        </x-slot:title>
                                        <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                            <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                @if(!empty($category->subcategories->first()))
                                                    <div class="group relative text-base sm:text-sm">
                                                        <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                            @if ($category->subcategories->first()->image)
                                                                <img src="{{ Storage::url($category->subcategories->first()->image) }}" alt="{{ $category->subcategories->first()->name }}" class="object-cover object-center">
                                                            @else
                                                                <img src="{{ asset('images/logo.png') }}" alt="{{ $category->subcategories->first()->name }}" class="object-cover object-center">
                                                            @endif
                                                        </div>
                                                        <a href="{{ route('website.subcategory', ['category_slug' => $category->slug, 'subcategory_slug' => $category->subcategories->first()->slug]) }}" class="mt-6 block font-medium text-gray-900">
                                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                            {{ $category->subcategories->first()->name }}
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1">Stel samen</p>
                                                    </div>
                                                @endif
                                                @if(!empty($category->subcategories->skip(1)->first()))
                                                    <div class="group relative text-base sm:text-sm">
                                                        <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                            @if ($category->subcategories->skip(1)->first()->image)
                                                                <img src="{{ Storage::url($category->subcategories->first()->image) }}" alt="{{ $category->subcategories->first()->name }}" class="object-cover object-center">
                                                            @else
                                                                <img src="{{ asset('images/logo.png') }}" alt="{{ $category->subcategories->skip(1)->first()->name }}" class="object-cover object-center">
                                                            @endif
                                                        </div>
                                                        <a href="{{ route('website.subcategory', ['category_slug' => $category->slug, 'subcategory_slug' => $category->subcategories->skip(1)->first()->slug]) }}" class="mt-6 block font-medium text-gray-900">
                                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                            {{ $category->subcategories->skip(1)->first()->name }}
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1">Stel samen</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                                                <div>
                                                    <ul role="list" aria-labelledby="heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                        @foreach($category->subcategories as $index => $subcategory)
                                                            @if($index < 5)
                                                                <x-menu.li>
                                                                    <x-slot:href>{{ route('website.subcategory', ['category_slug' => $category->slug, 'subcategory_slug' => $subcategory->slug]) }}</x-slot:href>
                                                                    {{ $subcategory->name ?? '' }}
                                                                </x-menu.li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                @if($category->subcategories->count() > 5)
                                                    <div>
                                                        <ul role="list" aria-labelledby="heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            @foreach($category->subcategories as $index => $subcategory)
                                                                @if($index >= 5)
                                                                    <x-menu.li>
                                                                        <x-slot:href>{{ route('website.subcategory', ['category_slug' => $category->slug, 'subcategory_slug' => $subcategory->slug]) }}</x-slot:href>
                                                                        {{ $subcategory->name ?? '' }}
                                                                    </x-menu.li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </x-menu.dropdown>
                                @endforeach
                                <a href="{{ route('website.category') }}" class="flex items-center px-4 text-sm font-medium text-gray-700 hover:text-site-600 hover:bg-gray-100 {{ request()->routeIs(['website.category']) ? 'bg-gray-100 text-site-600 border-b-2 border-site-600' : '' }}">Materialen</a>
                                <a href="{{ route('website.faq') }}" class="flex items-center px-4 text-sm font-medium text-gray-700 hover:text-site-600 hover:bg-gray-100 {{ request()->routeIs(['website.faq']) ? 'bg-gray-100 text-site-600 border-b-2 border-site-600' : '' }}">Faq</a>
                            </div>
                        </div>

                        <div class="ml-auto flex items-center">
                            {{-- Profile Dropdown or Login/Register Links --}}
                            @if(auth()->check())
                                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-4">
                                    <div class="ms-3 relative">
                                        <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
                                            <div @click="open = ! open">
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-700 hover:text-gray-700 focus:outline-none focus:bg-white active:bg-white transition ease-in-out duration-150">
                                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                            <img class="h-8 w-8 rounded-full object-cover mr-2" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                        @endif
                                                        {{ Str::limit(Auth::user()->name, 10) }}
                                                        <x-icons.chevron-down class="ms-2 -me-0.5 h-4 w-4" />
                                                    </button>
                                                </span>
                                            </div>
                                            <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg ltr:origin-top-right rtl:origin-top-left end-0" @click="open = false">
                                                <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
{{--                                                    <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                                                        Account beheren--}}
{{--                                                    </div>--}}
                                                    @if(auth()->user()->role === 'admin')
                                                        <a href="{{ route('dashboard.index') }}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Dashboard</a>
                                                        <div class="border-t border-gray-200"></div>
                                                    @elseif(auth()->user()->role === 'user')
                                                        <a href="{{ route('userinterface.index') }}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Dashboard</a>
                                                        <div class="border-t border-gray-200"></div>
                                                    @endif

                                                        <a href="{{ route('profile.show') }}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Profiel</a>
                                                    <div class="border-t border-gray-200"></div>
                                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                                        @csrf
                                                        <a href="{{ route('logout') }}"
                                                           @click.prevent="$root.submit();"
                                                           class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                                            {{ __('Log Out') }}
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-bold text-gray-700 hover:text-gray-800">Inloggen</a>
                                <span class="h-6 w-px mx-2 bg-gray-200" aria-hidden="true"></span>
                                <a href="{{ route('register') }}" class="text-sm font-bold text-gray-700 hover:text-gray-800">Registreren</a>
                            @endif

                            <div class="hidden lg:ml-8 lg:flex">
                                <a href="#" class="flex items-center text-gray-700 hover:text-gray-800">
                                    <img src="{{ asset('images/flags/nl.png') }}" alt="" class="block h-auto w-5 flex-shrink-0">
                                    <span class="ml-3 block text-sm font-medium">NL</span>
                                </a>
                            </div>

                            <livewire:components.search-cart />

                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
</div>
