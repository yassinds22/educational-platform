<x-layouts.public>
    <!-- Page Header -->
    <div class="bg-gray-50 dark:bg-gray-800/50 border-b border-gray-100 dark:border-gray-800 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-right">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-2">جميع الدورات</h1>
            <p class="text-gray-500 dark:text-gray-400">وسع آفاق معرفتك من خلال مكتبة الدورات الشاملة لدينا.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filter Sidebar (Desktop) -->
            <div class="hidden lg:block w-64 shrink-0 space-y-8 text-right">
                <div>
                    <h3 class="font-bold text-gray-900 dark:text-white mb-4">التصنيفات</h3>
                    <div class="space-y-3">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 focus:ring-opacity-50 transition-colors">
                            <span class="mr-2 text-sm text-gray-700 dark:text-gray-300">تطوير البرمجيات (145)</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 focus:ring-opacity-50 transition-colors">
                            <span class="mr-2 text-sm text-gray-700 dark:text-gray-300">الأعمال (85)</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 focus:ring-opacity-50 transition-colors">
                            <span class="mr-2 text-sm text-gray-700 dark:text-gray-300">تقنية المعلومات (64)</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 focus:ring-opacity-50 transition-colors">
                            <span class="mr-2 text-sm text-gray-700 dark:text-gray-300">التصميم (52)</span>
                        </label>
                    </div>
                </div>

                <div class="border-t border-gray-200 dark:border-gray-700 pt-8">
                    <h3 class="font-bold text-gray-900 dark:text-white mb-4">المستوى</h3>
                    <div class="space-y-3">
                        <label class="flex items-center cursor-pointer"><input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 transition-colors"><span class="mr-2 text-sm text-gray-700 dark:text-gray-300">مبتدئ (8)</span></label>
                        <label class="flex items-center cursor-pointer"><input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 transition-colors"><span class="mr-2 text-sm text-gray-700 dark:text-gray-300">متوسط (4)</span></label>
                        <label class="flex items-center cursor-pointer"><input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 transition-colors"><span class="mr-2 text-sm text-gray-700 dark:text-gray-300">متقدم (2)</span></label>
                    </div>
                </div>

                <div class="border-t border-gray-200 dark:border-gray-700 pt-8">
                    <h3 class="font-bold text-gray-900 dark:text-white mb-4">السعر</h3>
                    <div class="space-y-3">
                        <label class="flex items-center cursor-pointer"><input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 transition-colors"><span class="mr-2 text-sm text-gray-700 dark:text-gray-300">مجاني (20)</span></label>
                        <label class="flex items-center cursor-pointer"><input type="checkbox" class="rounded border-gray-300 text-[#2A4B7C] shadow-sm focus:border-[#2A4B7C] focus:ring focus:ring-[#2A4B7C]/50 transition-colors" checked><span class="mr-2 text-sm text-gray-700 dark:text-gray-300">مدفوع (125)</span></label>
                    </div>
                </div>
            </div>

            <!-- Course Listing -->
            <div class="flex-1">
                <!-- Toolbar -->
                <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4 bg-surface dark:bg-gray-800 p-4 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center space-x-2 space-x-reverse w-full sm:w-auto">
                        <button class="lg:hidden flex items-center text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-gray-700 rounded-lg px-3 py-2 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
                            تصفية
                        </button>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">عرض 1-9 من أصل 145 نتيجة</span>
                    </div>
                    <div class="flex items-center space-x-2 space-x-reverse w-full sm:w-auto">
                        <label for="sort" class="text-sm font-medium text-gray-600 dark:text-gray-300 whitespace-nowrap">ترتيب حسب:</label>
                        <select id="sort" class="block w-full sm:w-48 pr-3 pl-10 py-2 text-base border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-[#2A4B7C] focus:border-[#2A4B7C] sm:text-sm rounded-lg shadow-sm cursor-pointer transition-colors text-right">
                            <option>الأكثر شعبية</option>
                            <option>الأعلى تقييماً</option>
                            <option>الأحدث</option>
                            <option>السعر: من الأقل إلى الأعلى</option>
                        </select>
                    </div>
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    @php
                        for ($i=1; $i<=9; $i++) {
                            $demoCourse = [
                                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                                'badge' => $i === 1 ? 'الأكثر مبيعاً' : ($i === 3 ? 'جديد' : null),
                                'category' => 'تطوير البرمجيات',
                                'level' => 'مبتدئ',
                                'title' => 'اتقان Laravel و Tailwind CSS 4 - الإصدار ' . $i,
                                'instructor' => 'أحمد محمد',
                                'rating' => '4.' . (9 - ($i % 5)),
                                'reviews' => rand(100, 2500) . ($i%2==0 ? 'ألف' : ''),
                                'duration' => rand(5, 20) . ' ساعة ' . rand(0, 59) . ' دقيقة',
                                'lectures' => rand(20, 100),
                                'price' => rand(49, 149) . '.99',
                                'url' => '/courses/1'
                            ];
                            echo \Illuminate\Support\Facades\Blade::render('<x-course-card :course="$course" />', ['course' => $demoCourse]);
                        }
                    @endphp
                </div>
                
                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm space-x-px space-x-reverse" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="sr-only">السابق</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-[#2A4B7C] bg-blue-50 dark:bg-blue-900/30 text-sm font-bold text-[#2A4B7C] dark:text-blue-400 z-10 transition-colors">2</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">3</a>
                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-400">...</span>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">10</a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="sr-only">التالي</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</x-layouts.public>
