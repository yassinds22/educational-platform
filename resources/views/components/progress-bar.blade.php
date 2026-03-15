@props([
    'percentage' => 0,
    'color' => 'bg-[#2A4B7C]',
    'height' => 'h-2',
    'showLabel' => false,
])

<div class="w-full">
    @if($showLabel)
    <div class="flex justify-between mb-1">
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Progress</span>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ $percentage }}%</span>
    </div>
    @endif
    <div class="w-full bg-gray-200 rounded-full {{ $height }} dark:bg-gray-700 overflow-hidden">
        <div class="{{ $color }} {{ $height }} rounded-full transition-all duration-500 ease-out" style="width: {{ $percentage }}%"></div>
    </div>
</div>
