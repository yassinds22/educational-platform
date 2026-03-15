@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-surface dark:bg-gray-800'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $widthClasses = 'w-48';
        break;
    case '64':
        $widthClasses = 'w-64';
        break;
    default:
        $widthClasses = $width;
        break;
}
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $widthClasses }} rounded-xl shadow-lg {{ $alignmentClasses }}"
            style="display: none;">
        <div class="rounded-xl ring-1 ring-black ring-opacity-5 dark:ring-white dark:ring-opacity-10 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
