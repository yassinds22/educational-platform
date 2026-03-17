<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="h-full bg-gray-50 dark:bg-gray-950 scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LearningHub') }} - Admin</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, .font-display { font-family: 'Outfit', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full font-sans antialiased text-slate-900 dark:text-slate-100 overflow-hidden bg-[#F1F5F9] dark:bg-gray-950">
    <div x-data="{ sidebarOpen: false, searchOpen: false }" class="flex h-full">

        <!-- Mobile sidebar backdrop -->
        <div x-show="sidebarOpen" 
             x-cloak
             class="fixed inset-0 z-40 bg-slate-900/60 backdrop-blur-sm lg:hidden"
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="sidebarOpen = false"></div>

        <!-- Desktop/Tablet Sidebar -->
        <aside class="fixed inset-y-0 z-50 w-72 bg-white dark:bg-gray-900 border-e border-slate-200 dark:border-gray-800 transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-auto"
               :class="sidebarOpen ? 'translate-x-0' : (document.documentElement.dir === 'rtl' ? 'translate-x-full' : '-translate-x-full') + ' lg:translate-x-0'">
             
            <!-- Logo Section -->
            <div class="flex items-center justify-between h-20 px-8 border-b border-slate-100 dark:border-gray-800 bg-white dark:bg-gray-900 sticky top-0 z-10">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <div class="w-10 h-10 bg-gradient-to-tr from-blue-600 to-indigo-700 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold font-display tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-slate-900 to-slate-700 dark:from-white dark:to-slate-300">{{ __('لوحة الإدارة') }}</span>
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-gray-800 rounded-lg transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Navigation Links -->
            <nav class="h-[calc(100vh-5rem)] overflow-y-auto p-6 space-y-8 scrollbar-thin scrollbar-thumb-slate-200">
                
                <!-- Main Core -->
                <div>
                    <h3 class="px-4 text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mb-4">{{ __('الإدارة الأساسية') }}</h3>
                    <div class="space-y-1">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-sm font-semibold rounded-2xl {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/20 dark:text-blue-400' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-gray-800/50 hover:text-slate-900 dark:hover:text-white' }} group transition-all duration-200">
                            <svg class="me-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                            {{ __('لوحة التحكم') }}
                        </a>
                        <a href="{{ route('admin.users') }}" class="flex items-center px-4 py-3 text-sm font-medium {{ request()->routeIs('admin.users') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/20 dark:text-blue-400' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-gray-800/50 hover:text-slate-900 dark:hover:text-white' }} rounded-2xl transition-all duration-200">
                            <svg class="me-3 h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            {{ __('إدارة المستخدمين') }}
                        </a>
                    </div>
                </div>

                <!-- LMS specific -->
                <div>
                    <h3 class="px-4 text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mb-4">{{ __('إدارة المحتوى') }}</h3>
                    <div class="space-y-1">
                        <a href="{{ route('admin.categories') }}" class="flex items-center px-4 py-3 text-sm font-medium {{ request()->routeIs('admin.categories') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/20 dark:text-blue-400' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-gray-800/50 hover:text-slate-900 dark:hover:text-white' }} rounded-2xl transition-all duration-200">
                            <svg class="me-3 h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 11h.01M7 15h.01M13 7h.01M13 11h.01M13 15h.01M17 7h.01M17 11h.01M17 15h.01M11 21v-3l-4-4V5a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2h-1l-3 3v3H11z"/></svg>
                            {{ __('الأقسام') }}
                        </a>
                        <a href="{{ route('admin.courses') }}" class="flex items-center px-4 py-3 text-sm font-medium {{ request()->routeIs('admin.courses') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/20 dark:text-blue-400' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-gray-800/50 hover:text-slate-900 dark:hover:text-white' }} rounded-2xl transition-all duration-200">
                            <svg class="me-3 h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            {{ __('جميع الكورسات') }}
                        </a>
                    </div>
                </div>

                <!-- Business -->
                <div>
                    <h3 class="px-4 text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mb-4">{{ __('المالية') }}</h3>
                    <div class="space-y-1">
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-slate-600 dark:text-slate-400 rounded-2xl hover:bg-slate-50 dark:hover:bg-gray-800/50 hover:text-slate-900 dark:hover:text-white transition-all duration-200">
                            <svg class="me-3 h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            {{ __('المدفوعات') }}
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-slate-600 dark:text-slate-400 rounded-2xl hover:bg-slate-50 dark:hover:bg-gray-800/50 hover:text-slate-900 dark:hover:text-white transition-all duration-200">
                            <svg class="me-3 h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            {{ __('الجلسات المباشرة') }}
                        </a>
                    </div>
                </div>

                <div class="pt-8 opacity-50">
                    <div class="px-4 py-3 bg-slate-50 dark:bg-gray-800 rounded-2xl border border-slate-100 dark:border-gray-700">
                        <p class="text-[10px] text-slate-400 uppercase tracking-tighter mb-1">{{ __('الإصدار 1.0.0') }}</p>
                        <p class="text-[10px] text-slate-500">{{ __('منصة تعليمية احترافية') }}</p>
                    </div>
                </div>
            </nav>
        </aside>

        <!-- Main Content Wrapper -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            
            <!-- Topbar -->
            <header class="h-20 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-slate-200 dark:border-gray-800 flex items-center justify-between px-8 z-30 shrink-0">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="lg:hidden me-4 text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <!-- Search Bar placeholder -->
                    <div class="relative hidden sm:block">
                        <span class="absolute inset-y-0 start-0 ps-3 flex items-center pointer-events-none text-slate-400">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </span>
                        <input type="text" placeholder="{{ __('ابحث عن أي شيء...') }}" class="w-80 ps-10 py-2.5 bg-slate-50 dark:bg-gray-800 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 transition-all">
                    </div>
                </div>

                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <!-- Notifications -->
                    <button class="relative p-2 text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors rounded-xl hover:bg-slate-50 dark:hover:bg-gray-800">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                        <span class="absolute top-2 end-2 block h-2.5 w-2.5 rounded-full bg-red-400 ring-2 ring-white dark:ring-gray-900 animate-pulse"></span>
                    </button>

                    <div class="h-8 w-[1px] bg-slate-200 dark:bg-gray-800 hidden md:block"></div>

                    <!-- Profile -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="flex items-center space-x-3 rtl:space-x-reverse p-1 rounded-2xl hover:bg-slate-50 dark:hover:bg-gray-800 transition-all">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#2A4B7C] to-blue-600 flex items-center justify-center text-white font-bold text-sm border-2 border-white dark:border-gray-800 shadow-sm">
                                AD
                            </div>
                            <div class="hidden md:block text-start">
                                <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight">{{ __('المسؤول الرئيسي') }}</p>
                                <p class="text-[11px] text-slate-400 leading-tight tracking-wider uppercase font-semibold">{{ __('مدير النظام') }}</p>
                            </div>
                            <svg class="hidden md:block h-4 w-4 text-slate-400 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>

                        <div x-show="open" 
                             @click.away="open = false"
                             x-cloak
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="absolute end-0 mt-2 w-56 origin-top-right bg-white dark:bg-gray-800 rounded-2xl shadow-2xl border border-slate-100 dark:border-gray-700 py-2 focus:outline-none">
                            <a href="#" class="flex items-center px-4 py-3 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                <svg class="me-3 h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                {{ __('ملفي الشخصي') }}
                            </a>
                            <a href="#" class="flex items-center px-4 py-3 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                <svg class="me-3 h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                {{ __('الإعدادات') }}
                            </a>
                            <div class="my-2 border-t border-slate-100 dark:border-gray-700"></div>
                            <form method="POST" action="#">
                                @csrf
                                <button type="submit" class="w-full flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors">
                                    <svg class="me-3 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                    {{ __('تسجيل الخروج') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Page Content -->
            <main class="flex-1 overflow-y-auto bg-[#F8FAFC] dark:bg-gray-950 p-8">
                <div class="max-w-7xl mx-auto h-full">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>
</html>
