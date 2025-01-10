<!-- Menu Links -->
<nav id="navBar"
class="hidden container w-[1270px] mx-auto bg-white text-gray-800 px-4 py-7 rounded shadow-lg md:flex justify-evenly text-lg md:text-base md:shadow-lg z-50 fixed top-28 left-1/2 transform -translate-x-1/2 translate-y-8 transition-all duration-200 ease-in"
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
</nav>
