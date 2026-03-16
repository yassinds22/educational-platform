<x-layouts.public>
    <div class="min-h-[calc(100vh-200px)] flex flex-col justify-center py-12 sm:px-6 lg:px-8 bg-gray-50 dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800">
        <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
            <div class="mx-auto h-12 w-12 bg-blue-100 dark:bg-blue-900/30 text-[#2A4B7C] dark:text-blue-400 rounded-full flex items-center justify-center mb-4">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                هل نسيت كلمة المرور؟
            </h2>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 leading-relaxed max-w-xs mx-auto">
                لا تقلق، سنرسل لك تعليمات إعادة التعيين إلى بريدك الإلكتروني.
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white dark:bg-gray-800 py-8 px-4 shadow-xl border border-gray-100 dark:border-gray-700 sm:rounded-2xl sm:px-10">
                <form class="space-y-6 text-right" action="#" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            البريد الإلكتروني
                        </label>
                        <div class="mt-1">
                            <x-input id="email" name="email" type="email" autocomplete="email" required placeholder="example@domain.com" class="text-right" />
                        </div>
                    </div>

                    <div>
                        <x-button type="submit" variant="primary" class="w-full flex justify-center py-3 text-base shadow-md font-bold hover:-translate-y-0.5 transition-all">
                            إرسال رابط إعادة التعيين
                        </x-button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <a href="/login" class="inline-flex items-center text-sm font-bold text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors">
                        <svg class="h-4 w-4 ml-2 transform rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        العودة لتسجيل الدخول
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.public>
