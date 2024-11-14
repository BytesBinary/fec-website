@props([
    'pic' => '',
    'title' => '',
    'date' => '',
    'url' => '',
    'location' => '',
    'interestCount' => 0,
])

<div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col transition-transform duration-300 hover:scale-105">
    <!-- Header Image and Main Info -->
    <div class="flex justify-between p-4 bg-teal-50 rounded-t-lg">
        <div class="w-full">
            <img class="rounded-tl-lg" src="{{ asset($pic) }}" alt="Event pic">
            <div class="bg-gray-200 p-4">
                <h2 class="text-xl font-semibold text-gray-800 hover:text-teal-600 transition-colors duration-200">{{ $title }}</h2>
                <p class="text-sm text-gray-500 mt-1">{{ $location }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $location }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $location }}</p>
                <span class="text-sm text-indigo-600 flex items-center mt-2">
                    <i class="fas fa-star mr-1"></i> {{ $interestCount }} interested
                </span>
                <a href="{{ $url }}" wire:navigate>
                    <button class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded-lg transition-colors duration-200 mt-4 w-full shadow-md hover:shadow-lg">
                        Learn More
                    </button>
                </a>
            </div>
        </div>

        <!-- Date (Vertical Lettered Text) -->
        <div class="w-12 flex items-center justify-center bg-gradient-to-b from-teal-100 to-teal-200 rounded-tr-lg rounded-br-lg p-2 shadow-inner">
            <div class="flex flex-col items-center space-y-1">
                @foreach(str_split($date) as $letter)
                    <span class="text-lg font-bold text-teal-700">{{ $letter }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>
