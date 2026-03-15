@props([
    'loading' => false,
    'course' => null,
])

@if($loading)
<div class="bg-surface dark:bg-gray-800 rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 animate-pulse flex flex-col h-full">
    <!-- Image Skeleton -->
    <div class="w-full aspect-video bg-gray-200 dark:bg-gray-700"></div>
    <div class="p-5 flex flex-col flex-1 space-y-4">
        <!-- Badge Skeleton -->
        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-1/4"></div>
        <!-- Title Skeleton -->
        <div class="space-y-2">
            <div class="h-5 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
            <div class="h-5 bg-gray-200 dark:bg-gray-700 rounded w-1/2"></div>
        </div>
        <!-- Spacer to push content down -->
        <div class="flex-1"></div>
        <!-- Instructor Skeleton -->
        <div class="flex items-center space-x-3 mt-4 pt-4 border-t border-gray-100 dark:border-gray-700/50">
            <div class="h-8 w-8 rounded-full bg-gray-200 dark:bg-gray-700 shrink-0"></div>
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-1/3"></div>
        </div>
        <!-- Meta Skeleton -->
        <div class="flex items-center justify-between">
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-1/4"></div>
            <div class="h-5 bg-gray-200 dark:bg-gray-700 rounded w-1/5"></div>
        </div>
    </div>
</div>
@else
<div class="group bg-surface dark:bg-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 ease-in-out border border-gray-100 dark:border-gray-700 flex flex-col h-full transform hover:-translate-y-1">
    <!-- Course Image Area -->
    <div class="relative w-full aspect-video bg-gray-200 dark:bg-gray-700 overflow-hidden shrink-0">
        <img src="{{ $course['image'] ?? 'https://ui-avatars.com/api/?name=C&background=2A4B7C&color=fff&size=400' }}" alt="{{ $course['title'] ?? 'Course Title' }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        
        <!-- Overlay Badges -->
        @if(isset($course['badge']))
            <div class="absolute top-3 left-3 z-10">
                <x-badge variant="accent" size="sm">{{ $course['badge'] }}</x-badge>
            </div>
        @endif
        
        <!-- Play Button Overlay on Hover -->
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <div class="h-14 w-14 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white border border-white/30 transform scale-75 group-hover:scale-100 transition-all duration-300 shadow-xl">
                <svg class="h-6 w-6 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
            </div>
        </div>
    </div>
    
    <!-- Course Content -->
    <div class="p-5 flex flex-col flex-1">
        <div class="flex items-center space-x-2 mb-2">
            <span class="text-xs font-bold text-[#2A4B7C] dark:text-blue-400 uppercase tracking-wider">{{ $course['category'] ?? 'Category' }}</span>
            <span class="text-gray-300 dark:text-gray-600">&bull;</span>
            <span class="text-xs text-gray-500 dark:text-gray-400">{{ $course['level'] ?? 'All Levels' }}</span>
        </div>
        
        <h3 class="text-lg font-bold text-gray-900 dark:text-white leading-snug mb-2 line-clamp-2 group-hover:text-[#2A4B7C] dark:group-hover:text-blue-400 transition-colors">
            <a href="{{ $course['url'] ?? '#' }}" class="focus:outline-none">
                <span class="absolute inset-0" aria-hidden="true"></span>
                {{ $course['title'] ?? 'Complete Modern Course Title Goes Here' }}
            </a>
        </h3>
        
        <div class="mt-auto pt-4 border-t border-gray-100 dark:border-gray-700/50">
            <!-- Instructor Info -->
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center space-x-2">
                    <x-avatar name="{{ $course['instructor'] ?? 'Instructor Name' }}" size="sm"></x-avatar>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300 truncate max-w-[120px]">{{ $course['instructor'] ?? 'Instructor Name' }}</span>
                </div>
                <div class="flex items-center space-x-1 text-sm font-medium text-gray-900 dark:text-white">
                    <span class="text-yellow-400"><svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg></span>
                    <span class="font-bold">{{ $course['rating'] ?? '4.8' }} <span class="text-gray-400 dark:text-gray-500 font-normal">({{ $course['reviews'] ?? '1k+' }})</span></span>
                </div>
            </div>
            
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3 text-sm text-gray-500 dark:text-gray-400">
                    <span class="flex items-center"><svg class="h-4 w-4 mr-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> {{ $course['duration'] ?? '10h 30m' }}</span>
                </div>
                <div class="text-lg font-extrabold text-[#2A4B7C] dark:text-blue-400">
                    {{ isset($course['price']) && $course['price'] != 0 ? '$' . $course['price'] : 'Free' }}
                </div>
            </div>
        </div>
    </div>
</div>
@endif
