@props(['type' => 'info'])

@php
    $baseClasses = 'p-4 rounded-xl flex items-start text-sm';

    $types = [
        'info' => 'bg-blue-50 text-blue-800 dark:bg-blue-900/30 dark:text-blue-200',
        'success' => 'bg-green-50 text-green-800 dark:bg-green-900/30 dark:text-green-200 border border-green-200 dark:border-green-800/60',
        'warning' => 'bg-yellow-50 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-200 border border-yellow-200 dark:border-yellow-800/60',
        'danger' => 'bg-red-50 text-red-800 dark:bg-red-900/30 dark:text-red-200 border border-red-200 dark:border-red-800/60',
    ];

    $iconColor = [
        'info' => 'text-blue-400 dark:text-blue-300',
        'success' => 'text-green-400 dark:text-green-300',
        'warning' => 'text-yellow-400 dark:text-yellow-300',
        'danger' => 'text-red-400 dark:text-red-300',
    ];

    $classes = $baseClasses . ' ' . ($types[$type] ?? $types['info']);
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} role="alert">
    <!-- Optional default icons could go here based on type -->
    <div class="flex-shrink-0 {{ $iconColor[$type] ?? $iconColor['info'] }} mr-3">
        @if($type === 'success')
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
        @elseif($type === 'warning')
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a.75.75 0 00-.75.75v4.5a.75.75 0 001.5 0v-4.5A.75.75 0 0010 5z" clip-rule="evenodd" /></svg>
        @elseif($type === 'danger')
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" /></svg>
        @else
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd" /></svg>
        @endif
    </div>
    <div class="flex-1">
        {{ $slot }}
    </div>
</div>
