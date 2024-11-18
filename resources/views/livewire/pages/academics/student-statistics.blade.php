<div>
    <div class="container mx-auto p-8">
        <h2 class="text-3xl font-semibold text-center mb-8">University Student Statistics</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach ($statistics as $index => $stat)
            {{-- <div class="{{get_card_class_of_student_staticstics($index)}}"> --}}
                <div class="relative flex items-center p-4 rounded-lg bg-blue-50 shadow-md overflow-hidden">
                    <div class="w-2/3 z-10">
                        <h3 class="text-lg font-medium text-black">{{ $stat['title'] }}</h3>
                        <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
                        <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                    </div>
                    <div class="absolute -right-20 w-1/2 h-full bg-blue-300 rounded-full overflow-hidden">
                        <img src="{{asset('images/event/cap.png')}}" alt="Books" class=" w-full h-full p-2 object-cover" />
                    </div>
                </div>
            {{-- </div> --}}
          @endforeach
        </div>
            <div class="relative flex items-center p-4 rounded-lg bg-blue-50 shadow-md overflow-hidden w-1/3">
                <div class="w-2/3 z-10">
                    <h3 class="text-xl font-medium text-black">{{ $stat['title'] }}</h3>
                  <p class="text-4xl font-bold text-red-600 mt-2">{{ $stat['value'] }}</p>
                  <p class="text-gray-600 mt-1 text-sm">{{ $stat['description'] }}</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-red-400 rounded-full overflow-hidden">
                  <img src="{{asset('images/event/cap.png')}}" alt="Books" class=" w-full h-full p-2 object-cover" />
                </div>
            </div>
            </div>
          </div>

        </div>

    </div>
</div>
