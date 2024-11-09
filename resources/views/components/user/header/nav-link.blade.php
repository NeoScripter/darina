@props([
    'href' => '#',
    'imgSrc' => null,
    'text' => null,
])

<li>
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => 'inline-flex items-center gap-4 text-xl transition-all hover:underline [text-underline-offset:0.2em]']) }}
    >
        @if($imgSrc)
            <img src="{{ $imgSrc }}" alt="" class="w-6 h-6">
        @endif
        {{ $text }}
    </a>
</li>
