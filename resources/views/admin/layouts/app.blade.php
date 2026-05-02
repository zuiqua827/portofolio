<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Admin - @yield('title', 'Dashboard')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-gray-50 dark:bg-neutral-900 antialiased">
    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-white dark:bg-neutral-800 shadow-xl border-r border-gray-200 dark:border-neutral-700 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out" id="sidebar">
        <div class="flex items-center justify-center h-20 px-6 border-b border-gray-200 dark:border-neutral-700">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Portfolio Admin</h1>
        </div>
        
        <nav class="mt-10 px-6 space-y-4">
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-4 py-3 rounded-xl text-gray-700 dark:text-neutral-300 hover:bg-gray-100 dark:hover:bg-neutral-700 hover:text-gray-900 dark:hover:text-white transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-blue-50 dark:bg-blue-900/30 border-2 border-blue-200 dark:border-blue-800 font-semibold text-blue-700 dark:text-blue-300' : '' }}">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                Dashboard
            </a>
            
            <a href="{{ route('admin.projects.index') }}" 
               class="flex items-center px-4 py-3 rounded-xl text-gray-700 dark:text-neutral-300 hover:bg-gray-100 dark:hover:bg-neutral-700 hover:text-gray-900 dark:hover:text-white transition-all duration-200 {{ request()->routeIs('admin.projects.*') ? 'bg-blue-50 dark:bg-blue-900/30 border-2 border-blue-200 dark:border-blue-800 font-semibold text-blue-700 dark:text-blue-300' : '' }}">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                </svg>
                Projects
                <span class="ml-auto px-2 py-1 bg-gray-100 dark:bg-neutral-700 text-gray-700 dark:text-neutral-300 text-xs rounded-full font-medium border border-gray-200 dark:border-neutral-600">CRUD</span>
            </a>
            
            <div class="mt-8 pt-8 border-t border-gray-200 dark:border-neutral-700 space-y-2">
                <a href="{{ route('profile.edit') }}" 
                   class="flex items-center w-full px-4 py-3 text-gray-700 dark:text-neutral-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-neutral-700 rounded-xl transition-all duration-200 font-medium">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
                

                <a href="{{ route('logout') }}" 
                   class="flex items-center w-full px-4 py-3 text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-xl transition-all duration-200 font-medium"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </nav>
    </aside>

    <!-- Mobile menu overlay -->
    <div class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm lg:hidden hidden" id="mobile-overlay"></div>

    <!-- Main content -->
    <div class="lg:ml-64 transition-all duration-300">
        <!-- Top bar -->
        <div class="bg-white dark:bg-neutral-800 border-b border-gray-200 dark:border-neutral-700 px-6 py-4 lg:pl-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center lg:hidden">
                    <button id="mobile-menu-toggle" class="p-2 rounded-lg text-gray-700 hover:text-gray-900 dark:text-neutral-300 dark:hover:text-white mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 max-w-xs lg:max-w-md">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">@yield('page-title', 'Dashboard')</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-sm">
                        <span class="text-white font-semibold text-sm">{{ Auth::user()->name[0] ?? 'U' }}</span>
                    </div>
                    <span class="text-sm text-gray-700 dark:text-neutral-300">{{ Auth::user()->name ?? 'Admin' }}</span>
                </div>
            </div>
        </div>

        <!-- Page content -->
        <main class="p-8">
            @if (session('success'))
                <div class="mb-8 p-6 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-2xl backdrop-blur-sm">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-green-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-green-800 dark:text-green-200 font-medium">{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="mb-8 p-6 bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-800 rounded-2xl backdrop-blur-sm">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-red-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <span class="text-red-800 dark:text-red-200 font-medium">{{ session('error') }}</span>
                    </div>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    @stack('scripts')

    <script>
        // Mobile sidebar toggle
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobile-overlay');
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');

        mobileMenuToggle?.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
            mobileOverlay.classList.remove('hidden');
        });

        mobileOverlay?.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            mobileOverlay.classList.add('hidden');
        });

        // Close sidebar on route change (optional)
        window.addEventListener('DOMContentLoaded', () => {
            sidebar.classList.add('-translate-x-full');
            mobileOverlay.classList.add('hidden');
        });
    </script>
</body>
</html>