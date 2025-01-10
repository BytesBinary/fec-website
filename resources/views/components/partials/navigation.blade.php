<!-- Menu Links -->
<nav id="navBar"
    class="hidden container w-[1170px] mt-3 mx-auto bg-white text-gray-800 px-4 py-7 rounded shadow-lg md:flex justify-evenly text-lg md:text-base md:shadow-lg z-50 absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-all duration-500 ease-in"
    x-data="{ open: false, dropdownOpen: false, currentDropdown: null }">
    @php $menus = config('menu.main_menu') @endphp
    <div class="container mx-auto -m-3 flex justify-between md:justify-center items-center">
        <x-partials.desktop-menu>
            @foreach ($menus as $key => $menu)
                <x-menu :isDropdown="$menu['isDropdown']" :dropdowns="$menu['isDropdown'] ? $menu['dropdowns'] : []" :route="$menu['route']" :slug="$key"
                    title="{{ $menu['title'] }}" />
            @endforeach
        </x-partials.desktop-menu>
    </div>
    <x-partials.mobile-menu>
        @foreach ($menus as $key => $menu)
            <div class="border-t border-gray-100 hover:bg-bgColorLighter hover:text-black">
                <x-menu :mobile="true" :isDropdown="$menu['isDropdown']" :dropdowns="$menu['isDropdown'] ? $menu['dropdowns'] : []" :slug="$key" :route="$menu['route']"
                    title="{{ $menu['title'] }}" />
            </div>
        @endforeach
    </x-partials.mobile-menu>
</nav>
