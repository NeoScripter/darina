<div x-data="{ currentSlide: 0, totalSlides: 5 }" x-init="setInterval(() => {
    currentSlide = (currentSlide + 1) % totalSlides;}, 5000);"
    class="relative overflow-x-hidden group bg-beige md:px-4 lg:px-8">

    <button @click="currentSlide = (currentSlide - 1 + totalSlides) % totalSlides" x-show="currentSlide !== 0"
        class="absolute z-10 transition-opacity transform -translate-y-1 bg-transparent opacity-0 left-1 bottom-20 group-hover:opacity-100">
        <img src="{{ asset('images/main/slide-prev.svg') }}" alt="">
    </button>

    <button @click="currentSlide = (currentSlide + 1) % totalSlides" x-show="currentSlide !== 4"
        class="absolute z-10 transition-opacity transform -translate-y-1 bg-transparent opacity-0 right-1 bottom-20 group-hover:opacity-100">
        <img src="{{ asset('images/main/slide-next.svg') }}" alt="">
    </button>

    <div class="flex items-center gap-4 py-8 transition-transform duration-500 ease-in-out"
        :style="{ transform: `translateX(${currentSlide * -365}px)` }">
        <div class="h-full overflow-hidden rounded-3xl w-87 shrink-0">
            <img src="{{ asset('images/main/slide-1.webp') }}"
                alt="Тук-тук, а мы уже тут! Сроки изготовления мебели от 14 дней."
                class="object-cover object-center w-full h-full">
        </div>
        <div class="h-full overflow-hidden w-87 rounded-3xl shrink-0">
            <img src="{{ asset('images/main/slide-2.webp') }}"
                alt="Гарантия 5 лет на мебель. Заботливо отремонтируем, если что-то сломается."
                class="object-cover object-center w-full h-full">
        </div>
        <div class="h-full p-4 overflow-hidden bg-center bg-cover shrink-0 w-87 rounded-3xl home-slide">
            <h3 class="w-1/2 mb-2 text-lg font-bold leading-none gradient-text-orange">Бесплатный дизайн проект</h3>
            <p class="mb-2 text-xs text-slate-400">Успей в ноябре</p>
            <button
                class="block px-6 py-3 text-xs text-white transition-opacity rounded-full hover:opacity-90 gradient-btn-orange">Заказать
                выезд замерщика</button>
            <p class="mt-2 leading-none text-gray-400 text-xxxs">* Подробности уточните у Вашего дизайнера</p>
        </div>
        <div class="h-full overflow-hidden shrink-0 w-87 rounded-3xl">
            <img src="{{ asset('images/main/slide-4.webp') }}"
                alt="Есть проект? Бесплатно рассчитаем стоимость встроенной мебели для вашего интерьера."
                class="object-cover object-center w-full h-full">
        </div>
        <div class="h-full px-2 py-3 overflow-hidden bg-white shrink-0 w-87 rounded-3xl">
            <h3 class="mb-1 text-base text-center">От замера до интерьера мечты</h3>
            <img src="{{ asset('images/main/slide-5.webp') }}"
                alt="3D визуализация компактной кухни с современной мебелью и бытовой техникой."
                class="object-cover object-center h-20 mx-auto w-9/10">
            <button
                class="relative block px-4 py-1 mx-auto text-center text-white bg-black border border-black rounded-full text-xxs w-max -top-2 hover:bg-white hover:text-black">Смотреть
                видео</button>
        </div>
    </div>

    <style>
        .home-slide {
            background-image: url({{ asset('images/main/slide-3.webp') }});
        }
    </style>
</div>
