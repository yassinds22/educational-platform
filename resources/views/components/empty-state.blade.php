@props([
    'title' => 'No items found',
    'description' => 'Get started by creating a new item.',
    'icon' => null,
])

<div {{ $attributes->merge(['class' => 'text-center py-16 px-4 rounded-2xl border-2 border-dashed border-gray-200 dark:border-gray-700 bg-surface dark:bg-gray-800']) }}>
    @if($icon)
        <div class="mx-auto h-16 w-16 text-gray-400 dark:text-gray-500 mb-4 flex items-center justify-center">
            {{ $icon }}
        </div>
    @else
        <svg class="mx-auto h-16 w-16 text-gray-400 dark:text-gray-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
        </svg>
    @endif
    
    <h3 class="mt-2 text-lg font-bold text-gray-900 dark:text-white">{{ $title }}</h3>
    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 max-w-sm mx-auto">{{ $description }}</p>
    
    @if(isset($action))
        <div class="mt-8">
            {{ $action }}
        </div>
    @endif
</div>
