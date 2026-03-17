<x-layouts.admin>
    <div class="space-y-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold font-display text-slate-900 dark:text-white">{{ __('إدارة الأقسام') }}</h1>
                <p class="text-slate-500 dark:text-slate-400 mt-1">{{ __('تنظيم الكورسات في أقسام منطقية لسهولة البحث.') }}</p>
            </div>
            <div class="flex items-center gap-3">
                <button class="flex items-center px-4 py-2.5 bg-blue-600 rounded-xl text-sm font-semibold text-white hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/25">
                    <svg class="w-4 h-4 me-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    {{ __('قسم جديد') }}
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left: Categories List -->
            <div class="lg:col-span-2 space-y-4">
                <div class="bg-white dark:bg-gray-900 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                <table class="w-full text-start">
                    <thead>
                        <tr class="bg-slate-50/50 dark:bg-gray-800/50 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-start">{{ __('اسم القسم') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-start">{{ __('القسم الأب') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('الكورسات') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('الحالة') }}</th>
                            <th class="px-6 py-5 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('الإجراءات') }}</th>
                        </tr>
                    </thead>
                            <tbody class="divide-y divide-slate-50 dark:divide-gray-800">
                                <!-- Category 1 -->
                                <tr class="hover:bg-slate-50/30 dark:hover:bg-gray-800/30 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 flex items-center justify-center">
                                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight">{{ __('تطوير الويب') }}</p>
                                                <p class="text-[11px] text-slate-400 font-medium">web-development</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-slate-400 italic">{{ __('بدون') }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="text-sm font-bold text-slate-700 dark:text-slate-200">24</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="px-2 py-1 text-[10px] font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg uppercase tracking-wide">{{ __('نشط') }}</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <button class="p-2 text-slate-400 hover:text-blue-600 rounded-xl transition-all">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            </button>
                                            <button class="p-2 text-slate-400 hover:text-red-600 rounded-xl transition-all">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Category 2 -->
                                <tr class="hover:bg-slate-50/30 dark:hover:bg-gray-800/30 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-xl bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 flex items-center justify-center">
                                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight">{{ __('تصميم واجهات المستخدم') }}</p>
                                                <p class="text-[11px] text-slate-400 font-medium">ui-design</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-slate-600 dark:text-slate-300">{{ __('التصميم') }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="text-sm font-bold text-slate-700 dark:text-slate-200">12</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="px-2 py-1 text-[10px] font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg uppercase tracking-wide">{{ __('نشط') }}</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <button class="p-2 text-slate-400 hover:text-blue-600 rounded-xl transition-all">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            </button>
                                            <button class="p-2 text-slate-400 hover:text-red-600 rounded-xl transition-all">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Right: Add/Edit Category Card -->
            <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl border border-slate-100 dark:border-gray-800 shadow-sm sticky top-8">
                                <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                            </button>
                            <button type="button" class="aspect-square rounded-xl border-2 border-slate-100 dark:border-gray-700 flex items-center justify-center hover:border-blue-500">
                                <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M12 16v1m4-12H8a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2z"/></svg>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="w-full py-4 bg-blue-600 text-white rounded-2xl font-bold shadow-lg shadow-blue-500/30 hover:bg-blue-700 transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        {{ __('Save Category') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
