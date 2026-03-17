<x-layouts.admin>
    <div class="space-y-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white font-display tracking-tight">{{ __('نظرة عامة على النظام') }}</h1>
                <p class="text-slate-500 dark:text-slate-400 mt-1 font-medium">{{ __('مرحباً بك مجدداً، إليك ما يحدث اليوم.') }}</p>
            </div>
            <div class="flex items-center gap-3">
                <button class="flex items-center px-4 py-2.5 bg-white dark:bg-gray-800 border border-slate-200 dark:border-gray-700 rounded-xl text-sm font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-50 transition-all shadow-sm">
                    <svg class="w-4 h-4 me-2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    {{ __('تصدير البيانات') }}
                </button>
                <button class="flex items-center px-4 py-2.5 bg-blue-600 rounded-xl text-sm font-semibold text-white hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/25">
                    <svg class="w-4 h-4 me-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    {{ __('إضافة كورس جديد') }}
                </button>
            </div>
        </div>

        <!-- KPI Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Stat Card 1 -->
            <div class="bg-white dark:bg-gray-900 p-6 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center text-blue-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 px-2.5 py-1 rounded-lg">+12.5%</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">{{ __('إجمالي الطلاب') }}</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">12,450</h3>
            </div>

            <!-- Stat Card 2 -->
            <div class="bg-white dark:bg-gray-900 p-6 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-indigo-50 dark:bg-indigo-900/20 rounded-2xl flex items-center justify-center text-indigo-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <span class="text-[10px] font-bold text-indigo-600 bg-indigo-50 dark:bg-indigo-900/20 px-2.5 py-1 rounded-lg">84 {{ __('كورس') }}</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">{{ __('الكورسات النشطة') }}</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">156</h3>
            </div>

            <!-- Stat Card 3 -->
            <div class="bg-white dark:bg-gray-900 p-6 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-emerald-50 dark:bg-emerald-900/20 rounded-2xl flex items-center justify-center text-emerald-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 px-2.5 py-1 rounded-lg">+22%</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">{{ __('حجم المبيعات') }}</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">$45,200</h3>
            </div>

            <!-- Stat Card 4 -->
            <div class="bg-white dark:bg-gray-900 p-6 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-amber-50 dark:bg-amber-900/20 rounded-2xl flex items-center justify-center text-amber-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <span class="text-[10px] font-bold text-red-600 bg-red-50 dark:bg-red-900/20 px-2.5 py-1 rounded-lg">12 {{ __('جديد') }}</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">{{ __('أسئلة معلقة') }}</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">48</h3>
            </div>
        </div>

        <!-- Middle Section: Recent Enrollments & Live Sessions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Enrollments -->
            <div class="lg:col-span-2 bg-white dark:bg-gray-900 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm overflow-hidden">
                <div class="p-8 border-b border-slate-50 dark:border-gray-800 flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-bold text-slate-900 dark:text-white font-display">{{ __('أحدث التسجيلات') }}</h2>
                        <p class="text-slate-400 text-sm mt-0.5 tracking-tight">{{ __('مراقبة المبيعات الجديدة للطلاب لحظياً.') }}</p>
                    </div>
                    <a href="#" class="text-xs font-semibold text-blue-600 hover:underline">{{ __('عرض الكل') }}</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-start">
                        <thead>
                            <tr class="bg-slate-50/50 dark:bg-gray-800/50">
                                <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-start">{{ __('الطالب') }}</th>
                                <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-start">{{ __('الكورس') }}</th>
                                <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-start">{{ __('التاريخ') }}</th>
                                <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-start">{{ __('الحالة') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 dark:divide-gray-800">
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-xs text-center leading-none">YA</div>
                                        <div class="text-sm font-semibold text-slate-700 dark:text-slate-200">{{ __('ياسين العميري') }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">{{ __('إتقان تصميم الواجهات') }}</td>
                                <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">{{ __('12 أكتوبر 2023') }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 text-[10px] font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg uppercase tracking-wide">{{ __('مدفوع') }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs text-center leading-none">MA</div>
                                        <div class="text-sm font-semibold text-slate-700 dark:text-slate-200">{{ __('محمد علي') }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">{{ __('لارافيل المتقدمة') }}</td>
                                <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">{{ __('11 أكتوبر 2023') }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 text-[10px] font-bold text-amber-600 bg-amber-50 dark:bg-amber-900/20 rounded-lg uppercase tracking-wide">{{ __('معلق') }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-xs text-center leading-none">SA</div>
                                        <div class="text-sm font-semibold text-slate-700 dark:text-slate-200">{{ __('سارة أحمد') }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">{{ __('دليل Next.js 14') }}</td>
                                <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">{{ __('10 أكتوبر 2023') }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 text-[10px] font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg uppercase tracking-wide">{{ __('مدفوع') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Sessions -->
            <div class="bg-white dark:bg-gray-900 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm p-8">
                <h2 class="text-xl font-bold text-slate-900 dark:text-white font-display mb-6">{{ __('الجلسات القادمة') }}</h2>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-50 dark:bg-blue-900/20 p-2 rounded-xl text-center min-w-[50px]">
                            <p class="text-[10px] font-bold text-blue-400 uppercase tracking-tighter">{{ __('أكتوبر') }}</p>
                            <p class="text-lg font-bold text-blue-700 dark:text-blue-400">14</p>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight">{{ __('أسئلة وأجوبة مع المدرب') }}</p>
                            <p class="text-xs text-slate-500 mt-1 italic">{{ __('04:00 مساءً - 05:00 مساءً') }}</p>
                            <a href="#" class="inline-block mt-2 text-[11px] font-bold text-blue-600 hover:text-blue-700">{{ __('انضم الآن') }} &rarr;</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-slate-50 dark:bg-gray-800 p-2 rounded-xl text-center min-w-[50px]">
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">{{ __('أكتوبر') }}</p>
                            <p class="text-lg font-bold text-slate-700 dark:text-slate-200">16</p>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight">{{ __('ورشة عمل SQL المتقدمة') }}</p>
                            <p class="text-xs text-slate-500 mt-1 italic">{{ __('10:00 صباحاً - 12:00 مساءً') }}</p>
                            <a href="#" class="inline-block mt-2 text-[11px] font-bold text-slate-400 cursor-not-allowed">{{ __('في الانتظار...') }}</a>
                        </div>
                    </div>
                </div>
                <button class="w-full mt-8 py-3 bg-slate-50 dark:bg-gray-800 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold hover:bg-slate-100 transition-colors">
                    {{ __('عرض التقويم') }}
                </button>
            </div>
        </div>
    </div>
</x-layouts.admin>
