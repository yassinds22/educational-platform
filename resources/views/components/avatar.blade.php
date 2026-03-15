@props([
    'src' => null,
    'name' => 'User',
    'size' => 'md'
])

@php
    $sizes = [
        'sm' => 'h-8 w-8 text-xs',
        'md' => 'h-10 w-10 text-sm',
        'lg' => 'h-14 w-14 text-lg',
        'xl' => 'h-20 w-20 text-2xl',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
    
    // Create initials
    $nameParts = explode(' ', trim($name));
    $initials = '';
    
    if (count($nameParts) >= 2) {
        $initials = strtoupper(substr($nameParts[0], 0, 1) . substr($nameParts[1], 0, 1));
    } elseif (count($nameParts) == 1 && strlen($nameParts[0]) > 0) {
        $initials = strtoupper(substr($nameParts[0], 0, 1));
    }
@endphp

<div {{ $attributes->merge(['class' => 'inline-flex items-center justify-center rounded-full bg-[#2A4B7C] text-white shrink-0 overflow-hidden font-semibold ring-2 ring-white dark:ring-gray-800 ' . $sizeClass]) }}>
    @if($src)
        <img src="{{ $src }}" alt="{{ $name }}" class="h-full w-full object-cover">
    @else
        <span>{{ $initials }}</span>
    @endif
</div>
