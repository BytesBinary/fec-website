<div>
    <div class="container mx-auto p-8">
        <h2 class="text-3xl font-semibold text-center mb-8">University Student Statistics</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:p-14 gap-6">
            @foreach ($statistics as $index => $stat)
                {{-- <div class="{{get_card_class_of_student_staticstics($index)}}"> --}}
                {{-- <div class="relative flex items-center p-4 rounded-lg bg-blue-50 shadow-md overflow-hidden">
                    <div class="w-2/3 z-10">
                        <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                        <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
                        <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                    </div>
                    <div class="absolute -right-20 w-1/2 h-full bg-blue-300 rounded-full overflow-hidden">
                        <img src="{{asset('images/event/cap.png')}}" alt="Books" class=" w-full h-full p-2 object-cover" />
                    </div>
                </div> --}}
                {{-- </div> --}}
            @endforeach
            {{-- -------------------------------------------------------------------- --}}
            <div class="relative flex items-center p-4 rounded-lg bg-blue-100 shadow-md overflow-hidden">
                <div class="w-2/3 z-10">
                    <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                    <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
                    <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-blue-400 rounded-full overflow-hidden">
                    <img src="{{ asset('images/event/cap.png') }}" alt="Books"
                        class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            <div class="relative flex items-center p-4 rounded-lg bg-green-100   shadow-md overflow-hidden">
                <div class="w-2/3 z-10">
                    <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                    <p class="text-4xl font-bold text-green-600 mt-2">{{ $stat['value'] }}</p>
                    <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-green-400 rounded-full overflow-hidden">
                    <img src="{{ asset('images/event/cap.png') }}" alt="Books"
                        class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            <div class="relative flex items-center p-4 rounded-lg bg-blue-100 shadow-md overflow-hidden">
                <div class="w-2/3 z-10">
                    <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                    <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
                    <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-blue-400 rounded-full overflow-hidden">
                    <img src="{{ asset('images/event/cap.png') }}" alt="Books"
                        class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            <div class="relative flex items-center p-4 rounded-lg bg-green-100   shadow-md overflow-hidden">
                <div class="w-2/3 z-10">
                    <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                    <p class="text-4xl font-bold text-green-600 mt-2">{{ $stat['value'] }}</p>
                    <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-green-400 rounded-full overflow-hidden">
                    <img src="{{ asset('images/event/cap.png') }}" alt="Books"
                        class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            <div class="relative flex items-center p-4 rounded-lg bg-blue-100 shadow-md overflow-hidden">
                <div class="w-2/3 z-10">
                    <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                    <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
                    <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-blue-400 rounded-full overflow-hidden">
                    <img src="{{ asset('images/event/cap.png') }}" alt="Books"
                        class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            <div class="relative flex items-center p-4 rounded-lg bg-green-100   shadow-md overflow-hidden">
                <div class="w-2/3 z-10">
                    <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                    <p class="text-4xl font-bold text-green-600 mt-2">{{ $stat['value'] }}</p>
                    <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-green-400 rounded-full overflow-hidden">
                    <img src="{{ asset('images/event/cap.png') }}" alt="Books"
                        class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            <div class="relative flex items-center p-4 rounded-lg bg-blue-100 shadow-md overflow-hidden">
                <div class="w-2/3 z-10">
                    <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                    <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
                    <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-blue-400 rounded-full overflow-hidden">
                    <img src="{{ asset('images/event/cap.png') }}" alt="Books"
                        class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            <div class="relative flex items-center p-4 rounded-lg bg-green-100   shadow-md overflow-hidden">
                <div class="w-2/3 z-10">
                    <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                    <p class="text-4xl font-bold text-green-600 mt-2">{{ $stat['value'] }}</p>
                    <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-green-400 rounded-full overflow-hidden">
                    <img src="{{ asset('images/event/cap.png') }}" alt="Books"
                        class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            {{-- -------------------------------------------------------------------- --}}

        </div>
        <div class="border ring-2 hover:ring-4 hover:ring-purple-600 bg-purple-200 rounded-tl-3xl rounded-br-3xl mt-10">
            <div class="p-6 flex flex-col gap-5">
            <h2 class="text-left font-medium tracking-wide text-xl md:text-2xl">
                Engineers like to solve problems. If there are no problems handily available, they will create their own problems. - Scott Adams
            </h2>
            <h2 class="text-left font-medium tracking-wide text-xl md:text-2xl">
                Engineering is achieving function while avoiding failure. - Henry Petroski
            </h2>
            <h2 class="text-left font-medium tracking-wide text-xl md:text-2xl">
                Engineering or technology is all about using the power of science to make life better for people, to reduce cost, to improve comfort, to improve productivity, etc.” – N. R. Narayana Murthy
            </h2>
        </div>
        </div>

    </div>
</div>

</div>

</div>
</div>
