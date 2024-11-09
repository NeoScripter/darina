@props([
    'imgPath' => '',
    'url' => '#',
    'alt' => ''
])

<a href="{{ $url }}" class="w-14">
    <img src="{{ $imgPath }}" alt="{{ $alt }}" class="object-contain object-center w-full">
</a>
