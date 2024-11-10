
<div>
    <div class="relative w-full">
        <img src="{{ asset('images/main/main-popup-2.webp') }}" alt="Дизайнер замеряет помещение с помощью планшета и лазерной рулетки для создания проекта мебели." class="w-full">

        <button
            @click="showPopup = false"
            class="absolute w-10 h-10 top-4 right-4">
            <img src="{{ asset('images/main/close-modal.svg')}}" alt="Крестик" class="w-full h-full">
        </button>
    </div>
    <div class="relative p-4 space-y-4 bg-white sm:p-6">
        <h3 class="text-2xl font-semibold">Заказ на дому</h3>

        <p>Для вашего удобства мы предлагаем выезд дизайнера-замерщика в кратчайшие сроки. Дата и стоимость выезда зависит от адреса вашего местонахождения.</p>

        <p>Наш профессиональный дизайнер выедет к вам на дом, чтобы воплотить в жизнь все ваши идеи и желания.
            С тщательным вниманием к деталям, мы учтем кривизну ваших стен, предложим лучшие решения для оптимального использования пространства, подберем для вас лучшие материалы, сочетающие в себе качество и стиль.</p>

        <p>Чтобы замер прошёл быстро и без проблем, заранее подготовьте место, куда планируется установка мебели:</p>

        <ul class="pb-5 space-y-2">
            <li>- уберите посторонние предметы и обеспечьте полный доступ к месту;</li>
            <li>- материал пола, стен, потолка, расположение обналичек, розеток, выступов и других ориентиров должны быть сохранены после замера.</li>
        </ul>

        <button
                @click="showCallbackModal = true; showPopup = false"
                class="block px-6 py-3 mx-auto text-xs text-white transition-opacity rounded-full hover:opacity-90 gradient-btn-orange">Заказать
                выезд замерщика</button>
    </div>
</div>

