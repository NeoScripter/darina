
<div>
    <div class="relative w-full">
        <img src="{{ asset('images/main/main-popup-4.webp') }}" alt="Образцы материалов для выбора отделки мебели и фасадов." class="w-full">

        <button
            @click="showPopup = false"
            class="absolute w-10 h-10 top-4 right-4">
            <img src="{{ asset('images/main/close-modal.svg')}}" alt="Крестик" class="w-full h-full">
        </button>
    </div>
    <div class="relative p-4 space-y-4 bg-white sm:p-6">
        <h3 class="text-2xl font-semibold">Качественные материалы и фурнитура</h3>

        <p>Мы предлагаем качественные материалы широкой цветовой гаммы ЛДСП, МДФ, плёнки, эмали, пластика, камня и массива, начиная от лучших отечественных до австрийских производителей, учитывая требования качества, дизайна и функциональности, а также вашего бюджета.</p>

        <p>Работаем с ведущими производителями алюминиевого профиля, фурнитуры и комплектующих  на российском рынке.
            Наши изделия повышают комфорт использования мебели во всех жилых помещениях и превращают открывание и закрывание шкафов в настоящее удовольствие.</p>

        <p class="pb-5">Системы выдвижных ящиков подходят для любых решений, а хорошая фурнитура для функциональности и удобства в доме.</p>

        <button
                @click="showCallbackModal = true; showPopup = false"
                class="block px-6 py-3 mx-auto text-xs text-white transition-opacity rounded-full hover:opacity-90 gradient-btn-orange">Заказать
                выезд замерщика</button>
    </div>
</div>
