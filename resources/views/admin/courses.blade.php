<x-layouts.admin>
    <div class="space-y-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold font-display text-slate-900 dark:text-white">{{ __('كتالوج الكورسات') }}</h1>
                <p class="text-slate-500 dark:text-slate-400 mt-1">{{ __('إدارة المحتوى التعليمي، الأسعار، والمدرسين.') }}</p>
            </div>
            <div class="flex items-center gap-3">
                <button class="flex items-center px-4 py-2.5 bg-blue-600 rounded-xl text-sm font-semibold text-white hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/25">
                    <svg class="w-4 h-4 me-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    {{ __('إنشاء كورس جديد') }}
                </button>
            </div>
        </div>

        <!-- Filters & Search -->
        <div class="bg-white dark:bg-gray-900 p-6 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm flex flex-col lg:flex-row lg:items-center gap-4">
            <div class="relative flex-1">
                <span class="absolute inset-y-0 start-0 ps-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </span>
                <input type="text" placeholder="{{ __('ابحث عن الكورسات بالعنوان أو المدرب...') }}" class="w-full ps-10 py-2.5 bg-slate-50 dark:bg-gray-800 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 transition-all">
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <select class="px-4 py-2.5 bg-slate-50 dark:bg-gray-800 border-none rounded-2xl text-sm font-medium text-slate-600 focus:ring-2 focus:ring-blue-500/20 outline-none">
                    <option>{{ __('كل الأقسام') }}</option>
                    <option value="programming">{{ __('برمجة') }}</option>
                    <option value="design">{{ __('تصميم') }}</option>
                    <option value="business">{{ __('تسويق') }}</option>
                </select>
                <select class="px-4 py-2.5 bg-slate-50 dark:bg-gray-800 border-none rounded-2xl text-sm font-medium text-slate-600 focus:ring-2 focus:ring-blue-500/20 outline-none">
                    <option>{{ __('كل الحالات') }}</option>
                    <option value="published">{{ __('منشور') }}</option>
                    <option value="draft">{{ __('مسودة') }}</option>
                    <option value="archived">{{ __('مؤرشف') }}</option>
                </select>
                <div class="flex bg-slate-50 dark:bg-gray-800 rounded-2xl p-1">
                    <button class="p-1.5 bg-white dark:bg-gray-700 shadow-sm rounded-xl text-blue-600">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                    </button>
                    <button class="p-1.5 text-slate-400 hover:text-slate-600 transition-colors rounded-xl">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Courses Grid/Table -->
        <div class="bg-white dark:bg-gray-900 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm overflow-hidden text-center sm:text-start">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-slate-50/50 dark:bg-gray-800/50">
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-start">{{ __('معلومات الكورس') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-start">{{ __('المدرب') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('القسم') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('التسجيلات') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('الحالة') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('السعر') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('الإجراءات') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50 dark:divide-gray-800">
                        <!-- Course 1 -->
                        <tr class="hover:bg-slate-50/30 dark:hover:bg-gray-800/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-16 h-10 rounded-lg bg-slate-100 dark:bg-gray-800 flex-shrink-0 overflow-hidden relative group-hover:shadow-md transition-shadow">
                                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-indigo-600 opacity-80"></div>
                                        <svg class="w-6 h-6 text-white absolute inset-0 m-auto opacity-20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight truncate">{{ __('دورة احتراف تطوير الويب الشاملة') }}</p>
                                        <p class="text-[11px] text-slate-400 mt-0.5 truncate italic">{{ __('02 أكتوبر 2023') }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 text-[10px] flex items-center justify-center font-bold text-blue-700">SK</div>
                                <span class="px-2.5 py-1 text-[10px] font-bold text-white bg-emerald-500 rounded-lg shadow-sm shadow-emerald-500/20">{{ __('Published') }}</span>
                            </td>
                            <td class="px-6 py-4 text-center font-bold text-slate-900 dark:text-white text-sm">
                                $49.00
                            </td>
                                <div x-data="{ open: false }" class="relative inline-block text-start">
                                    <button @click="open = !open" class="p-2 text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/></svg>
                                    </button>
                                    <div x-show="open" @click.away="open = false" 
                                         x-cloak
                                         x-transition
                                         class="absolute end-0 mt-2 w-40 origin-top-right bg-white dark:bg-gray-800 rounded-xl shadow-xl border border-slate-100 dark:border-gray-700 py-1 z-10 focus:outline-none">
                                        <a href="#" class="block px-4 py-2 text-xs font-bold text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-gray-700">{{ __('Edit Details') }}</a>
                                        <a href="#" class="block px-4 py-2 text-xs font-bold text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-gray-700">{{ __('Manage Lessons') }}</a>
                                        <div class="h-[1px] bg-slate-50 dark:bg-gray-700 my-1"></div>
                                        <a href="#" class="block px-4 py-2 text-xs font-bold text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10">{{ __('Archive') }}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Course 2 (Draft) -->
                        <tr class="hover:bg-slate-50/30 dark:hover:bg-gray-800/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-16 h-10 rounded-lg bg-slate-100 dark:bg-gray-800 flex-shrink-0 overflow-hidden relative group-hover:shadow-md transition-shadow">
                                        <div class="absolute inset-0 bg-gradient-to-tr from-amber-500 to-orange-600 opacity-60"></div>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight truncate">Advanced Motion Design</p>
                                        <p class="text-[11px] text-slate-400 mt-0.5 truncate italic">Sep 28, 2023</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 rounded-full bg-slate-100 text-[10px] flex items-center justify-center font-bold text-slate-700">JS</div>
                                    <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">John Smith</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="px-2 py-1 text-[10px] font-bold text-amber-600 bg-amber-50 dark:bg-amber-900/20 rounded-lg">{{ __('Design') }}</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-50 dark:bg-gray-800 rounded-full">
                                    <svg class="w-3 h-3 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                                    <span class="text-xs font-bold text-slate-400">0</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="px-2.5 py-1 text-[10px] font-bold text-slate-500 bg-slate-100 dark:bg-gray-800 rounded-lg">{{ __('Draft') }}</span>
                            </td>
                            <td class="px-6 py-4 text-center font-bold text-slate-900 dark:text-white text-sm">
                                $29.00
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 rounded-xl transition-all">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination Placeholder -->
            <div class="px-6 py-5 bg-slate-50/50 dark:bg-gray-800/30 border-t border-slate-50 dark:border-gray-800 flex items-center justify-between">
                <p class="text-xs font-medium text-slate-500">{{ __('Showing 1 to 2 of 86 results') }}</p>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-white dark:bg-gray-800 border border-slate-200 dark:border-gray-700 rounded-xl text-xs font-bold text-slate-700 dark:text-slate-200 hover:bg-slate-50 transition-all">Previous</button>
                    <button class="px-4 py-2 bg-white dark:bg-gray-800 border border-slate-200 dark:border-gray-700 rounded-xl text-xs font-bold text-slate-700 dark:text-slate-200 hover:bg-slate-50 transition-all">Next</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
