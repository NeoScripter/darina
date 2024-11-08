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

        <svg class="absolute cursor-pointer top-2 right-2 md:top-6 md:right-6" width="50" height="50">
            <circle class="progress-ring__circle" cx="25" cy="25" r="20"></circle>

            <line x1="21" y1="17" x2="21" y2="33" stroke="currentColor" stroke-width="3.5"
                class="text-white" />

            <line x1="29" y1="17" x2="29" y2="33" stroke="currentColor" stroke-width="3.5"
                class="text-white" />

            <polygon class="hidden text-white" points="10,5 10,20 20,12.5" fill="currentColor"
                transform="translate(8, 9) scale(1.3)" />
        </svg>

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


    <div x-data="{ currentSlide: 0, totalSlides: 5 }" class="relative px-4 pt-4 overflow-x-hidden group bg-beige lg:px-8">

        <button @click="currentSlide = (currentSlide - 1 + totalSlides) % totalSlides" x-show="currentSlide !== 0"
            class="absolute z-10 w-8 transition-opacity transform translate-y-8 bg-transparent opacity-0 left-1 bottom-1/2 group-hover:opacity-100">
            <img src="{{ asset('images/main/slide-prev.svg') }}" alt="">
        </button>

        <button @click="currentSlide = (currentSlide + 1) % totalSlides" x-show="currentSlide !== 4"
            class="absolute z-10 w-8 transition-opacity transform translate-y-8 bg-transparent opacity-0 right-1 bottom-1/2 group-hover:opacity-100">
            <img src="{{ asset('images/main/slide-next.svg') }}" alt="">
        </button>

        <div class="flex items-center gap-12 py-8 transition-transform duration-500 ease-in-out"
            :style="{ transform: `translateX(${currentSlide * -295}px)` }">

            @for ($i = 0; $i < 5; $i++)
                <div class="relative w-64 h-full overflow-hidden rounded-3xl shrink-0">

                    <video muted class="object-cover object-center w-full h-full carousel__video"
                        x-ref="video{{ $i }}"
                        x-on:ended="
                        currentSlide = (currentSlide + 1) % totalSlides;
                        $nextTick(() => { $refs['video' + currentSlide].play() })
                    ">
                        <source src="{{ asset('videos/main/main-mb.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <svg class="absolute cursor-pointer top-2 right-2" width="50" height="50">
                        <circle class="progress-ring__circle" cx="25" cy="25" r="20"></circle>

                        <line x1="21" y1="17" x2="21" y2="33" stroke="currentColor"
                            stroke-width="3.5" class="hidden text-white" />

                        <line x1="29" y1="17" x2="29" y2="33" stroke="currentColor"
                            stroke-width="3.5" class="hidden text-white" />

                        <polygon class="text-white" points="10,5 10,20 20,12.5" fill="currentColor"
                            transform="translate(8, 9) scale(1.3)" />
                    </svg>

                    <button class="absolute w-8 h-8 transition-opacity bottom-4 right-4 hover:opacity-80">
                        <img src="{{ asset('images/main/plus.svg') }}" alt="Plus sign">
                    </button>
                </div>
            @endfor
        </div>

    </div>


</x-user-layout>
