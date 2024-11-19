<div class="mt-10 lg:w-3/4 mx-auto">
    <!-- Welcome Section -->
    <div class="mx-4 my-6">
        <div class="relative flex flex-col md:flex-row items-center p-4 md:p-12 bg-gradient-to-br from-orange-600 via-orange-400 to-orange-300 rounded-xl shadow-lg overflow-hidden">
            <div class="z-10 md:w-2/3 w-full text-center md:text-left">
                <h1 class="text-3xl md:text-6xl font-extrabold text-white leading-tight drop-shadow-lg">
                    Welcome to FEC Residence
                </h1>
                <p class="text-xl md:text-xl text-white mt-4 md:mt-6 leading-relaxed">
                    Discover top-tier living with our thoughtfully designed halls of residence. Your comfort, our priority.
                </p>
            </div>
            <div class="relative mt-6 md:mt-0 md:absolute md:-right-16 w-[80%] md:w-[50%] h-[200px] md:h-[120%] bg-orange-600 rounded-full overflow-hidden shadow-md flex items-center justify-center">
                <img src="{{ asset('images/pngwing.com.png') }}" alt="Welcome"
                     class="w-[10rem] h-[10rem] object-cover opacity-90">
            </div>

        </div>
    </div>

    <!-- Cards Section -->
    <div class="mx-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 mt-12 mb-10">
        <!-- Card Template -->
        <a href="{{ route('residence','north-hall') }}" wire:navigate
            class="relative bg-gradient-to-br from-green-100 via-green-50 to-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition overflow-hidden cursor-pointer">
            <div class="z-10 w-full">
                <h3 class="text-xl md:text-2xl font-bold text-green-800 drop-shadow-md">North Hall</h3>
                <p class="text-2xl md:text-3xl font-extrabold text-green-600 mt-4 drop-shadow-md">Explore New Horizons</p>
                <p class="text-gray-600 mt-2 text-sm">Exceptional Facilities for Every Need</p>
            </div>
            <!-- Decorative Bubbles -->
            <div class="absolute top-4 right-4 flex flex-wrap gap-2">
                <div class="w-6 h-6 bg-green-300 rounded-full opacity-50"></div>
                <div class="w-4 h-4 bg-green-400 rounded-full opacity-60"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full opacity-70"></div>
                <div class="w-5 h-5 bg-blue-300 rounded-full opacity-50"></div>
                <div class="w-4 h-4 bg-yellow-400 rounded-full opacity-60"></div>
                <div class="w-3 h-3 bg-purple-500 rounded-full opacity-70"></div>
            </div>
            <!-- Bottom Half-Circle -->
            <div class="absolute -bottom-7 -right-7 w-24 h-24 bg-green-200 rounded-full shadow-inner"></div>
        </a>

        <!-- South Hall Section -->
        <a href="{{ route('residence','south-hall') }}" wire:navigate
            class="relative bg-gradient-to-br from-orange-100 via-orange-50 to-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition overflow-hidden cursor-pointer">
            <div class="z-10 w-full">
                <h3 class="text-xl md:text-2xl font-bold text-orange-800 drop-shadow-md">South Hall</h3>
                <p class="text-2xl md:text-3xl font-extrabold text-orange-600 mt-4 drop-shadow-md">A Place Like No Other</p>
                <p class="text-gray-600 mt-2 text-sm">Tailored Comfort for You</p>
            </div>
            <!-- Decorative Bubbles -->
            <div class="absolute top-4 right-4 flex flex-wrap gap-2">
                <div class="w-6 h-6 bg-orange-300 rounded-full opacity-50"></div>
                <div class="w-4 h-4 bg-orange-400 rounded-full opacity-60"></div>
                <div class="w-3 h-3 bg-orange-500 rounded-full opacity-70"></div>
                <div class="w-5 h-5 bg-red-300 rounded-full opacity-50"></div>
                <div class="w-4 h-4 bg-pink-400 rounded-full opacity-60"></div>
                <div class="w-3 h-3 bg-yellow-500 rounded-full opacity-70"></div>
            </div>
            <!-- Bottom Half-Circle -->
            <div class="absolute -bottom-7 -right-7 w-24 h-24 bg-orange-200 rounded-full shadow-inner"></div>

        </a>

        <!-- Female Hall Section -->
        <a href="{{ route('residence','female-hall') }}" wire:navigate
            class="relative bg-gradient-to-br from-pink-100 via-pink-50 to-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition overflow-hidden cursor-pointer">
            <div class="z-10 w-full">
                <h3 class="text-xl md:text-2xl font-bold text-pink-800 drop-shadow-md">Female Hall</h3>
                <p class="text-2xl md:text-3xl font-extrabold text-pink-600 mt-4 drop-shadow-md">Feel Safe and Welcome</p>
                <p class="text-gray-600 mt-2 text-sm">Security, Comfort, and Community</p>
            </div>
            <!-- Decorative Bubbles -->
            <div class="absolute top-4 right-4 flex flex-wrap gap-2">
                <div class="w-6 h-6 bg-pink-300 rounded-full opacity-50"></div>
                <div class="w-4 h-4 bg-pink-400 rounded-full opacity-60"></div>
                <div class="w-3 h-3 bg-pink-500 rounded-full opacity-70"></div>
                <div class="w-5 h-5 bg-purple-300 rounded-full opacity-50"></div>
                <div class="w-4 h-4 bg-red-400 rounded-full opacity-60"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full opacity-70"></div>
            </div>
            <!-- Bottom Half-Circle -->
            <div class="absolute -bottom-7 -right-7 w-24 h-24 bg-pink-200 rounded-full shadow-inner"></div>
        </a>
    </div>
</div>
