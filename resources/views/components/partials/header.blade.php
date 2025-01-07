<!-- Top Bar -->
<div class="w-full bg-deepBlue text-white border-b border-blue-400">
    <div class="container w-[1170px] mx-auto flex justify-between items-center px-4 lg:px-0 py-2">
        <!-- Social Icons -->
        <div class="flex items-center space-x-6">
            <svg class="w-5 h-5 fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
            </svg>
            <svg class="w-5 h-5 fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
            </svg>
            <svg class="w-5 h-5 fill-[#add8e6]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
            </svg>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-10 border-r border-x-blue-300 px-6 border-l">
                <a href="#" class="hover:text-blue-500">Careers</a>
                <a href="#" class="hover:text-blue-500">Help Desk</a>
                <a href="#" class="hover:text-blue-500">Login</a>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="flex items-center space-x-4 text-sm">
            <p>(+1) 212-946-2707</p>
            <p>info@ByronCo.com</p>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<div class="bg-deepBlue text-white px-6">
    <div class="container w-[1170px] mx-auto flex justify-between items-center py-3">
        <!-- Logo -->
        <div class="flex items-center space-x-2 md:translate-y-3">
            <a href="#">
                <img src="{{ asset('images/FEClogo.png') }}" alt="Byron Logo" class="h-12 md:h-14">
            </a>
            <h1 class="text-3xl font-bold ">FEC</h1>
        </div>

        <!-- Address -->
        <button class="px-8 py-2 mx-3 border-2 border-yellow-500 text-yellow-500 rounded hover:bg-yellow-500 hover:text-white transition duration-300 ease-in-out translate-y-4">
            Login
        </button>

    </div>

    <!-- Menu Links -->
    <nav class="hidden container w-[1170px] mx-auto bg-white text-gray-800 px-4 py-6 rounded shadow-lg md:flex justify-evenly text-lg md:text-base md:shadow-lg translate-y-8">
        <a href="#" class="hover:text-blue-500">Home</a>
        <ul
        class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Main</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Construction</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Engineering</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Factory</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Architecture</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Industrial</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Handyman</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Building</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home Renewable Energy</a>
        </li>
      </ul>
    </li>

    <li><a href="#" class="text-gray-800 hover:text-yellow-500">About</a></li>
    <li><a href="#" class="text-gray-800 hover:text-yellow-500">Services</a></li>
    <li><a href="#" class="text-gray-800 hover:text-yellow-500">Projects</a></li>
    <li><a href="#" class="text-gray-800 hover:text-yellow-500">News</a></li>
  </ul>
        <a href="#" class="hover:text-blue-500">About</a>
        <a href="#" class="hover:text-blue-500">Services</a>
        <a href="#" class="hover:text-blue-500">Projects</a>
        <a href="#" class="hover:text-blue-500">News</a>
        <a href="#" class="hover:text-blue-500">Shop</a>
        <a href="#" class="hover:text-blue-500">Contact</a>
    </nav>
</div>
