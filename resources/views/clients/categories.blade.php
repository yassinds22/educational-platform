<x-layouts.public>
    <div class="bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-right">
            <div class="mb-12">
                <h1 class="text-3xl font-black text-gray-900 dark:text-white mb-4">استكشاف التصنيفات</h1>
                <p class="text-gray-500 dark:text-gray-400">اكتشف شغفك القادم من خلال مجموعتنا الواسعة من المواضيع.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @php
                    $categories = [
                        ['name' => 'تطوير البرمجيات', 'icon' => '💻', 'count' => '1,245', 'color' => 'bg-blue-50 dark:bg-blue-900/20 text-blue-600'],
                        ['name' => 'الأعمال', 'icon' => '📊', 'count' => '842', 'color' => 'bg-green-50 dark:bg-green-900/20 text-green-600'],
                        ['name' => 'التصميم', 'icon' => '🎨', 'count' => '512', 'color' => 'bg-purple-50 dark:bg-purple-900/20 text-purple-600'],
                        ['name' => 'التسويق', 'icon' => '📈', 'count' => '324', 'color' => 'bg-orange-50 dark:bg-orange-900/20 text-orange-600'],
                        ['name' => 'تقنية المعلومات', 'icon' => '☁️', 'count' => '643', 'color' => 'bg-cyan-50 dark:bg-cyan-900/20 text-cyan-600'],
                        ['name' => 'التطوير الشخصي', 'icon' => '🧠', 'count' => '215', 'color' => 'bg-yellow-50 dark:bg-yellow-900/20 text-yellow-600'],
                        ['name' => 'التصوير الفوتوغرافي', 'icon' => '📸', 'count' => '142', 'color' => 'bg-red-50 dark:bg-red-900/20 text-red-600'],
                        ['name' => 'الموسيقى', 'icon' => '🎵', 'count' => '98', 'color' => 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600'],
                    ];
                @endphp

                @foreach($categories as $category)
                    <a href="/courses" class="group bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center">
                        <div class="w-16 h-16 {{ $category['color'] }} rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            {{ $category['icon'] }}
                        </div>
                        <h3 class="font-black text-gray-900 dark:text-white mb-2">{{ $category['name'] }}</h3>
                        <p class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest">{{ $category['count'] }} دورة</p>
                    </a>
                @endforeach
            </div>

            <!-- Learning Paths CTA -->
            <div class="mt-20 bg-[#2A4B7C] rounded-3xl p-12 text-white relative overflow-hidden">
                <div class="relative z-10 max-w-2xl text-right">
                    <h2 class="text-3xl font-black mb-6">غير متأكد من أين تبدأ؟</h2>
                    <p class="text-blue-100 text-lg mb-8">قم بإجراء تقييم المهارات السريع لمدة دقيقتين واحصل على مسار تعليمي مخصص يناسب أهدافك.</p>
                    <x-button variant="accent" size="lg" class="shadow-xl font-bold">ابدأ اختبار المهارات</x-button>
                </div>
                <!-- Abstract Design -->
                <div class="absolute left-0 top-0 h-full w-1/3 opacity-20 hidden lg:block">
                     <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="h-full w-full">
                        <path fill="#FFFFFF" d="M47.5,-59.2C60.1,-52.3,67.8,-36.9,71.2,-21.2C74.6,-5.5,73.6,10.5,67.7,24.4C61.8,38.3,51,50.1,38.1,58.8C25.2,67.5,10.1,73.1,-5.5,71.7C-21.1,70.3,-37.2,61.9,-49.6,50.4C-62.1,38.9,-70.8,24.3,-72.5,9.4C-74.2,-5.5,-68.8,-20.7,-59.5,-33.4C-50.2,-46.1,-37,-56.3,-23,-62.4C-9,-68.5,5.7,-70.5,22.1,-67.2C32.1,-65.2,40.1,-62.4,47.5,-59.2Z" transform="translate(100 100)" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</x-layouts.public>
