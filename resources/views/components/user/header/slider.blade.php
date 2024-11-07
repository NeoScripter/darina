<div x-data="{
    canScrollLeft: false,
    canScrollRight: true,
    checkScroll() {
        this.canScrollLeft = this.$refs.nav.scrollLeft > 0;
        this.canScrollRight = this.$refs.nav.scrollLeft < this.$refs.nav.scrollWidth - this.$refs.nav.clientWidth;
    }
}" x-init="checkScroll" @scroll.window="checkScroll()" class="relative bg-white">
    <!-- Left Indicator -->
    <div x-show="canScrollLeft"
        class="absolute left-0 flex items-center justify-center p-2 bg-transparent border-r-2 border-gray-300 md:hidden top-4 w-9 bottom-10">
        <img src="{{ asset('images/nav/left-arrow.svg') }}" alt="">
    </div>

    <!-- Scrollable Navigation -->
    <nav x-ref="nav" @scroll="checkScroll()"
        class="flex items-end justify-between gap-12 p-8 overflow-x-auto sm:px-12 sm:w-190 sm:mx-auto no-scrollbar">
        @php
            $nav_names = ['Кухни', 'Шкафы', 'Прихожие', 'Гардеробные', 'Рабочие зоны'];
        @endphp
        @for ($i = 1; $i < 6; $i++)
            <a href="" class="block shrink-0 group">
                <img src="{{ asset('images/nav/nav-' . $i . '.webp') }}" alt="" class="w-10 mx-auto mb-2">
                <small
                    class="block mx-auto text-center transition-colors duration-300 text-xxs w-max group-hover:text-orange">{{ $nav_names[$i - 1] }}</small>
            </a>
        @endfor
    </nav>

    <!-- Right Indicator -->
    <div x-show="canScrollRight"
        class="absolute right-0 flex items-center justify-center p-2 bg-transparent border-l-2 border-gray-300 md:hidden top-4 w-9 bottom-10">
        <img src="{{ asset('images/nav/right-arrow.svg') }}" alt="">
    </div>
</div>
