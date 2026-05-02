<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portfolio') }} - @yield('title', 'Personal Portfolio')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS from Breeze/Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-neutral-900 text-gray-900 dark:text-neutral-100">
    <!-- Navigation -->
    <nav class="bg-white/80 dark:bg-neutral-900/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-200/50 dark:border-neutral-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('portfolio.home') }}" class="text-2xl font-bold text-gray-900 dark:text-white">Portfolio</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('portfolio.home') }}" class="text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white transition">Home</a>
                    <a href="{{ route('portfolio.about') }}" class="text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white transition">About</a>
                    <a href="{{ route('portfolio.projects') }}" class="text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white transition font-semibold">Projects</a>
                    <a href="{{ route('portfolio.contact') }}" class="text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white transition">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-btn" class="p-2 rounded-md text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white/90 dark:bg-neutral-900/90 border-t border-gray-200/50 dark:border-neutral-800/50">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a href="{{ route('portfolio.home') }}" class="block px-3 py-2 text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white">Home</a>
                <a href="{{ route('portfolio.about') }}" class="block px-3 py-2 text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white">About</a>
                <a href="{{ route('portfolio.projects') }}" class="block px-3 py-2 text-gray-700 hover:text-gray-900 font-semibold dark:text-neutral-300 dark:hover:text-white">Projects</a>
                <a href="{{ route('portfolio.contact') }}" class="block px-3 py-2 text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} Personal Portfolio. Built with Laravel.</p>
        </div>
    </footer>

    @stack('scripts')

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

