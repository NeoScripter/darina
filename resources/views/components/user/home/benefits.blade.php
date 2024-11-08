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

        @for ($i = 0; $i < 5; $i++)
            <div class="relative w-64 overflow-hidden h-100 rounded-3xl shrink-0">

                <video muted class="object-cover object-center w-full h-full carousel__video">
                    <source src="{{ asset('videos/main/carousel-' . ($i + 1) . '.mp4') }}" type="video/mp4">
                </video>

                <x-user.home.progress-bar />

                <button class="absolute w-8 h-8 transition-opacity bottom-4 right-4 hover:opacity-80">
                    <img src="{{ asset('images/main/plus.svg') }}" alt="Plus sign">
                </button>

            </div>
        @endfor
    </div>

    <div tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 w-full h-screen p-4 overflow-x-hidden overflow-y-auto bg-black/50 md:inset-0">
        <div class="relative max-h-full mx-auto mt-20 w-94">
            <div class="w-full">
                <img src="{{ asset('images/main/main-popup-1.webp') }}" alt="" class="w-full">
            </div>
            <div class="relative p-4 space-y-4 bg-white">
                <h3 class="text-2xl font-semibold">Гарантия 5 лет</h3>

                <p>Мы уверены в качестве наших изделий и готовы дать вам 5-летнюю гарантию на комплектующие кухонь и
                    шкафов DARINA. Мы используем только лучшие материалы и самые современные технологии производства,
                    чтобы обеспечить вам долговечное и надежное изделие.</p>

                <p>5 лет гарантии - это не просто цифра, это наше обещание сделать вашу жизнь лучше и красивее. Доверьте
                    нам свои мечты, и мы сделаем их реальностью!</p>

                <p class="text-gray-400">Гарантийные обязательства не распространяются в случаях:
                </p>

                <ul class="pl-3 space-y-2 list-disc">
                    <li>деформаций основных конструктивных элементов помещения Покупателя;</li>
                    <li>механического, химического, термического повреждения товара; </li>
                    <li>несоблюдения Покупателем правил эксплуатации.</li>
                </ul>

                <details class="space-y-4">
                    <summary class="cursor-pointer">
                        Ознакомиться с условиями гарантии
                    </summary>
                    <p>Darina предоставляет гарантию:</p>
                    <p>Гарантия распространяется на фурнитуру Hettich, Blue, Boyard (петли, выдвижные ящики) столешницы
                        из камня массива</p>
                    <ul class="pl-3 space-y-2 list-disc">
                        <li>5 лет на кухни и шкафы Darina (каркасы Egger «Амика», фасады «Амика», «Николь», «Деми»,
                            «Аврора», «Хлоя», «Сити», «Маренго», «Оливия», «Белла», «Мишель», цоколи)</li>
                        <li>7 лет на фурнитуру Hettich, Blum (петли, выдвижные ящики)</li>
                    </ul>
                    <p>В гарантию включена:
                        Бесплатная замена товара на такой же или аналогичный в случае выявления в ходе эксплуатации
                        скрытых производственных дефектов конструкции и/или производственного брака материала при
                        соблюдении инструкции по эксплуатации и уходу. Если товар вышел из ассортимента, компания по
                        своему усмотрению предложит подходящую замену.</p>
                    <p>Гарантия не распространяется на случаи:</p>
                    <ul class="pl-3 space-y-2 list-disc">
                        <li>Механических повреждений, приобретенных в ходе ненадлежащей сборки и эксплуатации.</li>
                        <li>Повреждений, возникших вследствие превышения максимальных нагрузок на элементы конструкции.
                        </li>
                        <li>Использования товаров в коммерческих и иных целях, не связанных с реализацией прав
                            потребителя.</li>
                        <li>Нарушения инструкции по эксплуатации и уходу, влажностного и/или температурного режимов с
                            попаданием влаги или горячего пара, которое привело к разбуханию изделия.</li>
                        <li>Естественного износа материала, изменения цвета, в том числе под воздействием прямых
                            солнечных лучей.</li>
                        <li>Использования товара на открытом воздухе, а также в неотапливаемых помещениях.</li>
                        <li>Оцененные компанией Darina как негарантийные.</li>
                    </ul>
                    <p class="mt-6">Как воспользоваться гарантией</p>
                    <p>В случае возникновения дефекта, выявленного в процессе сборки и/или эксплуатации, просим вас
                        оставить обращение:</p>
                    <ul class="pl-3 space-y-2 list-disc">
                        <li>На почту darinameb@mail.ru</li>
                        <li>В WhatsApp +7 (958) 500-85-56</li>
                        <li>По телефону 8-800-300-85-56</li>
                    </ul>
                    <p>Наши специалисты в кратчайшие сроки проведут проверку качества товара с целью установления причин
                        возникновения дефекта/неисправности.
                        Чтобы воспользоваться гарантией, необходимо предоставить кассовый чек либо иной документ,
                        подтверждающий факт и дату приобретения товара, а также фотографии дефектов.</p>
                </details>
            </div>
        </div>
    </div>

</div>
