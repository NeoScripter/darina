<x-user-layout>

    <div class="px-6 pt-4 pb-7 bg-beige sm:px-12 md:hidden">
        <h1 class="mb-2 text-xl font-bold w-60">Добро пожаловать на фабрику Дарина</h1>
        <p class="text-base text-gray-500">Мебель на заказ стала доступнее</p>
    </div>

    <div class="relative h-148 sm:h-108 md:h-166 lg:h-200">
        <video loop autoplay muted class="object-cover w-full h-full progress__video">
            <source src="{{ asset('videos/main/main-dk.mp4') }}" type="video/mp4" media="(min-width: 768px)">

            <source src="{{ asset('videos/main/main-mb.mp4') }}" type="video/mp4">

            Your browser does not support the video tag.
        </video>

        <x-user.home.progress-bar :showLines="true"/>

        <div
            class="absolute left-0 right-0 flex items-center justify-center w-full gap-4 px-3 bottom-8 sm:bottom-10 md:bottom-20">
            <a href=""
                class="w-40 py-2 text-xs text-center transition-colors bg-white rounded-full hover:bg-black hover:text-white">Перейти
                в Вотсап</a>
            <a href=""
                class="w-40 py-2 text-xs text-center text-white bg-black rounded-full hover:bg-white hover:text-black">Заказать
                звонок</a>
        </div>

    </div>

    <div class="hidden pb-10 pt-28 bg-beige md:grid place-content-center">
        <h1 class="mb-8 text-5xl font-bold">Добро пожаловать на фабрику Дарина</h1>
        <p class="text-4xl text-center text-gray-500">Мебель на заказ стала доступнее</p>
    </div>

    <x-user.home.carousel />

    <div class="bg-beige">
        <h2 class="mb-8 text-5xl text-center font-title md:mb-12">Вдохновления</h2>

        <nav class="w-4/5 mx-auto mb-8 md:mb-12">
            <ul class="flex flex-wrap items-center justify-around gap-6 sm:justify-center sm:gap-12">
                @php
                    $nav_names = ['Кухни', 'Шкафы', 'Прихожие', 'Гардеробные', 'Рабочие зоны'];
                @endphp
                @for ($g = 1; $g < 6; $g++)
                    <a href="" class="block text-base transition-colors duration-300 shrink-0 hover:text-orange">
                        {{ $nav_names[$g - 1] }}
                    </a>
                @endfor
            </ul>
        </nav>

        <div class="grid gap-4 px-2 sm:px-4 md:px-8 sm:grid-cols-2">
            @php
                $rooms = [
                    ['name' => 'Кухни', 'alt' => 'Современная кухня с красными фасадами и черной мраморной стеной.'],
                    ['name' => 'Шкафы', 'alt' => 'Шкафы'],
                    ['name' => 'Прихожие', 'alt' => 'Прихожие'],
                    ['name' => 'Гардеробные', 'alt' => 'Гардеробные'],
                ];
            @endphp

            @foreach ($rooms as $index => $room)
                <a href=""
                    class="relative block overflow-hidden transition-all duration-300 rounded before:z-10 group before:absolute before:inset-0 before:bg-black before:opacity-40 hover:before:opacity-20 before:transition-opacity before:duration-300">
                    <img src="{{ asset('images/main/room-' . ($index + 1) . '.webp') }}" alt="{{ $room['alt'] }}"
                        class="transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute z-20 px-4 py-2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-full shadow-md opacity-90 left-1/2 top-1/2 text-xxs md:text-xs">
                        {{ $room['name'] }}
                    </div>
                </a>
            @endforeach

        </div>

        <div class="flex items-center justify-center gap-4 mt-10 sm:mt-20 md:mt-10">
            <a href=""
                class="w-40 py-2 text-xs text-center transition-colors bg-white border border-black rounded-full hover:bg-black hover:text-white">Рассчитать
                стоимость</a>
            <button
                class="flex items-center justify-center px-4 py-2 text-xs text-white transition-opacity rounded-full sm:px-6 sm:text-sm bg-orange hover:opacity-75">
                Звонок
            </button>
        </div>
    </div>


    <x-user.home.benefits />


</x-user-layout>
