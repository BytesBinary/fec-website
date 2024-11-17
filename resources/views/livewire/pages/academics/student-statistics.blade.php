<div>
    <div class="container mx-auto p-8">
        <h2 class="text-3xl font-semibold text-center mb-8">University Student Statistics</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          @foreach ($statistics as $index => $stat)
            <div class="{{get_card_class_of_student_staticstics($index)}}">
              <h3 class="text-lg font-medium text-gray-700">{{ $stat['title'] }}</h3>
              <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
              <p class="text-gray-500 mt-1 text-sm">{{ $stat['description'] }}</p>
            </div>
          @endforeach
        </div>

        <div class="flex flex-wrap gap-6 mt-6">
            <div class="relative flex items-center p-4 border-4 border-blue-300 rounded-lg bg-blue-50 shadow-md overflow-hidden w-full md:w-[calc(33%-1rem)]">
              <div class="w-2/3 z-10">
                <h2 class="text-2xl font-bold text-gray-800">Dynamic Background</h2>
                <p class="mt-2 text-sm text-gray-600">Now Style this!!</p>
              </div>
              <div class="absolute -right-20 w-1/2 h-full bg-blue-300 rounded-full overflow-hidden">
                <img src="{{asset('images/event/books.png')}}" alt="Books" class=" w-full h-full p-2" />
              </div>
            </div>
            <div class="relative flex items-center p-4 border-4 border-blue-300 rounded-lg bg-blue-50 shadow-md overflow-hidden w-full md:w-[calc(33%-1rem)]">
                <div class="w-2/3 z-10">
                  <h2 class="text-2xl font-bold text-gray-800">Dynamic Background</h2>
                  <p class="mt-2 text-sm text-gray-600">Now Style this Saniad!!! fksjd fksdfsjd flks df jlksdfj</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-blue-300 rounded-full overflow-hidden">
                  <img src="{{asset('images/event/books.png')}}" alt="Books" class=" w-full h-full p-2" />
                </div>
              </div>
              <div class="relative flex items-center p-4 border-4 border-blue-300 rounded-lg bg-blue-50 shadow-md overflow-hidden w-full md:w-[calc(33%-1rem)]">
                <div class="w-2/3 z-10">
                  <h2 class="text-2xl font-bold text-gray-800">Dynamic Background</h2>
                  <p class="mt-2 text-sm text-gray-600">Now Style this Saniad!!! fksjd fksdfsjd flks df jlksdfj</p>
                </div>
                <div class="absolute -right-20 w-1/2 h-full bg-blue-300 rounded-full overflow-hidden">
                  <img src="{{asset('images/event/cap.png')}}" alt="Books" class=" w-full h-full p-2" />
                </div>
              </div>
            </div>
          </div>

        </div>

    </div>
</div>
