@props([
    'disabled' => false,
    'error' => false,
])

@php
    $baseClasses = 'w-full rounded-lg shadow-sm border focus:ring-2 focus:ring-opacity-50 transition-colors duration-200 ease-in-out sm:text-sm bg-surface dark:bg-gray-900 dark:text-gray-200';
    
    if ($error) {
        $classes = $baseClasses . ' border-danger focus:border-danger focus:ring-danger text-danger placeholder-danger/60';
    } else {
        $classes = $baseClasses . ' border-gray-300 focus:border-[#2A4B7C] focus:ring-[#2A4B7C] dark:border-gray-600 dark:focus:border-[#2A4B7C] placeholder-gray-400';
    }
@endphp

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $classes]) !!}>
