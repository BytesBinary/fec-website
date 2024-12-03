<div class="relative bg-gradient-to-tr from-teal-600 via-blue-800 to-gray-900 pt-1 text-white px-6 md:flex md:items-center md:justify-between shadow-xl hidden">
    <!-- Left: University Logo and Title -->
    <div class="relative flex items-center gap-4 z-10">
        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-t from-[#abef5f] via-lime-200 to-teal-100 rounded-[30px] rounded-bl-none rounded-br-none  flex items-center justify-center shadow-lg">
            <img src="{{ asset('images/logo.png') }}" alt="University Logo" class="h-9 mt-1 md:h-12">
        </div>
        <h1 class="hidden lg:block text-xl md:text-2xl font-bold uppercase tracking-wide text-white drop-shadow-lg">
            Faridpur Engineering College
        </h1>
        <h1 class="hidden md:block lg:hidden text-xl md:text-2xl font-bold uppercase tracking-wide text-white drop-shadow-lg">
            FEC
        </h1>
    </div>

    <!-- Right: Contact Actions -->
    <div class="relative mt-4 md:mt-0 flex flex-col md:flex-row items-center gap-2 z-10">
        <!-- Gmail Button -->
        <a href="mailto:info@fec.edu.bd" aria-label="Email Faridpur Engineering College"
            class="flex items-center gap-1 px-3 py-1 text-xs bg-white text-red-700 rounded-full shadow-md hover:bg-red-600 hover:text-white transition duration-300">
            <x-svg-icon.email></x-svg-icon.email>
            Email
        </a>

        <!-- Call Button -->
        <a href="tel:+8801234567890" aria-label="Call Faridpur Engineering College"
            class="flex items-center gap-1 px-3 py-1 text-xs bg-white text-teal-700 rounded-full shadow-md hover:bg-teal-600 hover:text-white transition duration-300">
            <x-svg-icon.phone></x-svg-icon.phone>
            Call
        </a>

        <!-- Address -->
        <div class="text-center text-xs text-gray-300">
            <p>Dr. Kaji Motaher Hossain Road</p>
            <p>Komolapur, Faridpur - 7800</p>
        </div>
    </div>
</div>
