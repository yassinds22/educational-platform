<!-- Sticky Navbar -->
<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-surface/90 dark:bg-gray-900/90 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-2xl font-bold text-[#2A4B7C] dark:text-blue-400">
                    مركز<span class="text-gray-800 dark:text-white">التعلم</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8 space-x-reverse">
                <a href="{{ route('courses.index') }}" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">الدورات</a>
                <a href="{{ route('categories') }}" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">المسارات</a>
                <a href="{{ route('instructor') }}" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">المدربون</a>
                <a href="#" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">للشركات</a>
            </nav>

            <!-- Auth Buttons (Desktop) -->
            <div class="hidden md:flex items-center space-x-4 space-x-reverse">
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-[#2A4B7C] dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors">تسجيل الدخول</a>
                <x-button variant="primary" onclick="window.location.href='{{ route('register') }}'">اشترك مجاناً</x-button>
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
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-right">
            <a href="{{ route('courses.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">الدورات</a>
            <a href="{{ route('categories') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">المسارات</a>
            <a href="{{ route('instructor') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">المدربون</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">للشركات</a>
            
            <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">تسجيل الدخول</a>
                <a href="{{ route('register') }}" class="block px-3 py-2 rounded-md text-base font-medium text-[#2A4B7C] dark:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">اشترك الآن</a>
            </div>
        </div>
    </div>
</header>
