<?php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js'])
        {{-- @inertiaHead --}}
    </head>
    <header class="bg-black py-10 px-5 flex justify-between">
        <div>
            <a href="/"><img src="{{ asset('/build/assets/img/flixLogo.png') }}" class="w-full" /></a>
        </div>

        <a href="/Logout" class="flex justify-around items-end h2 cursor-pointer">
            <img src="{{ asset('/build/assets/img/flix_icon_login-ylw.svg') }}" class="w-10 pr-2" /> Log In
        </a>

    </header>
    <main class="font-sans antialiased bg-woodBG min-h-screen bg-cover">
        {{-- @inertia --}}

        @yield('content')
    </main>
    <footer>
    </footer>
</html>