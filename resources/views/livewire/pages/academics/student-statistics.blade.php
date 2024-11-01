@php $statistics = config('stats.statistics') @endphp
<div>
    <div class="container mx-auto p-8">
        <h2 class="text-3xl font-semibold text-center mb-8">University Student Statistics</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          @foreach ($statistics as $index => $stat)
            <div class="{{ ($index/4) & 1 ? ($index % 2 == 0 ? 'bg-lime-50' : 'bg-green-100') : ($index % 2 != 0 ? 'bg-lime-50' : 'bg-green-100') }} shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition duration-300">
              <h3 class="text-lg font-medium text-gray-700">{{ $stat['title'] }}</h3>
              <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stat['value'] }}</p>
              <p class="text-gray-500 mt-1 text-sm">{{ $stat['description'] }}</p>
            </div>
          @endforeach
        </div>
    </div>
</div>
