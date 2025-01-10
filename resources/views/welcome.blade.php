<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nutrition Manager</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 dark:bg-gray-900 dark:text-white/50">
        <x-nav-bar class="flex justify-end">
            @if (Auth::check())
                <x-nav-link 
                    href="{{ url('/dashboard') }}"
                    class="text-xl rounded-md px-3 py-2 text-black ring-1 ring-transparent focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </x-nav-link >
            @else
                <x-nav-link
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </x-nav-link>
                <x-nav-link
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Register
                </x-nav-link>
            @endif
        </x-nav-bar>

        <main class="mt-6 content-center">
            <h1 class="text-center">
                Bem vindo ao Nutrition Manager
            </h1>
        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Projeto de moraisz
        </footer>
    </body>
</html>
