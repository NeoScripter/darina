<div tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 w-full h-screen p-4 overflow-x-hidden overflow-y-auto bg-black/50 md:inset-0"
    x-cloak x-show='showVideoModal' x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-80"
    x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-80">
    <div class="relative mx-auto mt-20 w-min md:mt-30" x-on:click.away='showVideoModal=false'>

        @php
            $legends = ['', 'Гарантия 5 лет', 'Заказ на дому', 'Современное производство', 'Качественные материалы и фурнитура'];
        @endphp

        @for ($i = 0; $i < 5; $i++)
            <template x-if="videoModal === {{ $i }}">
                <div class="relative w-64 overflow-hidden h-100 rounded-3xl shrink-0">

                    <video muted autoplay loop class="object-cover object-center w-full h-full modal__video">
                        <source src="{{ asset('videos/main/carousel-' . ($i + 1) . '.mp4') }}" type="video/mp4">
                    </video>

                    <button @click="showPopup = true; showVideoModal = false; openModal = {{ $i }}"
                        class="absolute w-8 h-8 transition-opacity bottom-4 right-4 hover:opacity-80">
                        <img src="{{ asset('images/main/plus.svg') }}" alt="Plus sign">
                    </button>

                    <div class="absolute w-3/4 text-lg font-bold text-white left-3 top-2/3">
                        {{ $legends[$i] }}
                    </div>
                </div>
            </template>
        @endfor
    </div>

</div>
