<div tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 w-full h-screen p-4 overflow-x-hidden overflow-y-auto bg-black/50 md:inset-0"
    x-cloak x-show='showCallbackModal' x-transition>

    @php
        $hour = now()->format('H');
        $isDay = $hour >= 8 && $hour < 20;
    @endphp

    <div class="relative p-4 mx-auto mt-20 bg-white w-114 md:mt-30 rounded-xl" x-on:click.away='showCallbackModal=false'>

        @php
            $darkImage = '';
            $lightImage = '';
            $mainImage = '';
            $text = '';
            if ($isDay) {
                $mainImage = asset('images/webform/sun.webp');
                $darkImage = asset('images/webform/dark-cloud.webp');
                $lightImage = asset('images/webform/light-cloud.webp');
                $text = ' Напишите удобное время для бесплатной консультации';
            } else {
                $mainImage = asset('images/webform/moon.webp');
                $darkImage = asset('images/webform/star.webp');
                $lightImage = asset('images/webform/star.webp');
                $text = 'Сейчас сотрудники отдыхают. Напишите удобное время для бесплатной консультации';
            }

        @endphp

        <div class="flex justify-between">
            <div class="w-16 mt-4">
                <img src="{{ $mainImage }}" alt="" class="w-full">
            </div>
            <div class="w-2/3 mt-4 text-center">
                {{ $text }}
            </div>
            <button @click="showCallbackModal = false" class="w-12 h-12">
                <img src="{{ asset('images/webform/close-btn.webp') }}" alt="close btn sign">
            </button>
        </div>


        <img src="{{ $darkImage }}" alt="dark cloud" class="absolute w-12 left-2 top-36">
        <img src="{{ $darkImage }}" alt="dark cloud" class="absolute w-12 right-2 top-30">

        @if ($isDay)
            <img src="{{ $lightImage }}" alt="light cloud" class="absolute w-12 right-8 top-20">
        @else
            <img src="{{ $darkImage }}" alt="light cloud" class="absolute w-8 right-14 top-14">
        @endif


        <h2 class="mt-6 mb-8 text-2xl font-bold text-center">Обратный звонок</h2>

        <form method="POST" action="{{ route('callback.submit') }}" class="space-y-4">
            @csrf

            <x-user.text-input name="name" placeholder="Имя" required />

            <x-user.text-input inputmode="numeric" name="phone" placeholder="+7(___)___-__-__" required />

            <p class="text-center">Удобное время</p>

            <div class="flex items-center w-3/4 gap-4 mx-auto">
                <select name="weekday" id="weekday" class="w-full border border-gray-400 rounded-xl">
                    <option value="">Любое</option>
                    @foreach (['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'] as $day)
                        <option value="{{ $day }}" {{ old('weekday') === $day ? 'selected' : '' }}>
                            {{ $day }}</option>
                    @endforeach
                </select>

                <select name="time" id="time" class="w-full border border-gray-400 rounded-xl">
                    <option value="">08:00-20:00</option>
                    @foreach (['08:00-10:00', '10:00-12:00', '12:00-14:00', '14:00-16:00', '16:00-18:00', '18:00-20:00'] as $time)
                        <option value="{{ $time }}" {{ old('time') === $time ? 'selected' : '' }}>
                            {{ $time }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mx-auto w-max">
                <button type="submit"
                    class="px-4 py-2 mt-8 text-xs text-center text-white bg-black border border-black rounded-full w-max hover:bg-white hover:text-black">
                    Отправить
                </button>
            </div>

            <div class="w-3/4 py-4 mx-auto text-gray-400 text-xxxs">
                Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с
                Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей,
                определенных в Согласии на обработку персональных данных
            </div>

        </form>

    </div>

</div>
