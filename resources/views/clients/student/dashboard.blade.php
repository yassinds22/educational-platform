<x-layouts.app>
    <div class="space-y-8">
        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-[#2A4B7C] to-blue-600 rounded-2xl p-8 text-white shadow-lg relative overflow-hidden">
            <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <h1 class="text-3xl font-extrabold mb-2">Welcome back, Yassin! 👋</h1>
                    <p class="text-blue-100/90 text-lg">You've completed 75% of your weekly learning goal. Keep it up!</p>
                </div>
                <div class="flex items-center space-x-6">
                    <div class="text-center">
                        <div class="text-3xl font-black">12</div>
                        <div class="text-xs font-bold uppercase tracking-widest text-blue-200">Day Streak</div>
                    </div>
                    <div class="w-px h-12 bg-white/20"></div>
                    <div class="text-center">
                        <div class="text-3xl font-black">450</div>
                        <div class="text-xs font-bold uppercase tracking-widest text-blue-200">Points</div>
                    </div>
                </div>
            </div>
            <!-- Decorative circle -->
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
        </div>

        <!-- Continue Learning Section -->
        <div>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-black text-gray-900 dark:text-white">Continue Learning</h2>
                <a href="#" class="text-[#2A4B7C] dark:text-blue-400 font-bold hover:underline text-sm transition-colors">View all my courses</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Course in progress 1 -->
                <x-card noPadding class="group border-2 border-transparent hover:border-[#2A4B7C] dark:hover:border-blue-400/50">
                    <div class="flex flex-col sm:flex-row h-full">
                        <div class="w-full sm:w-48 shrink-0 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Course thumb">
                            <div class="absolute inset-x-0 bottom-0 py-2 px-3 bg-black/60 backdrop-blur-sm">
                                <span class="text-[10px] font-black uppercase text-white tracking-widest">Development</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-gray-900 dark:text-white mb-2 line-clamp-1 group-hover:text-[#2A4B7C] dark:group-hover:text-blue-400 transition-colors">Mastering Laravel 11 for Pros</h3>
                            <p class="text-xs text-gray-500 mb-4">Lesson 12 of 45 &middot; Advanced Eloquent</p>
                            
                            <div class="mt-auto">
                                <x-progress-bar percentage="28" height="h-2" color="bg-[#2A4B7C]" showLabel />
                                <div class="mt-4">
                                    <x-button variant="primary" size="sm" class="w-full rounded-xl">Resume Lesson</x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-card>

                <!-- Course in progress 2 -->
                <x-card noPadding class="group border-2 border-transparent hover:border-[#2A4B7C] dark:hover:border-blue-400/50">
                    <div class="flex flex-col sm:flex-row h-full">
                        <div class="w-full sm:w-48 shrink-0 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Course thumb">
                            <div class="absolute inset-x-0 bottom-0 py-2 px-3 bg-black/60 backdrop-blur-sm">
                                <span class="text-[10px] font-black uppercase text-white tracking-widest">IT & Security</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-gray-900 dark:text-white mb-2 line-clamp-1 group-hover:text-[#2A4B7C] dark:group-hover:text-blue-400 transition-colors">Cybersecurity Essentials 2026</h3>
                            <p class="text-xs text-gray-500 mb-4">Lesson 42 of 60 &middot; Network Defense</p>
                            
                            <div class="mt-auto">
                                <x-progress-bar percentage="70" height="h-2" color="bg-[#10B981]" showLabel />
                                <div class="mt-4">
                                    <x-button variant="primary" size="sm" class="w-full rounded-xl">Resume Lesson</x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>

        <!-- Dashboard Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Achievements -->
            <div class="lg:col-span-2">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-black text-gray-900 dark:text-white">Your Achievements</h2>
                    <a href="#" class="text-gray-500 hover:text-gray-900 text-sm font-medium transition-colors">View all</a>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    @php
                        $badges = [
                            ['icon' => '🔥', 'name' => 'Fast Learner'],
                            ['icon' => '🏆', 'name' => 'Course Pro'],
                            ['icon' => '⚡', 'name' => 'Early Bird'],
                            ['icon' => '💎', 'name' => 'Elite Member'],
                        ];
                    @endphp
                    @foreach($badges as $badge)
                        <x-card class="text-center hover:scale-105 transition-transform duration-300">
                            <div class="text-4xl mb-3">{{ $badge['icon'] }}</div>
                            <h4 class="text-xs font-bold text-gray-800 dark:text-gray-200">{{ $badge['name'] }}</h4>
                        </x-card>
                    @endforeach
                </div>
            </div>

            <!-- Upcoming / Deadlines -->
            <div>
                <h2 class="text-2xl font-black text-gray-900 dark:text-white mb-6">Upcoming Sessions</h2>
                <div class="space-y-4">
                    <x-card class="border-l-4 border-accent">
                        <div class="flex items-center space-x-4">
                            <div class="h-10 w-10 bg-red-100 dark:bg-red-900/30 text-accent rounded-xl flex items-center justify-center font-bold text-sm shrink-0">
                                MAR<br>18
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 dark:text-white">Live Q&A: React Design Patterns</h4>
                                <p class="text-xs text-gray-500">Wednesday, 7:00 PM</p>
                            </div>
                        </div>
                    </x-card>
                    <x-card class="border-l-4 border-success">
                        <div class="flex items-center space-x-4">
                            <div class="h-10 w-10 bg-green-100 dark:bg-green-900/30 text-success rounded-xl flex items-center justify-center font-bold text-sm shrink-0">
                                MAR<br>20
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 dark:text-white">Advanced CSS Workshop</h4>
                                <p class="text-xs text-gray-500">Friday, 5:00 PM</p>
                            </div>
                        </div>
                    </x-card>
                </div>
            </div>
        </div>

        <!-- Recommended For You -->
        <div>
            <h2 class="text-2xl font-black text-gray-900 dark:text-white mb-6">Recommended For You</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                 @php
                    $demoCourse = [
                        'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'badge' => 'Premium',
                        'category' => 'AI & ML',
                        'level' => 'Intermediate',
                        'title' => 'Deep Learning with PyTorch',
                        'instructor' => 'Dr. Anna Smith',
                        'rating' => '4.8',
                        'reviews' => '1.2k',
                        'duration' => '20h',
                        'lectures' => '150',
                        'price' => '129.99'
                    ];
                @endphp
                <x-course-card :course="$demoCourse" />
                <x-course-card :course="array_merge($demoCourse, ['title' => 'Generative AI for Designers', 'category' => 'Design', 'badge' => 'Hot'])" />
                <x-course-card :course="array_merge($demoCourse, ['title' => 'Modern PHP 8.4 Deep Dive', 'category' => 'Development', 'badge' => null])" />
                <x-course-card :course="array_merge($demoCourse, ['title' => 'Blockchain Fundamentals', 'category' => 'Tech', 'badge' => 'Limited'])" />
            </div>
        </div>
    </div>
</x-layouts.app>
