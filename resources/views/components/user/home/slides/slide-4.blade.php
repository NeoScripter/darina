<div>
    <div class="relative w-full">
        <img src="{{ asset('images/main/main-popup-3.webp') }}" alt="Рабочий на мебельной фабрике занимается изготовлением элементов для сборки мебели." class="w-full">

        <button
            @click="showPopup = false"
            class="absolute w-10 h-10 top-4 right-4">
            <img src="{{ asset('images/main/close-modal.svg')}}" alt="Крестик" class="w-full h-full">
        </button>
    </div>
    <div class="relative p-4 space-y-4 bg-white sm:p-6">
        <h3 class="text-2xl font-semibold">Современное производство</h3>

        <p>Качество и соответствие - наши приоритеты!</p>

        <p>Все материалы для вашей мебели проходят строгий контроль перед началом производства.
        </p>

        <p>Наше инновационное производственное оборудование гарантирует высочайшее качество и максимальную гибкость. Наряду с техническим прогрессом, креативность и мотивация нашего квалифицированного персонала имеют решающее значение для достижения наилучших результатов. </p>

        <h4 class="text-lg font-semibold">Запишитесь на экскурсию производства</h4>

        <p class="pb-5">Посетите фабрику с которой мы работаем - посмотрите как Darina делает мебель и получите скидку 5%</p>

        <button
        @click="showCallbackModal = true; showPopup = false"
        class="block w-40 py-2 mx-auto mt-10 text-xs text-center text-white bg-black border border-black rounded-full hover:bg-white hover:text-black">Записаться</button>
    </div>
</div>
