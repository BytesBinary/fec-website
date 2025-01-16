<div>
    <div class="container mx-auto mt-24 p-8 bg-gray-100">

        <h2 class="text-4xl lg:text-6xl font-extrabold text-center mb-5 relative text-transparent bg-clip-text bg-gradient-to-r from-teal-600 via-indigo-700 to-purple-700">
            University Student Statistics
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:p-14 lg:pt-10 gap-6">
            @foreach ($statistics as $stat)
                <div
                    class="relative flex items-center p-6 rounded-2xl bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 shadow-2xl overflow-hidden group transform transition-all duration-300 hover:shadow-3xl">
                    <div
                        class="relative w-full sm:w-2/3 md:w-[74%] z-10 p-4 bg-white rounded-xl shadow-md flex flex-col justify-between group-hover:transform lg:group-hover:translate-x-3 group-hover:scale-[1.05] lg:group-hover:scale-110 group-hover:shadow-lg transition-all duration-500 ease-out">
                        <h3 class="text-2xl font-bold text-gray-800 tracking-wide">{{ $stat['title'] }}</h3>
                        <p class="text-3xl md:text-4xl font-extrabold text-gradient bg-clip-text text-blue-500 mt-4">
                            {{ $stat['value'] }}</p>
                        <p class="text-gray-600 mt-2 text-md md:text-lg sm:text-base">{{ $stat['description'] }}</p>
                    </div>
                    <div
                        class="flex items-center absolute top-[20px] -right-32 transform rotate-6 w-2/3 h-full bg-gradient-to-r from-blue-400 to-purple-700 rounded-full overflow-hidden shadow-lg group-hover:rotate-0 group-hover:translate-x-6 transition-all duration-500 ease-in-out">
                        <img src="{{ asset('images/event/courses.png') }}" alt="Event Image"
                            class="w-2/3 h-[90%] object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-700 ease-out mx-auto pb-12 lg:pb-0"/>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="relative border-8 border-transparent rounded-[40px] overflow-hidden mt-8 lg:mx-11">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-800 to-blue-700 opacity-80"></div>
            <div class="absolute inset-0 bg-black opacity-40 backdrop-blur-lg"></div>
            <div class="absolute inset-0 bg-gradient-to-tl from-[#00cc99] to-[#33ffcc] opacity-70"></div>
            <div class="absolute top-8 left-8 w-24 h-24 bg-[#00bfff] rounded-full opacity-60 transform rotate-45"></div>
            <div class="absolute top-20 right-8 w-32 h-32 bg-[#66ff99] rounded-full opacity-50 transform -rotate-45"></div>
            <div class="absolute bottom-8 left-16 w-48 h-48 bg-[#99ffcc] rounded-full opacity-40 transform rotate-90"></div>
            <div class="absolute bottom-12 right-12 w-16 h-16 bg-[#33cccc] opacity-80"></div>
            <div class="absolute top-24 left-24 w-12 h-12 bg-[#00ffcc] opacity-30 transform -rotate-15"></div>

            <div class="p-12 flex flex-col gap-8 relative z-10">
                <h2
                    class="text-left font-extrabold text-3xl md:text-4xl bg-clip-text text-neutral-900 transition-all duration-500 ease-in-out transform hover:scale-[1.03]">
                    “Engineering is the closest thing to magic that exists in the world."
                    <span class="block mt-4 text-xl text-slate-700 font-semibold">-Elon Musk</span>
                </h2>
            </div>
        </div>


    </div>
</div>
