<!-- Top Bar -->
@php $menus = config('menu.main_menu') @endphp
<div class="w-full hidden lg:block bg-deepBlue text-white border-b border-blue-400 border-opacity-75">
    <div
        class="container hidden lg:w-[1170px] mx-auto lg:flex items-center justify-between px-4 lg:px-0 py-3 opacity-75">
        <!-- Social Icons -->
        <div class="flex items-center space-x-6 px-2">
            <svg class="w-4 h-4 fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
            </svg>
            <svg class="w-4 h-4 fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
            </svg>
            <svg class="w-4 h-4 fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
            </svg>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-10 border-r border-x-blue-300 px-6 border-l">
                <a href="#" class="hover:text-blue-500">Careers</a>
                <a href="#" class="hover:text-blue-500">Help Desk</a>
                <a href="#" class="hover:text-blue-500">Alumni</a>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="hidden md:hidden lg:flex items-center space-x-4 text-md">
            <span class=" flex border-r border-blue-300">
                <svg class="w-4 h-4 mx-1 translate-y-[2px] fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <p class="text-sm mr-3"><a href="tel:02478847545">(+880)02478847545</a></p>
            </span>
            <span class="flex border-r border-blue-300">
                <svg class="w-4 h-4 mr-1 translate-y-[2px] fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                </svg>
                <p class="text-sm mr-3"><a href="mailto:info@fec.ac.bd">info@fec.ac.bd</a></p>
            </span>
            <span class="flex">
                <svg class="w-4 h-4 mr-1 translate-y-[2px] fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M256 0c17.7 0 32 14.3 32 32l0 34.7C368.4 80.1 431.9 143.6 445.3 224l34.7 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-34.7 0C431.9 368.4 368.4 431.9 288 445.3l0 34.7c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-34.7C143.6 431.9 80.1 368.4 66.7 288L32 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l34.7 0C80.1 143.6 143.6 80.1 224 66.7L224 32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                </svg>
                <p class="text-sm">112 W 34th St, NYC</p>
            </span>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<div class="bg-deepBlue text-white px-5 lg:pb-3">
    <div class="container lg:w-[1170px] mx-auto flex justify-between items-center py-4 lg:py-8">
        <!-- Logo and Address -->
        <div class="flex items-center space-x-4 lg:-translate-y-3">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-2">
                <img src="{{ asset('images/FEClogo.png') }}" alt="Byron Logo" class="h-12 md:h-14">
                <h1 class="block lg:hidden text-3xl font-bold">FEC</h1>
                <!-- Full Text for Small Screens -->
                <h1 class="hidden lg:block text-3xl font-bold">Faridpur Engineering College</h1>

            </a>
        </div>

        <!-- Login Button -->
        <button
            class="hidden lg:block px-8 py-2 border-2 border-yellow-500 text-yellow-500 rounded hover:bg-yellow-500 hover:text-white transition duration-300 ease-in-out text-lg md:-translate-y-3">
            Login
        </button>

        <!-- Mobile Menu Button -->
        <div class="lg:hidden overflow-y-auto z-50">
            <x-partials.mobile-menu>
                @foreach ($menus as $key => $menu)
                    <div class="border-t border-gray-400 border-opacity-50 hover:text-[#f5ad0d]">
                        <x-menu :mobile="true" :isDropdown="$menu['isDropdown']" :dropdowns="$menu['isDropdown'] ? $menu['dropdowns'] : []" :slug="$key"
                            :route="$menu['route']" :title="$menu['title']" />
                    </div>
                @endforeach
            </x-partials.mobile-menu>
        </div>
    </div>
</div>
