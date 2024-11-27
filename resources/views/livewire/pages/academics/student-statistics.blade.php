<div>
    <div class="container mx-auto p-8">
        <h2 class="text-3xl font-semibold text-center mb-8">University Student Statistics</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          @foreach ($statistics as $index => $stat)
            <div class="{{get_card_class_of_student_staticstics($index)}}">
              <h3 class="text-lg font-medium text-gray-700">{{ $stat['title'] }}</h3>
              <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
              <p class="text-gray-500 mt-1 text-sm">{{ $stat['description'] }}</p>
            </div>
          @endforeach
        </div>
        <div class="flex gap-6 mt-6">
            <div style="background-image: url('{{ asset('images/club/bgg.jpg') }}');" class="border-4 border-indigo-400 bg-cover bg-no-repeat bg-center h-24   rounded-lg">
                <div class="p-4 w-3/4">
                    <h1 class="text-lg">Dynamic Background</h1>
                    <p class="text-sm">Now Style this Saniad!!! fksjd fksdfsjd flks df jlksdfj</p>
                </div>
            </div>
            <div style="background-image: url('{{ asset('images/club/bgg.jpg') }}');" class="border-4 border-indigo-400 bg-cover bg-no-repeat bg-center h-24 rounded-lg">
                <div class="p-4 w-3/4">
                    <h1 class="text-lg">Dynamic Background</h1>
                    <p class="text-sm">Now Style this Saniad!!! fksjd fksdfsjd flks df jlksdfj</p>
                </div>
            </div>
            <div style="background-image: url('{{ asset('images/club/bgg.jpg') }}');" class="border-4 border-indigo-400 bg-cover bg-no-repeat bg-center h-24 rounded-lg">
                <div class="p-4 w-3/4">
                    <h1 class="text-lg">Dynamic Background</h1>
                    <p class="text-sm">Now Style this Saniad!!! fksjd fksdfsjd flks df jlksdfj</p>
                </div>
            </div>
        </div>
    </div>
</div>
