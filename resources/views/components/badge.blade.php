@props([
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $baseClasses = 'inline-flex items-center font-semibold rounded-full';

    $variants = [
        'primary' => 'bg-blue-100 text-[#2A4B7C] dark:bg-blue-900/40 dark:text-blue-200',
        'success' => 'bg-green-100 text-[#10B981] dark:bg-green-900/40 dark:text-green-200',
        'warning' => 'bg-yellow-100 text-[#F59E0B] dark:bg-yellow-900/40 dark:text-yellow-200',
        'danger' => 'bg-red-100 text-[#EF4444] dark:bg-red-900/40 dark:text-red-200',
        'accent' => 'bg-red-50 text-[#FF6B6B] dark:bg-red-900/40 dark:text-red-300',
        'gray' => 'bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300',
    ];

    $sizes = [
        'sm' => 'px-2 py-0.5 text-xs',
        'md' => 'px-2.5 py-0.5 text-sm',
        'lg' => 'px-3 py-1 text-base',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
