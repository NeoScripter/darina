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

        <x-user.home.progress-bar :showLines="true" />

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
            <a href="tel:+78003008556"
                class="flex items-center justify-center px-4 py-2 text-xs text-white transition-opacity rounded-full sm:px-6 sm:text-sx bg-orange hover:opacity-75">
                Звонок
            </a>
        </div>
    </div>

    <x-user.home.videoModal />

    <x-user.home.benefits />

    <div class="pt-10 bg-beige">
        <picture class="object-cover object-center w-full">
            <source srcset="{{ asset('images/main/main-preview-dk.webp') }}" media="(min-width: 768px)" />
            <img src="{{ asset('images/main/main-preview-mb.webp') }}" alt="" />
        </picture>

        <button
            class="block px-6 py-3 mx-auto mt-4 text-xs text-white duration-300 ease-in rounded-full md:-translate-y-20 sm:-translate-y-12 transtion-opacity hover:opacity-80 sm:text-sm bg-swamp">Бесплатный
            дизайн проекта</button>
    </div>

    <div class="px-4 pb-10 mt-20 md:mt-14 sm:px-20">

        <div class="grid grid-cols-2 gap-8 p-8 bg-white md:gap-12 sm:grid-cols-4 md:grid-cols-8 rounded-xl">
            @php
                $content = [
                    'Качественные материалы и фурнитура',
                    'Собственное производство',
                    'Гарантия 5 лет',
                    'Заказ на дому',
                    'Доставка по всей России',
                    'Бесплатный проект',
                    'Срок изготовления от 14 дней',
                    'Рассрочка',
                ];
            @endphp
            @for ($i = 0; $i < 8; $i++)
                <div class="flex flex-col justify-between gap-3">
                    <div>
                        <div class="w-12 mb-2">
                            <img src="{{ asset('images/advs/adv-' . ($i + 1) . '.webp') }}" alt=""
                                class="object-contain object-center w-full">
                        </div>
                        <h6 class="font-bold text-xxs">{{ $content[$i] }}</h6>
                    </div>

                    @php
                        $modalNumber = [4, 3, 1, 2];
                    @endphp

                    @if ($i < 4)
                        <button @click="showVideoModal = true; videoModal = {{ $modalNumber[$i] }}"
                            class="inline-flex items-center gap-1 text-xxs text-orange">
                            Узнать больше
                            <img src="{{ asset('images/advs/orange-arrow.svg') }}" alt="" class="w-1">
                        </button>
                    @endif
                </div>
            @endfor
        </div>
    </div>

    <div class="pt-8 pb-12 text-white bg-dark-bg">
        <h3 class="mb-6 text-4xl font-bold text-center text-white">Видео отзывы</h3>

        <div x-data="{ currentSlide: 0, totalSlides: 5 }" class="relative px-4 overflow-x-hidden group lg:px-8">

            <button @click="currentSlide = (currentSlide - 1 + totalSlides) % totalSlides" x-show="currentSlide !== 0"
                class="absolute z-10 w-8 transition-opacity transform translate-y-8 bg-transparent opacity-0 left-1 bottom-1/2 group-hover:opacity-100">
                <img src="{{ asset('images/main/slide-prev.svg') }}" alt="">
            </button>

            <button @click="currentSlide = (currentSlide + 1) % totalSlides" x-show="currentSlide !== 4"
                class="absolute z-10 w-8 transition-opacity transform translate-y-8 bg-transparent opacity-0 right-1 bottom-1/2 group-hover:opacity-100">
                <img src="{{ asset('images/main/slide-next.svg') }}" alt="">
            </button>

            <div class="flex items-center gap-12 py-8 transition-transform duration-500 ease-in-out"
                :style="{ transform: `translateX(${currentSlide * -305}px)` }">

                @for ($i = 0; $i < 5; $i++)
                    <div class="relative w-64 overflow-hidden h-100 rounded-3xl shrink-0">

                        <video muted class="object-cover object-center w-full h-full carousel__video">
                            <source src="{{ asset('videos/main/review-' . (($i + 1) % 3 + 1) . '.mp4') }}" type="video/mp4">
                        </video>

                        <x-user.home.progress-bar />

                    </div>
                @endfor
            </div>
        </div>

        <p class="mt-8 mb-12 text-base text-center text-white">Проконсультируем и с радостью решим ваши вопросы</p>

        <div class="flex items-center justify-center w-full gap-4 px-3 mb-12">
            <a href=""
                class="w-40 py-2 text-xs text-center text-black transition-colors bg-white rounded-full hover:bg-black hover:text-white">Перейти
                в Вотсап</a>
            <a href=""
                class="w-40 py-2 text-xs text-center text-white bg-black rounded-full hover:bg-white hover:text-black">Заказать
                звонок</a>
        </div>

        <p class="mt-8 mb-8 text-base text-center text-white">Социальные сети</p>

        <div class="flex items-center justify-center gap-3">
            @for ($i = 0; $i < 4; $i++)
                <x-user.home.social imgPath="{{ asset('images/socials/social-' . ($i + 1) . '.webp') }}" url=""
                    alt="" />
            @endfor
        </div>

        <p class="mt-8 mb-4 text-base text-center text-white">Оплачиваете любым удобным способом</p>

        <div class="flex items-center justify-center gap-3 px-2">
            @for ($i = 0; $i < 6; $i++)
                <div class="h-24">
                    <img src="{{ asset('images/pay/pay-' . ($i + 1) . '.webp') }}" alt=""
                        class="object-contain h-full">
                </div>
            @endfor
        </div>
    </div>

</x-user-layout>
