<!-- Top Bar -->
@php $menus = config('menu.main_menu') @endphp
<div class="w-full lg:block bg-deepBlue text-white border-b border-blue-400 border-opacity-75 fixed top-0 z-40 lg:relative">
    <div class="container lg:w-[1170px] mx-auto lg:flex items-center justify-between px-4 lg:px-0 sm:py-2 md:py-3 opacity-75">
        <!-- Social Icons -->
        <div class="flex justify-center items-center space-x-6 px-2">
            <div class="hidden space-x-6 lg:flex">

                <a href="#"><img class="w-4 h-4" src="{{asset('images/logo/fb.svg')}}" alt=""></a>
                <a href="#"><img class="w-4 h-4" src="{{asset('images/logo/linkedin.svg')}}" alt=""></a>
                <a href="#"><img class="w-4 h-4" src="{{asset('images/logo/twitter.svg')}}" alt=""></a>

            </div>
            <!-- Navigation Links -->
            <div class="flex items-center justify-center space-x-10 border-r border-x-blue-300 px-6 border-l">
                <a href="/alumni" wire:navigate class="hover:text-blue-500">Alumni</a>
                <a href="/admission" wire:navigate class="hover:text-blue-500">Admission</a>
                <a href="/user/login" wire:navigate class="sm:block lg:hidden hover:text-blue-500">Login</a>
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
                <p class="text-sm">Baitul Aman Rd, Faridpur</p>
            </span>
        </div>
    </div>
</div>

<div class="bg-deepBlue text-white px-5 lg:pb-3 z-30 fixed top-6 md:top-10 lg:top-0 w-full lg:relative">
    <div class="container lg:w-[1170px] mx-auto flex justify-between items-center py-4 lg:py-8 overflow-x-hidden">
        <!-- Logo and Address -->
        <div class="flex items-center space-x-4 lg:-translate-y-3">
            <a href="/" wire:navigate class="flex items-center space-x-2">
                <picture>
                    <source srcset="{{ asset('images/FEClogo.png') }}" type="image/webp">
                    <img src="{{ asset('images/FEClogo.png') }}" alt="FEC Logo" class="h-12 md:h-14 mr-2" loading="lazy">
                </picture>
                <h1 class="hidden md:block text-3xl font-bold">Faridpur Engineering College</h1>
            </a>
        </div>
        <!-- Login Button -->
        <button class="hidden lg:block lg:mr-8 px-8 py-2 border-2 border-[#f5ad0d] text-[#f5ad0d] rounded hover:bg-yellow-500 hover:text-white transition duration-300 ease-in-out text-lg md:-translate-y-3">
            Login
        </button>
        <!-- Mobile Menu -->
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
