<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-background dark:bg-gray-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LearningHub Player') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full font-sans antialiased text-gray-800 dark:text-gray-200 overflow-hidden bg-background">
    <!-- Top Navbar for Player -->
    <header class="h-16 bg-surface dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 flex items-center justify-between px-4 shrink-0 z-50 relative shadow-sm">
        <div class="flex items-center space-x-4">
            <a href="/student/dashboard" class="text-gray-500 hover:text-[#2A4B7C] dark:hover:text-blue-400 transition-colors flex items-center group bg-gray-50 dark:bg-gray-800 px-3 py-1.5 rounded-lg border border-gray-100 dark:border-gray-700">
                <svg class="h-4 w-4 mr-1 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                <span class="text-sm font-medium hidden sm:inline">Back</span>
            </a>
            <div class="h-6 w-px bg-gray-200 dark:bg-gray-700"></div>
            <h1 class="text-sm font-semibold text-gray-900 dark:text-white truncate max-w-xs sm:max-w-md">
                Course Title: Advanced Modern UI/UX Design
            </h1>
        </div>
        <div class="flex items-center space-x-4">
            <div class="hidden sm:flex items-center space-x-2">
                <x-progress-bar percentage="45" height="h-1.5" color="bg-[#10B981]" class="w-24"></x-progress-bar>
                <span class="text-xs font-medium text-gray-500">45%</span>
            </div>
            <x-button variant="primary" size="sm" class="hidden sm:flex rounded-full">
                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Mark Complete
            </x-button>
            <x-button variant="primary" size="icon" class="sm:hidden rounded-full">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </x-button>
        </div>
    </header>

    <!-- Player Area -->
    <div x-data="{ sidebarOpen: true }" class="flex h-[calc(100vh-4rem)] relative overflow-hidden">
        
        <!-- Main Content Area (Video + Tabs) -->
        <div class="flex-1 flex flex-col h-full overflow-y-auto transition-all duration-300 scroll-smooth"
             :class="sidebarOpen ? 'lg:mr-80' : 'mr-0'">
            
            <!-- Video Container Section -->
            <div class="w-full bg-black aspect-video relative flex items-center justify-center group shadow-md z-10">
                <!-- Video placeholder -->
                <div class="absolute inset-0 flex items-center justify-center">
                   <button class="h-16 w-16 bg-[#2A4B7C]/80 hover:bg-[#2A4B7C] text-white rounded-full flex items-center justify-center backdrop-blur-sm transition-transform transform hover:scale-105 shadow-xl">
                       <svg class="h-8 w-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                   </button>
                </div>
                <!-- Video Controls placeholder overlay -->
                <div class="absolute bottom-0 inset-x-0 h-16 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end px-4 pb-2 pb-3">
                    <div class="w-full flex items-center justify-between text-white text-sm">
                        <div class="flex items-center space-x-4">
                            <button class="hover:text-blue-400 transition-colors"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></button>
                            <span class="font-medium tracking-wide">12:34 / 28:50</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button class="hover:text-blue-400 transition-colors"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg></button>
                            <button class="hover:text-blue-400 transition-colors"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Tabs Below Video -->
            <div class="max-w-4xl mx-auto w-full px-4 sm:px-6 py-6 pb-20">
                {{ $slot }}
            </div>
        </div>

        <!-- Sidebar Toggle Button (when closed) -->
        <button x-show="!sidebarOpen" @click="sidebarOpen = true" class="absolute top-4 right-4 z-40 p-2 bg-surface dark:bg-gray-800 rounded-full shadow-lg border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 hover:text-[#2A4B7C] transition-all transform hover:scale-105"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0"
                style="display: none;">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
        </button>

        <!-- Lesson Curriculum Sidebar -->
        <div class="absolute right-0 top-0 bottom-0 w-80 bg-surface dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700 transform transition-transform duration-300 ease-in-out z-30 flex flex-col shadow-xl"
             :class="sidebarOpen ? 'translate-x-0' : 'translate-x-full'">
            <div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-700 shrink-0 bg-gray-50/50 dark:bg-gray-800/80 backdrop-blur-sm">
                <h2 class="font-bold text-gray-900 dark:text-white">Course Content</h2>
                <button @click="sidebarOpen = false" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white p-1 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            
            <div class="flex-1 overflow-y-auto">
                <!-- Example Accordion Sections (Will be replaced dynamically) -->
                <div x-data="{ open: true }" class="border-b border-gray-200 dark:border-gray-700">
                    <button @click="open = !open" class="w-full flex items-center justify-between p-4 bg-surface dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors group">
                        <div class="text-left">
                            <span class="text-sm font-semibold text-gray-900 dark:text-gray-100 group-hover:text-[#2A4B7C] dark:group-hover:text-blue-400 transition-colors">Section 1: Introduction</span>
                            <span class="block text-xs text-gray-500 mt-1 font-medium">0 / 3 &middot; 15 min</span>
                        </div>
                        <svg class="h-5 w-5 text-gray-400 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open" x-collapse x-transition:enter="transition-all ease-out duration-200" x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-[1000px]">
                        <a href="#" class="flex p-4 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors group bg-blue-50/30 dark:bg-blue-900/10 border-l-2 border-[#2A4B7C] dark:border-blue-400">
                            <div class="mr-3 mt-0.5">
                                <input type="checkbox" class="h-4 w-4 text-[#2A4B7C] focus:ring-[#2A4B7C] border-gray-300 rounded cursor-pointer transition-colors">
                            </div>
                            <div>
                                <span class="text-sm font-medium text-gray-900 dark:text-gray-100 group-hover:text-[#2A4B7C] dark:group-hover:text-blue-400 transition-colors">1. Welcome to the course</span>
                                <div class="flex items-center text-xs text-gray-500 mt-1 space-x-2">
                                    <span class="flex items-center"><svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> 5:20</span>
                                </div>
                            </div>
                        </a>
                        <!-- More lessons here -->
                        <a href="#" class="flex p-4 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors group">
                            <div class="mr-3 mt-0.5">
                                <input type="checkbox" class="h-4 w-4 text-[#2A4B7C] focus:ring-[#2A4B7C] border-gray-300 rounded cursor-pointer transition-colors">
                            </div>
                            <div>
                                <span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-[#2A4B7C] dark:group-hover:text-blue-400 transition-colors">2. Setting up the environment</span>
                                <div class="flex items-center text-xs text-gray-500 mt-1 space-x-2">
                                    <span class="flex items-center"><svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> 7:45</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
