<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-main">
    <div class="mx-auto max-w-screen-3xl">
        <x-user.header.header />

        <div class="px-6 pt-4 pb-7 bg-beige sm:px-12 md:hidden">
            <h1 class="mb-2 text-xl font-bold w-60">Добро пожаловать на фабрику Дарина</h1>
            <p class="text-base">Мебель на заказ стала доступнее</p>
        </div>

        <div class="relative h-148 sm:h-108 md:h-166 lg:h-200">
            <video loop autoplay muted class="object-cover w-full h-full progress__video">
                <source src="{{ asset('videos/main/main-dk.mp4') }}" type="video/mp4" media="(min-width: 768px)">

                <source src="{{ asset('videos/main/main-mb.mp4') }}" type="video/mp4">

                Your browser does not support the video tag.
            </video>

            <svg class="absolute cursor-pointer top-2 right-2 md:top-6 md:right-6" width="50" height="50">
                <circle class="progress-ring__circle" cx="25" cy="25" r="20"></circle>

                <line x1="21" y1="17" x2="21" y2="33" stroke="currentColor"
                    stroke-width="3.5" class="text-white" />

                <line x1="29" y1="17" x2="29" y2="33" stroke="currentColor"
                    stroke-width="3.5" class="text-white" />

                <polygon class="hidden text-white" points="10,5 10,20 20,12.5" fill="currentColor"
                    transform="translate(8, 9) scale(1.3)" />
            </svg>

            <div class="absolute left-0 right-0 flex items-center justify-center w-full gap-4 px-3 bottom-8 sm:bottom-10 md:bottom-20">
                <a href="" class="w-40 py-2 text-xs text-center transition-colors bg-white rounded-full hover:bg-black hover:text-white">Перейти в Вотсап</a>
                <a href="" class="w-40 py-2 text-xs text-center text-white bg-black rounded-full hover:bg-white hover:text-black">Заказать звонок</a>
            </div>
        </div>
    </div>
</body>

</html>
