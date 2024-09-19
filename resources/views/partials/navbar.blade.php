<nav class="relative bg-gray-700 text-white z-10" x-data="{ open: false, dropdownOpen: false, currentDropdown: null }">
    <div class="container mx-auto px-4 py-3 flex justify-between md:justify-center items-center">
        @include('partials.desktop-menu')
    </div>
    @include('partials.mobile-menu')
</nav>
