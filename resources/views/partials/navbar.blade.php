<nav class="relative group text-white z-50 font-semibold" style="background-color: var(--primary-color); color:var(--text-color)" x-data="{ open: false, dropdownOpen: false, currentDropdown: null }">
    <div class="container mx-auto px-4 py-3 flex justify-between md:justify-center items-center">
        <span class="absolute top-0 left-0 w-1/6 h-full bg-gradient-to-r from-white to-transparent opacity-40 transform -skew-x-12 -translate-x-full group-hover:translate-x-[82vw] transition duration-1000 ease-in-out"></span>
        @include('partials.desktop-menu')
    </div>
    @include('partials.mobile-menu')
</nav>
