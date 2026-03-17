<x-layouts.admin>
    <div class="space-y-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold font-display text-slate-900 dark:text-white">{{ __('إدارة المستخدمين') }}</h1>
                <p class="text-slate-500 dark:text-slate-400 mt-1">{{ __('إدارة الطلاب، المدربين، والمسؤولين في منصتك.') }}</p>
            </div>
            <div class="flex items-center gap-3">
                <button class="flex items-center px-4 py-2.5 bg-blue-600 rounded-xl text-sm font-semibold text-white hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/25">
                    <svg class="w-4 h-4 me-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                    {{ __('إضافة مستخدم جديد') }}
                </button>
            </div>
        </div>

        <!-- Filters & Search -->
        <div class="bg-white dark:bg-gray-900 p-6 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm flex flex-col md:flex-row md:items-center gap-4">
            <div class="relative flex-1">
                <span class="absolute inset-y-0 start-0 ps-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </span>
                <input type="text" placeholder="{{ __('ابحث عن المستخدمين بالاسم أو البريد الإلكتروني...') }}" class="w-full ps-10 py-2.5 bg-slate-50 dark:bg-gray-800 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500/20 transition-all">
            </div>
            <div class="flex items-center gap-3">
                <select class="px-4 py-2.5 bg-slate-50 dark:bg-gray-800 border-none rounded-2xl text-sm font-medium text-slate-600 focus:ring-2 focus:ring-blue-500/20 outline-none min-w-[140px]">
                    <option value="">{{ __('كل الأدوار') }}</option>
                    <option value="student">{{ __('طالب') }}</option>
                    <option value="instructor">{{ __('مدرب') }}</option>
                    <option value="admin">{{ __('مسؤول') }}</option>
                </select>
                <select class="px-4 py-2.5 bg-slate-50 dark:bg-gray-800 border-none rounded-2xl text-sm font-medium text-slate-600 focus:ring-2 focus:ring-blue-500/20 outline-none min-w-[140px]">
                    <option value="">{{ __('كل الحالات') }}</option>
                    <option value="active">{{ __('نشط') }}</option>
                    <option value="banned">{{ __('محظور') }}</option>
                </select>
                <button class="p-2.5 bg-slate-50 dark:bg-gray-800 text-slate-400 hover:text-blue-600 rounded-2xl transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
                </button>
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white dark:bg-gray-900 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-start">
                    <thead>
                        <tr class="bg-slate-50/50 dark:bg-gray-800/50">
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest">{{ __('تفاصيل المستخدم') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest">{{ __('الدور') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest">{{ __('التسجيلات') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest">{{ __('تاريخ الانضمام') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest">{{ __('الحالة') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('الإجراءات') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50 dark:divide-gray-800">
                        <!-- User Row 1 -->
                        <tr class="hover:bg-slate-50/30 dark:hover:bg-gray-800/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">
                                        YA
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight">{{ __('ياسين العميري') }}</p>
                                        <p class="text-[11px] text-slate-400 font-medium">yassin@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1.5 text-[10px] font-bold text-blue-600 bg-blue-50 dark:bg-blue-900/20 rounded-xl uppercase tracking-wider">{{ __('طالب') }}</span>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">
                                {{ __('4 كورسات') }}
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">
                                {{ __('15 أكتوبر 2023') }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    <span class="text-xs font-semibold text-emerald-600 underline decoration-2 decoration-emerald-100 underline-offset-4">{{ __('نشط') }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-xl transition-all">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-xl transition-all">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- User Row 2 (Instructor) -->
                        <tr class="hover:bg-slate-50/30 dark:hover:bg-gray-800/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-amber-100 to-orange-100 dark:from-amber-900/40 dark:to-orange-900/40 text-amber-700 dark:text-amber-300 flex items-center justify-center font-bold text-sm shadow-sm">
                                        SK
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight">Sarah Khan</p>
                                        <p class="text-[11px] text-slate-400 font-medium">sarah.k@platform.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1.5 text-[10px] font-bold text-amber-600 bg-amber-50 dark:bg-amber-900/20 rounded-xl uppercase tracking-wider">Instructor</span>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">
                                12 Courses
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">
                                May 22, 2023
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    <span class="text-xs font-semibold text-emerald-600">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-xl transition-all">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-xl transition-all">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- User Row 3 (Banned) -->
                        <tr class="hover:bg-slate-50/30 dark:hover:bg-gray-800/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-11 h-11 rounded-2xl bg-slate-100 dark:bg-gray-800 text-slate-500 flex items-center justify-center font-bold text-sm shadow-sm opacity-60">
                                        JS
                                    </div>
                                    <div class="opacity-60">
                                        <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight">John Smith</p>
                                        <p class="text-[11px] text-slate-400 font-medium">js@spammer.org</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1.5 text-[10px] font-bold text-slate-500 bg-slate-100 dark:bg-gray-800 rounded-xl uppercase tracking-wider">Student</span>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300 opacity-60">
                                1 Courses
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400 opacity-60">
                                Jan 05, 2023
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-red-500"></span>
                                    <span class="text-xs font-semibold text-red-600">Banned</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-xl transition-all">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-2 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/20 rounded-xl transition-all" title="Unban">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 21a11.955 11.955 0 01-9.618-7.016m18.236 0a11.955 11.955 0 01-9.618 7.016m18.236 0A11.955 11.955 0 0112 3a11.955 11.955 0 019.618 7.016z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination Placeholder -->
            <div class="px-6 py-5 bg-slate-50/50 dark:bg-gray-800/30 border-t border-slate-50 dark:border-gray-800 flex items-center justify-between">
                <p class="text-xs font-medium text-slate-500">{{ __('Showing 1 to 10 of 1,284 results') }}</p>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-white dark:bg-gray-800 border border-slate-200 dark:border-gray-700 rounded-xl text-xs font-bold text-slate-400 cursor-not-allowed">Previous</button>
                    <button class="px-4 py-2 bg-white dark:bg-gray-800 border border-slate-200 dark:border-gray-700 rounded-xl text-xs font-bold text-slate-700 dark:text-slate-200 hover:bg-slate-50">Next</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
