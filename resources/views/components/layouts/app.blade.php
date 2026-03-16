<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-background dark:bg-gray-900 scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LearningHub') }} - Dashboard</title>

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full font-sans antialiased text-gray-800 dark:text-gray-200 overflow-hidden bg-[#F8FAFC]">
    <div x-data="{ sidebarOpen: false }" class="flex h-full">

        <!-- Mobile sidebar backdrop -->
        <div x-show="sidebarOpen" class="fixed inset-0 z-40 bg-gray-900/80 backdrop-blur-sm lg:hidden"
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             style="display: none;"
             @click="sidebarOpen = false"></div>

        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 z-50 w-72 bg-surface dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-auto"
             :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
             
            <div class="flex items-center justify-between h-20 px-6 border-b border-gray-200 dark:border-gray-700">
                <a href="/" class="text-2xl font-bold text-[#2A4B7C] dark:text-blue-400">
                    Learning<span class="text-gray-800 dark:text-white">Hub</span>
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="h-[calc(100vh-5rem)] overflow-y-auto p-4 space-y-1">
                <a href="#" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl bg-blue-50 text-[#2A4B7C] dark:bg-blue-900/30 dark:text-blue-300 group transition-colors">
                    <svg class="mr-3 h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-xl hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white transition-colors">
                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    My Learning
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-xl hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white transition-colors">
                    <svg class="mr-3 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    Wishlist
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-xl hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white transition-colors">
                    <svg class="mr-3 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    Certificates
                </a>
                <div class="pt-8 pb-4">
                    <h3 class="px-4 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Account</h3>
                </div>
                <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-xl hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white transition-colors">
                    <svg class="mr-3 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Profile Settings
                </a>
            </div>
        </div>

        <!-- Main Content Wrapper -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar -->
            <header class="h-20 bg-surface dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between px-4 sm:px-6 lg:px-8 shrink-0">
                <button @click="sidebarOpen = true" class="lg:hidden text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>

                <div class="flex-1 px-4 flex justify-end">
                    <!-- Right navbar items -->
                    <div class="ml-4 flex items-center md:ml-6 space-x-4">
                        
                        <!-- Notifications -->
                        <x-dropdown align="right" width="64" contentClasses="p-0 bg-surface dark:bg-gray-800">
                            <x-slot name="trigger">
                                <button class="p-2 text-gray-400 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none relative rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                    <span class="sr-only">View notifications</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                                    <span class="absolute top-1.5 right-1.5 block h-2.5 w-2.5 rounded-full bg-red-400 ring-2 ring-white dark:ring-gray-800"></span>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <div class="px-4 py-3 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center rounded-t-xl bg-gray-50 dark:bg-gray-800/50">
                                    <h3 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Notifications</h3>
                                    <button class="text-xs text-[#2A4B7C] dark:text-blue-400 hover:underline">Mark all read</button>
                                </div>
                                <div class="max-h-64 overflow-y-auto">
                                    <a href="#" class="block px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors border-b border-gray-100 dark:border-gray-700/50">
                                        <div class="text-sm text-gray-800 dark:text-gray-200"><span class="font-medium text-[#2A4B7C] dark:text-blue-400">New Lesson</span> added to Web Design series!</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">2 hours ago</div>
                                    </a>
                                </div>
                                <div class="px-4 py-2 border-t border-gray-100 dark:border-gray-700 text-center rounded-b-xl hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <a href="#" class="text-sm font-medium text-[#2A4B7C] dark:text-blue-400">View All Notifications</a>
                                </div>
                            </x-slot>
                        </x-dropdown>

                        <!-- Profile dropdown -->
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center space-x-2 focus:outline-none p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                    <x-avatar name="Student User" size="sm"></x-avatar>
                                    <span class="hidden md:block text-sm font-medium text-gray-700 dark:text-gray-200">Student</span>
                                    <svg class="hidden md:block h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors hover:text-[#2A4B7C] dark:hover:text-blue-400">Profile Settings</a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors hover:text-[#2A4B7C] dark:hover:text-blue-400">Billing</a>
                                <div class="border-t border-gray-100 dark:border-gray-700"></div>
                                <a href="#" class="block px-4 py-3 text-sm text-[#EF4444] hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors">Sign out</a>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </header>

            <!-- Main Dashboard Area -->
            <main class="flex-1 overflow-y-auto bg-background dark:bg-gray-900 p-4 sm:p-6 lg:p-8">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
