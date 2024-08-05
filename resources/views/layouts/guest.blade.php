<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta property="og:url" content="index.html">
        <meta property="og:title" content="Tailwind CSS Sign in/Login Page - Flowbite">
        <meta property="og:description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
        <meta property="og:type" content="article">
        <meta property="og:image" content="../../images/og-image.png">
        <meta property="og:image:type" content="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="bg-gray-50 dark:bg-gray-900 w-full">
                {{ $slot }}
            </div>
        </div>
        <script src="{{ asset('assets/app.bundle.js') }}" defer></script>
    </body>
   
</html>















