<!-- Modern Footer -->
<footer class="bg-surface dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8 text-right">
            <div class="col-span-1 md:col-span-1">
                <a href="/" class="text-2xl font-bold text-[#2A4B7C] dark:text-blue-400 block mb-4">
                    مركز<span class="text-gray-800 dark:text-white">التعلم</span>
                </a>
                <p class="text-gray-500 dark:text-gray-400 text-sm">تمكين المتعلمين في جميع أنحاء العالم من خلال أفضل الموارد التعليمية عبر الإنترنت.</p>
            </div>
            <div>
                <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 uppercase tracking-wider mb-4">المنصة</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('courses.index') }}" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">تصفح الدورات</a></li>
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">مسارات التعلم</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 uppercase tracking-wider mb-4">المجتمع</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">الطلاب</a></li>
                    <li><a href="{{ route('instructor') }}" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">المدربون</a></li>
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">المدونة</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 uppercase tracking-wider mb-4">الشركة</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">من نحن</a></li>
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">الوظائف</a></li>
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-[#2A4B7C] transition-colors text-sm">اتصل بنا</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-col md:flex-row justify-between items-center text-center md:text-right">
            <p class="text-sm text-gray-500 dark:text-gray-400">&copy; {{ date('Y') }} مركز التعلم جميع الحقوق محفوظة.</p>
            <div class="flex space-x-6 space-x-reverse mt-4 md:mt-0">
                <a href="#" class="text-gray-400 hover:text-gray-500 transition-colors">
                    <span class="sr-only">فيسبوك</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500 transition-colors">
                    <span class="sr-only">تويتر</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
