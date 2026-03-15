<x-layouts.public>
    <!-- Instructor Header -->
    <div class="relative bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800">
        <!-- Cover Image -->
        <div class="h-48 sm:h-64 w-full bg-gray-200 dark:bg-gray-800 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Cover" class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="sm:flex sm:items-end sm:space-x-5 pb-8 relative -mt-16 sm:-mt-24">
                <!-- Avatar -->
                <div class="relative group">
                    <img class="h-32 w-32 sm:h-40 sm:w-40 rounded-full ring-4 ring-white dark:ring-gray-900 object-cover bg-white shadow-xl" src="https://ui-avatars.com/api/?name=Jane+Doe&background=2A4B7C&color=fff&size=400" alt="Jane Doe">
                </div>
                
                <div class="mt-6 sm:mt-0 flex-1 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                    <div class="sm:hidden mb-6 sm:mb-0">
                        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white truncate">Jane Doe</h1>
                        <p class="text-sm font-bold tracking-wide text-[#2A4B7C] dark:text-blue-400 uppercase mt-1">Senior Web Developer</p>
                    </div>
                    
                    <!-- Stats Bar -->
                    <div class="flex items-center justify-between sm:justify-start space-x-6 lg:space-x-10 px-6 py-4 bg-surface dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 bg-white/90 dark:bg-gray-800/90 backdrop-blur-md">
                        <div class="flex flex-col text-center sm:text-left">
                            <span class="text-2xl font-extrabold text-[#2A4B7C] dark:text-blue-400">145k</span>
                            <span class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mt-1">Students</span>
                        </div>
                        <div class="w-px h-10 bg-gray-200 dark:bg-gray-700"></div>
                        <div class="flex flex-col text-center sm:text-left">
                            <span class="text-2xl font-extrabold text-[#2A4B7C] dark:text-blue-400">12</span>
                            <span class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mt-1">Courses</span>
                        </div>
                        <div class="w-px h-10 bg-gray-200 dark:bg-gray-700"></div>
                        <div class="flex flex-col text-center sm:text-left">
                            <span class="text-2xl font-extrabold text-[#2A4B7C] dark:text-blue-400">42k</span>
                            <span class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mt-1">Reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="hidden sm:block pb-10">
                <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white truncate">Jane Doe</h1>
                <p class="text-lg font-bold tracking-wide text-[#2A4B7C] dark:text-blue-400 uppercase mt-2">Senior Web Developer & UI/UX Expert</p>
                <div class="flex space-x-4 mt-6">
                    <a href="#" class="text-gray-400 hover:text-[#2A4B7C] dark:hover:text-blue-400 transition-colors bg-gray-50 dark:bg-gray-800 p-2 rounded-full border border-gray-200 dark:border-gray-700">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#2A4B7C] dark:hover:text-blue-400 transition-colors bg-gray-50 dark:bg-gray-800 p-2 rounded-full border border-gray-200 dark:border-gray-700">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#2A4B7C] dark:hover:text-blue-400 transition-colors bg-gray-50 dark:bg-gray-800 p-2 rounded-full border border-gray-200 dark:border-gray-700">
                        <span class="sr-only">Website</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Tabs -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-tabs :tabs="[
            ['id' => 'courses', 'name' => 'Courses'],
            ['id' => 'about', 'name' => 'About'],
        ]">
            
            <div x-show="activeTab === 'courses'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @php
                        for ($i=1; $i<=4; $i++) {
                            $demoCourse = [
                                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                                'badge' => $i === 1 ? 'Bestseller' : null,
                                'category' => 'Design',
                                'level' => 'All Levels',
                                'title' => 'Complete UI/UX Course - Edition ' . $i,
                                'instructor' => 'Jane Doe',
                                'rating' => '4.9',
                                'reviews' => '5k+',
                                'duration' => '15h',
                                'lectures' => '120',
                                'price' => '89.99',
                                'url'   => '/courses/1'
                            ];
                            echo \Illuminate\Support\Facades\Blade::render('<x-course-card :course="$course" />', ['course' => $demoCourse]);
                        }
                    @endphp
                </div>
            </div>
            
            <div x-show="activeTab === 'about'" style="display: none;" class="max-w-4xl" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="prose prose-blue max-w-none dark:prose-invert">
                    <p class="text-lg text-gray-700 dark:text-gray-300 font-medium">Hello! I'm Jane, a passionate web developer and designer with over 10 years of experience in creating beautiful digital products.</p>
                    <p class="text-gray-600 dark:text-gray-400">I have worked with companies ranging from small startups to Fortune 500 enterprises, helping them build scalable front-end architectures and design systems.</p>
                    <h3 class="text-gray-900 dark:text-white font-extrabold text-2xl mt-8 mb-4">Teaching Philosophy</h3>
                    <p class="text-gray-600 dark:text-gray-400">My courses focus on practical, real-world skills. We don't just learn theory; we build real projects from start to finish, ensuring you are job-ready by the time you complete the course.</p>
                </div>
            </div>
            
        </x-tabs>
    </div>
</x-layouts.public>
