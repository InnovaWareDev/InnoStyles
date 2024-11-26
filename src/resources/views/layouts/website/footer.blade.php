@php
    $categories = \App\Models\Category::all();
@endphp
<footer class="border-t border-gray-200 w-full py-14 bg-gray-50">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">

            <div class="flex justify-center items-center w-full rounded-t-3xl">
                <div class="flex justify-between items-start flex-wrap w-full gap-y-6 max-w-screen-xl p-4 py-12 border-b border-gray-200">

                    <!-- Categorieën -->
                    <div class="flex justify-start sm:items-start items-center flex-col gap-y-4 md:w-[24%] w-full">
                        @foreach($categories as $category)
                            <a href="{{ route('website.category.show', ['category_slug' => $category->slug]) }}" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">
                                {{ $category->name ?? '' }}
                            </a>
                        @endforeach
                    </div>

                    <!-- Klantenservice -->
                    <div class="flex justify-start sm:items-start items-center flex-col gap-y-4 md:w-[24%] w-full">
                        <a href="" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Klantenservice</a>
                        <a href="" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Samples aanvragen</a>
                        <a href="" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Verzendingen</a>
                        <a href="" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Bezorgen en afhalen</a>
                        <a href="" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Bestellingen</a>
                        <a href="" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Levertijden</a>
                        <a href="" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Veelgestelde vragen</a>
                        <a href="" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Zoeken</a>
                    </div>

                    <!-- Contact -->
                    <div class="flex justify-start sm:items-start items-center flex-col gap-y-4 md:w-[24%] w-full">
                        <a href="mailto:info@hardeman-toelevering.nl" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">info@hardeman-toelevering.nl</a>
                        <a href="tel:0318596120" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">0318 - 59 61 20</a>
                        <a href="https://hardeman-lunteren.nl/" class="relative text-sm text-gray-900 hover:before:w-full before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[1px] before:bg-white before:transition-all before:duration-300">Onderdeel van Hardeman Maatwerk voor Interieurs.</a>
                    </div>
                </div>
            </div>

            <!-- Footer Links en Socials -->
            <div class="flex justify-between items-center flex-wrap gap-y-6 my-14 max-w-screen-xl mx-auto">
                <div class="flex justify-center gap-4 flex-wrap">
                    <a href="" class="text-xs text-gray-500 text-center block">Algemene voorwaarden</a>
                    <a href="" class="text-xs text-gray-500 text-center block">Privacy beleid</a>
                    <a href="https://innovaware.nl" class="text-xs text-gray-500 text-center block">Realisatie door InnovaWare</a>
                    <span class="text-xs text-gray-500 text-center block">© {{ date('Y') }} - Alle rechten voorbehouden</span>
                </div>
                <div class="flex space-x-4">
                    <a href="" class="flex justify-center items-center size-12 rounded-full bg-gray-100 text-gray-900 transition-all duration-500 hover:text-site-600">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="mailto:info@hardeman-lunteren.nl" class="flex justify-center items-center size-12 rounded-full bg-gray-100 text-gray-900 transition-all duration-500 hover:text-site-600">
                        <i class="fa-regular fa-envelope-open"></i>
                    </a>
                    <a href="tel:0318596120" class="flex justify-center items-center size-12 rounded-full bg-gray-100 text-gray-900 transition-all duration-500 hover:text-site-600">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
