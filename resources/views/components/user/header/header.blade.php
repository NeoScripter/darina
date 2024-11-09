<header x-data="{ lastScrollY: window.scrollY, isVisible: true, isOpen: false }" x-init="window.addEventListener('scroll', () => {
    let currentScrollY = window.scrollY;
    isVisible = currentScrollY < lastScrollY;
    lastScrollY = currentScrollY;
})"
    :class="{ 'sticky top-0 bg-beige/50 backdrop-blur': isVisible, 'opacity-0': !isVisible }"
    class="z-30 transition-all duration-300 bg-beige">

    <x-user.header.popup />

    <x-user.header.nav />

</header>
