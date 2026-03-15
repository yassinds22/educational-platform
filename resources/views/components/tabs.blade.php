@props(['tabs' => []])

<div x-data="{ activeTab: '{{ count($tabs) > 0 ? $tabs[0]['id'] : '' }}' }" class="w-full">
    <div class="border-b border-gray-200 dark:border-gray-700">
        <nav class="-mb-px flex space-x-8 overflow-x-auto scroolbar-hide" aria-label="Tabs">
            @foreach($tabs as $tab)
                <button 
                    @click="activeTab = '{{ $tab['id'] }}'"
                    :class="activeTab === '{{ $tab['id'] }}' ? 'border-[#2A4B7C] text-[#2A4B7C] dark:text-blue-400 dark:border-blue-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 dark:hover:border-gray-600'"
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm transition-colors duration-200"
                >
                    {{ $tab['name'] }}
                </button>
            @endforeach
        </nav>
    </div>
    
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>
