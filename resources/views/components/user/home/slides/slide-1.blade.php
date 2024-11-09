<div>
    <div class="relative w-full">
        <img src="{{ asset('images/main/main-popup-5.webp') }}" alt="Иллюстрация минималистичной кухни с шкафами и бытовыми приборами." class="w-full">

        <button
            @click="showPopup = false"
            class="absolute w-10 h-10 top-4 right-4">
            <img src="{{ asset('images/main/close-modal.svg')}}" alt="Крестик" class="w-full h-full">
        </button>
    </div>
    <div class="relative p-4 space-y-4 bg-white sm:p-6">
        <h3 class="text-2xl font-semibold">Этапы работы</h3>

        <p>Забота и внимание — наши главные приоритеты. Мы с удовольствием ответим на все ваши вопросы, поможем выбрать идеальный вариант и создадим мебель, которая будет радовать вас каждый день!</p>

        <div class="grid grid-cols-2 gap-4 p-2 pb-5">
            <div>
                <img src="{{ asset('images/main/111.webp') }}" alt="">
                <p class="mt-1 text-sm text-balance">Проконсультируем и сделаем предварительный расчёт</p>
            </div>
            <div>
                <img src="{{ asset('images/main/222.webp') }}" alt="">
                <p class="mt-1 text-sm text-balance">Точно замеряем и поможем выбрать материалов</p>
            </div>
            <div>
                <img src="{{ asset('images/main/333.webp') }}" alt="">
                <p class="mt-1 text-sm text-balance">Составим проект по вашим  идеям и пожеланиям</p>
            </div>
            <div>
                <img src="{{ asset('images/main/444.webp') }}" alt="">
                <p class="mt-1 text-sm text-balance">Своевременно доставим и профессионально соберем</p>
            </div>
        </div>

        <button
                class="block px-6 py-3 mx-auto text-xs text-white transition-opacity rounded-full hover:opacity-90 gradient-btn-orange">Заказать
                выезд замерщика</button>
    </div>
</div>


