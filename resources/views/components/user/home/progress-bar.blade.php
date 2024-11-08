<!-- resources/views/components/video-icon.blade.php -->
@props(['showLines' => false])

<svg class="absolute cursor-pointer top-2 right-2" width="50" height="50">
    <circle class="progress-ring__circle" cx="25" cy="25" r="20"></circle>

    <!-- Lines, hidden if $showLines is false -->
    <line x1="21" y1="17" x2="21" y2="33" stroke="currentColor" stroke-width="3.5"
        class="{{ $showLines ? '' : 'hidden' }} text-white" />

    <line x1="29" y1="17" x2="29" y2="33" stroke="currentColor" stroke-width="3.5"
        class="{{ $showLines ? '' : 'hidden' }} text-white" />

    <!-- Polygon, hidden if $showLines is true -->
    <polygon class="{{ $showLines ? 'hidden' : '' }} text-white" points="10,5 10,20 20,12.5" fill="currentColor"
        transform="translate(8, 9) scale(1.3)" />
</svg>
