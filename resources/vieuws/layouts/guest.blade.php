<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Hardeman Toelevering | Aanmelden</title>

    {{--Include--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
</head>

<body class="p-0 m-0 bg-white overflow-hidden">

<div class="flex justify-center items-center w-full h-screen">
    <div class="flex justify-between items-center w-full">
        <div class="relative flex justify-center w-full lg:w-3/5 h-screen p-4">
            <div class="fixed left-0 md:top-10 top-4 flex justify-between items-center w-full lg:w-3/5 md:px-8 px-4">
                <x-buttons.back />
                <x-logo />
            </div>
            {{ $slot }}
        </div>
        <div class="w-full lg:w-2/5 flex justify-center items-center flex-col lg:block hidden">
            <div class="relative flex justify-center w-full lg:w-full h-screen p-4">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/banner.webp') }}" alt="Banner" class="w-full h-full bg-center bg-no-repeat bg-cover object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black to-secondary-0 rounded-tr-[100px]"></div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
