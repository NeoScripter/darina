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

    <header x-data="{ isOpen: false }" class="sticky top-0">

        <x-user.header-popup />

        <div class="flex items-center justify-between gap-5 p-4 bg-beige sm:px-12 sm:py-5 sm:gap-12">
            <div class="w-16 h-6 sm:w-20 sm:h-8">
                <img src="{{ asset('images/nav/logo.webp') }}" alt="Darina logo" class="object-contain w-full h-full">
            </div>
            <nav class="items-center hidden md:flex md:gap-10 md:ml-auto">
                @php
                    $nav_items = ['Отзывы', 'Процесс заказа', 'Материалы', 'О фабрике', 'Контакты'];
                @endphp
                @for ($j = 0; $j < 5; $j++)
                    <a href=""
                        class="block text-sm transition-colors duration-300 shrink-0 hover:text-orange">{{ $nav_items[$j] }}</a>
                @endfor
            </nav>
            <button
                class="flex items-center justify-center px-4 py-2 ml-auto text-xs text-white transition-opacity rounded-full md:ml-0 sm:px-6 sm:text-base bg-orange hover:opacity-75">
                Звонок
            </button>
            <button x-on:click="isOpen = !isOpen"
                class="flex flex-col items-center justify-center w-8 bg-transparent md:hidden group">

                <div
                    class="flex flex-col justify-center gap-1 w-[30px] h-[20px] transform transition-all duration-300 origin-center overflow-hidden">
                    <div
                        class="bg-black h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10">
                    </div>
                    <div
                        class="bg-black h-[2px] w-7 rounded transform transition-all duration-300 group-focus:translate-x-10 delay-75">
                    </div>

                    <div
                        class="absolute left-1 items-center justify-between transform transition-all duration-500 top-2.5 -translate-x-10 group-focus:translate-x-0 flex w-0 group-focus:w-12">
                        <div
                            class="absolute bg-black h-[2px] w-5 transform transition-all duration-500 rotate-0 delay-300 group-focus:rotate-45">
                        </div>
                        <div
                            class="absolute bg-black h-[2px] w-5 transform transition-all duration-500 -rotate-0 delay-300 group-focus:-rotate-45">
                        </div>
                    </div>
                </div>
                <small class="relative text-center text-xxs -top-1">меню</small>
            </button>
        </div>

        <nav class="flex items-end justify-between gap-12 p-8 overflow-x-auto sm:px-12 sm:w-190 sm:mx-auto no-scrollbar">
            @php
                $nav_names = ['Кухни', 'Шкафы', 'Прихожие', 'Гардеробные', 'Рабочие зоны'];
            @endphp
            @for ($i = 1; $i < 6; $i++)
                <a href="" class="block shrink-0 group">
                    <img src="{{ asset('images/nav/nav-' . $i . '.webp') }}" alt="" class="w-10 mx-auto mb-2">
                    <small
                        class="block mx-auto text-center transition-colors duration-300 text-xxs w-max group-hover:text-orange">{{ $nav_names[$i - 1] }}</small>
                </a>
            @endfor
        </nav>
    </header>
</body>

</html>
