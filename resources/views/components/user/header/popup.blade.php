<div x-ref="collapsible" x-cloak
    :class="{ 'opacity-0 pointer-events-none': !isOpen, 'opacity-100 pointer-events-auto': isOpen }"
    :style="isOpen ? 'height: 100vh' : 'height: 0px'"
    class="fixed top-0 z-10 w-screen h-screen overflow-hidden overflow-y-auto transition-all duration-1000 ease-in-out md:hidden bg-white/30 backdrop-blur">

    <div class="absolute right-0 z-10 text-white w-[min(100%,_360px)] bg-black/90">
        <div class="flex items-center justify-end h-16 pr-4 sm:pr-10">
            <button x-on:click="isOpen = !isOpen"
                class="relative flex items-center justify-center p-2 transition-all duration-200 transform rounded-full shadow-md group ring-0 ring-gray-300 hover:ring-4 group-focus:ring-4 ring-opacity-30">
                <div
                    class="flex flex-col -rotate-[45deg] justify-between w-[20px] h-[20px] transform transition-all duration-300 group-focus:-rotate-[0deg] origin-center">
                    <div
                        class="bg-white h-[1px] w-1/2 rounded transform transition-all duration-300 -rotate-90 group-focus:-rotate-0 group-focus:h-[2px] origin-right delay-75 -translate-y-[1px] group-focus:-translate-y-[0px]">
                    </div>
                    <div class="bg-white h-[1px] rounded"></div>
                    <div
                        class="bg-white h-[1px] w-1/2 rounded self-end transform transition-all duration-300 translate-y-[1px] group-focus:-rotate-0 -rotate-90 group-focus:h-[2px] origin-left delay-75 group-focus:translate-y-[0px]">
                    </div>
                </div>
            </button>
        </div>

        @php
            $burger_nav = [
                'Главная',
                'Кухни',
                'Прихожие',
                'Шкафы',
                'Гардеробные',
                'Рабочие зоны',
                'Отзывы',
                'Процесс заказа',
                'Материалы',
                'О фабрике',
                'Контакты',
            ];
        @endphp

        <nav class="mt-8 mb-24">
            <ul class="grid gap-2 p-4">

                @for ($k = 1; $k < 7; $k++)
                    <x-user.header.nav-link href=""
                        imgSrc="{{ asset('images/nav/burger/burger-' . $k . '.webp') }}" text="{{ $burger_nav[$k] }}" />
                @endfor
            </ul>
        </nav>

        <nav class="mb-8">
            <ul class="grid gap-2 p-4">

                @for ($k = 7; $k < 10; $k++)
                    @php
                        $events = [
                            'showModal1' => 'showVideoModal = true; videoModal = 0',
                            'showModal2' => 'showVideoModal = true; videoModal = 4',
                            'showModal3' => 'showVideoModal = true; videoModal = 3',
                            'showModal4' => 'showVideoModal = true; videoModal = 4',
                        ];
                        $eventKey = 'showModal' . ($k - 6);
                        $alpineEvent = $events[$eventKey] ?? '';
                    @endphp
                    <x-user.header.nav-button event="{{ $alpineEvent }}"
                        imgSrc="{{ asset('images/nav/burger/burger-' . $k . '.webp') }}" text="{{ $burger_nav[$k] }}" />
                @endfor
                <x-user.header.nav-link href="" imgSrc="{{ asset('images/nav/burger/burger-10.webp') }}"
                    text="{{ $burger_nav[10] }}" />
            </ul>
        </nav>
    </div>
</div>
