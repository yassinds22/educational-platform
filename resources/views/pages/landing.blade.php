<x-layouts.public>
    <!-- Hero Section -->
    <div class="relative bg-white dark:bg-gray-900 overflow-hidden border-b border-gray-100 dark:border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-20 pb-8 bg-white dark:bg-gray-900 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 pt-16 lg:pt-24">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Master new skills</span>
                            <span class="block text-[#2A4B7C] dark:text-blue-400 xl:inline">to advance your career</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 dark:text-gray-400 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Join millions of learners worldwide learning the latest in tech, business, design, and more. Transform your career with high-quality online courses.
                        </p>
                        
                        <!-- Search Bar -->
                        <div class="mt-8 sm:max-w-lg sm:mx-auto lg:mx-0 relative">
                            <div class="relative flex items-center shadow-lg rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 focus-within:ring-2 focus-within:ring-[#2A4B7C] transition-all duration-300">
                                <div class="pl-4">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                </div>
                                <input type="text" placeholder="What do you want to learn?" class="w-full border-none focus:ring-0 py-4 pl-3 pr-12 text-base text-gray-900 dark:text-white bg-transparent placeholder-gray-400">
                                <button class="absolute right-2 p-2 bg-[#2A4B7C] text-white rounded-lg hover:bg-opacity-90 transition-colors shadow-sm">
                                    <span class="sr-only">Search</span>
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </button>
                            </div>
                            <div class="mt-4 flex flex-wrap gap-2 text-sm text-gray-500 dark:text-gray-400 items-center">
                                <span class="font-medium mr-1">Popular:</span>
                                <x-badge variant="gray" size="sm" class="hover:bg-gray-200 dark:hover:bg-gray-600 cursor-pointer transition-colors">Python</x-badge>
                                <x-badge variant="gray" size="sm" class="hover:bg-gray-200 dark:hover:bg-gray-600 cursor-pointer transition-colors">Web Design</x-badge>
                                <x-badge variant="gray" size="sm" class="hover:bg-gray-200 dark:hover:bg-gray-600 cursor-pointer transition-colors">Leadership</x-badge>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- Hero Image -->
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 z-10 hidden lg:block">
            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1741&q=80" alt="Students learning">
            <div class="absolute inset-0 bg-gradient-to-r from-white dark:from-gray-900 via-white/80 dark:via-gray-900/80 to-transparent"></div>
        </div>
    </div>

    <!-- Trusted By Bar -->
    <div class="bg-gray-50 dark:bg-gray-800/30 border-b border-gray-100 dark:border-gray-800 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm font-bold uppercase text-gray-500 tracking-widest">Trusted by modern teams at</p>
            <div class="mt-8 flex justify-center gap-8 md:gap-16 flex-wrap opacity-60 grayscale hover:grayscale-0 transition-all duration-300">
                <!-- Logos Placeholder -->
                <div class="flex items-center justify-center font-bold text-2xl text-gray-800 dark:text-gray-300">Google</div>
                <div class="flex items-center justify-center font-bold text-2xl text-gray-800 dark:text-gray-300">IBM</div>
                <div class="flex items-center justify-center font-bold text-2xl text-gray-800 dark:text-gray-300">Microsoft</div>
                <div class="flex items-center justify-center font-bold text-2xl text-gray-800 dark:text-gray-300">Netflix</div>
            </div>
        </div>
    </div>

    <!-- Featured Courses -->
    <div class="py-16 sm:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-end mb-10 gap-4">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Featured Courses</h2>
                <p class="mt-2 text-gray-500 dark:text-gray-400">Hand-picked by our expert instructors</p>
            </div>
            <a href="/courses" class="inline-flex text-[#2A4B7C] dark:text-blue-400 font-medium hover:underline">View all courses &rarr;</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $demoCourse = [
                    'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'badge' => 'Bestseller',
                    'category' => 'Development',
                    'level' => 'Beginner',
                    'title' => 'Mastering Laravel & Tailwind CSS 4',
                    'instructor' => 'Jane Doe',
                    'rating' => '4.9',
                    'reviews' => '2.5k',
                    'duration' => '12h 30m',
                    'lectures' => '85',
                    'price' => '89.99'
                ];
            @endphp
            
            <x-course-card :course="$demoCourse" />
            <x-course-card :course="array_merge($demoCourse, ['title' => 'Advanced UI/UX Design System', 'category' => 'Design', 'badge' => 'Highest Rated'])" />
            <x-course-card :course="array_merge($demoCourse, ['title' => 'Data Science Bootcamp 2026', 'category' => 'Data', 'badge' => 'Hot'])" />
            <x-course-card :course="array_merge($demoCourse, ['title' => 'Digital Marketing Masterclass', 'category' => 'Business', 'badge' => 'New'])" />
        </div>
    </div>
    
    <!-- Learning Paths (New) -->
    <div class="bg-blue-50 dark:bg-blue-900/10 border-y border-blue-100 dark:border-blue-900/20 py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Accelerate your career with Learning Paths</h2>
                <p class="mt-3 text-lg text-gray-500 dark:text-gray-400">Curated collections of courses designed to get you job-ready in months, not years.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Path Card 1 -->
                <x-card class="hover:-translate-y-2 transition-transform duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="h-12 w-12 rounded-xl bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-[#2A4B7C] dark:text-blue-400">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Become a Web Developer</h3>
                            <p class="text-xs text-gray-500">8 Courses &middot; 6 Months</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6">Master HTML, CSS, JavaScript, React, and Node.js to build full-stack web applications.</p>
                    <x-button variant="outline" class="w-full">Explore Path</x-button>
                </x-card>

                <!-- Path Card 2 -->
                <x-card class="hover:-translate-y-2 transition-transform duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="h-12 w-12 rounded-xl bg-green-100 dark:bg-green-900/50 flex items-center justify-center text-green-600 dark:text-green-400">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Data Scientist</h3>
                            <p class="text-xs text-gray-500">12 Courses &middot; 9 Months</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6">Learn Python, SQL, data visualization, and machine learning algorithms.</p>
                    <x-button variant="outline" class="w-full">Explore Path</x-button>
                </x-card>

                <!-- Path Card 3 -->
                <x-card class="hover:-translate-y-2 transition-transform duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="h-12 w-12 rounded-xl bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center text-purple-600 dark:text-purple-400">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">UI/UX Designer</h3>
                            <p class="text-xs text-gray-500">6 Courses &middot; 4 Months</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6">Master design thinking, user research, wireframing, and Figma prototyping.</p>
                    <x-button variant="outline" class="w-full">Explore Path</x-button>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.public>
