<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 bg-gray-100">
        <div class="flex flex-col items-center pt-6 sm:justify-center sm:pt-0">
            <div class="px-6 py-4 mt-6 overflow-hidden">
                <a href="/">
                    <x-application-logo />
                </a>
            </div>

            <div class="lg:w-[60%] px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:rounded-lg">
                {{ $slot }}
            </div>
            <div class="mt-2 font-sans text-sm">Made by Tamas Dogi in 2024 - All rights reserved &copy;</div>
        </div>
    </body>
</html>
