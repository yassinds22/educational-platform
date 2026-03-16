<x-layouts.player>
    <!-- The layout provides the Video and Sidebar, the slot is for content below video -->
    <x-tabs :tabs="[
        ['id' => 'overview', 'name' => 'Overview'],
        ['id' => 'notes', 'name' => 'Notes'],
        ['id' => 'qa', 'name' => 'Q&A'],
        ['id' => 'resources', 'name' => 'Resources'],
    ]">
        
        <!-- Overview Tab -->
        <div x-show="activeTab === 'overview'" class="space-y-6" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
            <div>
                <h2 class="text-2xl font-bold mb-4">About this lesson</h2>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    In this lesson, we dive deep into the new features of Tailwind CSS 4, including the native CSS-first configuration, the new `@theme` block, and how it integrates with modern build tools like Vite.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-gray-100 dark:border-gray-700">
                <div class="flex items-start space-x-3">
                    <div class="h-10 w-10 bg-blue-100 dark:bg-blue-900/30 text-[#2A4B7C] dark:text-blue-400 rounded-xl flex items-center justify-center shrink-0">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 dark:text-white text-sm">Duration</h4>
                        <p class="text-xs text-gray-500">28 minutes 50 seconds</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="h-10 w-10 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-xl flex items-center justify-center shrink-0">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 dark:text-white text-sm">Certificate</h4>
                        <p class="text-xs text-gray-500">Counts towards Professional Certificate</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Notes Tab -->
        <div x-show="activeTab === 'notes'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
            <div class="mb-6">
                <textarea class="w-full rounded-2xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-4 min-h-[150px] focus:ring-[#2A4B7C] focus:border-[#2A4B7C] transition-all dark:text-white" placeholder="Take a note at 12:34..."></textarea>
                <div class="mt-2 flex justify-end">
                    <x-button variant="primary" size="sm">Save Note</x-button>
                </div>
            </div>
            
            <div class="space-y-4 pt-6 border-t border-gray-100 dark:border-gray-700">
                <div class="group p-4 bg-gray-50 dark:bg-gray-800/50 rounded-xl border border-transparent hover:border-blue-100 dark:hover:border-blue-900/40 transition-all">
                    <div class="flex justify-between items-start mb-2">
                        <x-badge variant="primary" size="sm">10:15</x-badge>
                        <button class="text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                    </div>
                    <p class="text-sm text-gray-700 dark:text-gray-300">Remember to check the new source mapping rules in v4.</p>
                </div>
            </div>
        </div>

        <!-- Q&A Tab -->
        <div x-show="activeTab === 'qa'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <div class="flex-1">
                    <x-input type="text" placeholder="Search all course questions..." />
                </div>
                <x-button variant="outline" class="shrink-0">Ask a Question</x-button>
            </div>
            
            <div class="space-y-6">
                <!-- Question 1 -->
                <div class="flex space-x-4">
                    <x-avatar name="Alex Smith" size="sm"></x-avatar>
                    <div class="flex-1">
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Does Tailwind 4 support legacy plugins?</h4>
                        <p class="text-xs text-gray-500 mt-1">Asked by Alex &middot; 5 hours ago</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-3 line-clamp-2">I am trying to use a plugin from v3 and it seems the configuration syntax has changed significantly...</p>
                        <div class="flex items-center space-x-4 mt-3">
                            <span class="text-xs font-bold text-[#2A4B7C] dark:text-blue-400 flex items-center"><svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg> 3 Replies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resources Tab -->
        <div x-show="activeTab === 'resources'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="#" class="flex items-center p-4 border border-gray-200 dark:border-gray-700 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-all group">
                    <div class="h-12 w-12 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center shrink-0 mr-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Cheatsheet_v4.pdf</h4>
                        <p class="text-xs text-gray-500">Document &middot; 2.4 MB</p>
                    </div>
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1h16v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </a>
            </div>
        </div>
    </x-tabs>
</x-layouts.player>
