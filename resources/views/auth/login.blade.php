<x-layouts.public>
    <div class="min-h-[calc(100vh-200px)] flex flex-col justify-center py-12 sm:px-6 lg:px-8 bg-gray-50 dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800">
        <div class="sm:mx-auto sm:w-full sm:max-w-md text-right">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 dark:text-white">
                تسجيل الدخول إلى حسابك
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                أو
                <a href="/register" class="font-medium text-[#2A4B7C] dark:text-blue-400 hover:text-[#1e3458] dark:hover:text-blue-300 transition-colors">
                    إنشاء حساب جديد
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white dark:bg-gray-800 py-8 px-4 shadow-xl border border-gray-100 dark:border-gray-700 sm:rounded-2xl sm:px-10 transition-all">
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
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            كلمة المرور
                        </label>
                        <div class="mt-1">
                            <x-input id="password" name="password" type="password" autocomplete="current-password" required placeholder="••••••••" class="text-right" />
                        </div>
                    </div>

                    <div class="flex items-center justify-between flex-row-reverse">
                        <div class="flex items-center flex-row-reverse">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-[#2A4B7C] focus:ring-[#2A4B7C] border-gray-300 rounded cursor-pointer transition-colors">
                            <label for="remember-me" class="mr-2 block text-sm text-gray-900 dark:text-gray-300 cursor-pointer">
                                تذكرني
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-bold text-[#2A4B7C] dark:text-blue-400 hover:text-[#1e3458] dark:hover:text-blue-300 transition-colors">
                                هل نسيت كلمة المرور؟
                            </a>
                        </div>
                    </div>

                    <div>
                        <x-button type="submit" variant="primary" class="w-full flex justify-center py-3 text-base shadow-md font-bold hover:-translate-y-0.5 transition-all">
                            تسجيل الدخول
                        </x-button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                                أو المتابعة باستخدام
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <x-button variant="outline" class="w-full inline-flex justify-center border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="sr-only">تسجيل الدخول باستخدام فيسبوك</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                        </x-button>
                        <x-button variant="outline" class="w-full inline-flex justify-center border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="sr-only">تسجيل الدخول باستخدام جوجل</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"/></svg>
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.public>
