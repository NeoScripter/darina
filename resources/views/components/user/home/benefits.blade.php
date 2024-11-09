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
        :style="{ transform: `translateX(${currentSlide * -305}px)` }">

        @php
            $legends = ['', 'Гарантия 5 лет', 'Заказ на дому', 'Современное производство', 'Качественные материалы и фурнитура'];
        @endphp

        @for ($i = 0; $i < 5; $i++)
            <div class="relative w-64 overflow-hidden h-100 rounded-3xl shrink-0">

                <video muted class="object-cover object-center w-full h-full carousel__video">
                    <source src="{{ asset('videos/main/carousel-' . ($i + 1) . '.mp4') }}" type="video/mp4">
                </video>

                <x-user.home.progress-bar />

                <button
                @click="showPopup = true; openModal = {{ $i }}"
                 class="absolute w-8 h-8 transition-opacity bottom-4 right-4 hover:opacity-80">
                    <img src="{{ asset('images/main/plus.svg') }}" alt="Plus sign">
                </button>

                <div class="absolute w-3/4 text-lg font-bold text-white left-3 top-2/3">
                    {{ $legends[$i] }}
                </div>
            </div>
        @endfor
    </div>

    <div tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 w-full h-screen p-4 overflow-x-hidden overflow-y-auto bg-black/50 md:inset-0"
        x-cloak
        x-show='showPopup'
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-80"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-80"
        >
        <div class="relative w-full max-w-2xl max-h-full mx-auto mt-20 md:mt-30"
        x-on:click.away='showPopup=false'>
        <template x-if="openModal === 0">
            <x-user.home.slides.slide-1 />
        </template>
        <template x-if="openModal === 1">
            <x-user.home.slides.slide-2 />
        </template>
        <template x-if="openModal === 2">
            <x-user.home.slides.slide-3 />
        </template>
        <template x-if="openModal === 3">
            <x-user.home.slides.slide-4 />
        </template>
        <template x-if="openModal === 4">
            <x-user.home.slides.slide-5 />
        </template>
        </div>
    </div>

</div>
