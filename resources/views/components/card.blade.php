@props(['noPadding' => false])

<div {{ $attributes->merge(['class' => 'bg-surface dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden text-gray-800 dark:text-gray-200 transition-all duration-200 ease-in-out hover:shadow-md']) }}>
    @if(!$noPadding)
        <div class="p-6">
            {{ $slot }}
        </div>
    @else
        {{ $slot }}
    @endif
</div>
