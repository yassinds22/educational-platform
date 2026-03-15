<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LearningHub') }}</title>

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-[#F8FAFC] text-gray-800 dark:bg-gray-900 dark:text-gray-200">
    <div class="min-h-screen flex flex-col">
        
        <!-- Sticky Navbar -->
        <header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-surface/90 dark:bg-gray-900/90 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="text-2xl font-bold text-[#2A4B7C] dark:text-blue-400">
                            Learning<span class="text-gray-800 dark:text-white">Hub</span>
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <nav class="hidden md:flex space-x-8">
                        <a href="#" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">Courses</a>
                        <a href="#" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">Paths</a>
                        <a href="#" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">Instructors</a>
                        <a href="#" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">For Enterprise</a>
                    </nav>

                    <!-- Auth Buttons (Desktop) -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="#" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">Log In</a>
                        <x-button variant="primary">Sign Up Free</x-button>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="flex items-center md:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 dark:text-gray-300 hover:text-[#2A4B7C] focus:outline-none transition-colors">
                            <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" class="md:hidden bg-surface dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800"
                 x-transition:enter="transition-all ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 style="display: none;">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Courses</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Paths</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Instructors</a>
                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Log In</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-[#2A4B7C] dark:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Sign Up</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content (Centered Container) -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Modern Footer -->
        <footer class="bg-surface dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800 pt-16 pb-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8">
                    <div class="col-span-1 md:col-span-1">
                        <a href="/" class="text-2xl font-bold text-[#2A4B7C] dark:text-blue-400 block mb-4">
                            Learning<span class="text-gray-800 dark:text-white">Hub</span>
                        </a>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">Empowering learners worldwide with the best online educational resources.</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 uppercase tracking-wider mb-4">Platform</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">Browse Courses</a></li>
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">Learning Paths</a></li>
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">Pricing</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 uppercase tracking-wider mb-4">Community</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">Students</a></li>
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">Instructors</a></li>
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 uppercase tracking-wider mb-4">Company</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">About Us</a></li>
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">Careers</a></li>
                            <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-12 pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-gray-500 dark:text-gray-400">&copy; {{ date('Y') }} LearningHub Inc. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-gray-500 transition-colors">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500 transition-colors">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
