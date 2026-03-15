@props([
    'type' => 'button',
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium rounded-lg transition-all duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed dark:focus:ring-offset-gray-900';

    $variants = [
        'primary' => 'bg-[#2A4B7C] text-white hover:bg-opacity-90 focus:ring-[#2A4B7C] shadow-sm',
        'secondary' => 'bg-gray-200 text-gray-800 hover:bg-gray-300 focus:ring-gray-300 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600',
        'outline' => 'border-2 border-[#2A4B7C] text-[#2A4B7C] hover:bg-[#2A4B7C] hover:text-white focus:ring-[#2A4B7C] dark:border-[#2A4B7C] dark:text-[#2A4B7C] dark:hover:bg-[#2A4B7C] dark:hover:text-white',
        'danger' => 'bg-[#EF4444] text-white hover:bg-opacity-90 focus:ring-[#EF4444] shadow-sm',
        'ghost' => 'text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800 focus:ring-gray-200',
    ];

    $sizes = [
        'xs' => 'px-2.5 py-1.5 text-xs',
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-4 py-2 text-base',
        'lg' => 'px-6 py-3 text-lg',
        'icon' => 'p-2',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
