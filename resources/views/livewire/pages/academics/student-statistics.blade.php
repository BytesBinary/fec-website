<div>
    <div class="container mx-auto p-8">

        <h2 class="text-6xl font-extrabold text-center mb-8 mt-4 relative text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-pink-500 to-yellow-500">
            University Student Statistics
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:p-14 gap-6">
            @foreach ($statistics as $stat)
                <div
                    class="relative flex items-center p-6 rounded-2xl bg-gradient-to-r from-teal-300 via-teal-400 to-teal-500 shadow-2xl overflow-hidden group transform transition-all duration-300 hover:shadow-3xl">
                    <div
                        class="relative w-full sm:w-2/3 z-10 p-6 bg-white rounded-xl shadow-md flex flex-col justify-between group-hover:transform group-hover:translate-x-3 group-hover:scale-110 group-hover:shadow-lg transition-all duration-500 ease-out">
                        <h3 class="text-3xl font-semibold text-gray-800 tracking-wide">{{ $stat['title'] }}</h3>
                        <p class="text-5xl font-extrabold text-gradient bg-clip-text text-blue-500 mt-4">
                            {{ $stat['value'] }}</p>
                        <p class="text-gray-600 mt-2 text-lg sm:text-base">{{ $stat['description'] }}</p>
                    </div>
                    <div
                        class="absolute top-[20px] -right-24 transform rotate-6 w-2/3 h-full bg-gradient-to-r from-blue-500 to-purple-600 rounded-full overflow-hidden shadow-lg group-hover:rotate-0 group-hover:translate-x-6 transition-all duration-500 ease-in-out">
                        <img src="{{ asset('images/event/cap.png') }}" alt="Event Image"
                            class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-700 ease-out" />
                    </div>
                </div>
            @endforeach
        </div>
        <div class="relative border-8 border-transparent rounded-[40px] overflow-hidden mt-8 mx-11">
            <div class="absolute inset-0 bg-gradient-to-br from-[#ff005c] to-[#ff6f61] opacity-80"></div>
            <div class="absolute inset-0 bg-black opacity-40 backdrop-blur-lg"></div>
            <div class="absolute inset-0 bg-gradient-to-tl from-[#ff6f61] to-[#ff8c00] opacity-70"></div>
            <div class="absolute top-8 left-8 w-24 h-24 bg-[#ff5e5e] rounded-full opacity-60 transform rotate-45"></div>
            <div class="absolute top-20 right-8 w-32 h-32 bg-[#fddc74] rounded-full opacity-50 transform -rotate-45">
            </div>
            <div class="absolute bottom-8 left-16 w-48 h-48 bg-[#ffec40] rounded-full opacity-40 transform rotate-90">
            </div>
            <div class="absolute bottom-12 right-12 w-16 h-16 bg-[#ff6f61] opacity-80"></div>
            <div class="absolute top-24 left-24 w-12 h-12 bg-[#ff8c00] opacity-30 transform -rotate-15"></div>
            <div class="p-12 flex flex-col gap-8 relative z-10">
                <h2
                    class="text-left font-extrabold text-3xl md:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#ff5e5e] to-[#fddc74] hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-l from-[purple] to-indigo-700 transition-all duration-500 ease-in-out transform hover:scale-[1.03]">
                    “Engineers like to solve problems. If there are no problems handily available, they will create
                    their own problems.”
                    <span class="block mt-4 text-xl text-[#ffec40] font-semibold">- Scott Adams</span>
                </h2>
            </div>
        </div>
    </div>
</div>
