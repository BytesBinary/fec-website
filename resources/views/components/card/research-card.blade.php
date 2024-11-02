@props([
    'image' => 'images/research/research.png',
    'title' => '',
    'description' => '',
    'date'=>'',
    'url' => '#',
])

<div class="h-[26rem] bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl">
    <img src="{{ asset($image) }}" alt="Image"
        class="w-full h-56 object-cover">
    <div class="p-6 space-y-4">
        <!-- Event Title -->
        <h3 class="text-2xl font-semibold text-gray-800 transition-colors duration-300 hover:text-green-600">
        {{ $title }}    </h3>
        <!-- Event Description -->
        <p class="text-gray-500 text-sm leading-relaxed">{{$description}}</p>

        <!-- Event Date & Link -->
        <div class="flex items-center justify-between mt-4 text-sm">
            <span class="text-gray-400">{{$date}}</span>
            <a href="{{$url}}"
                class="text-green-600 hover:text-green-800 font-medium transition-colors duration-300">Learn
                More →</a>
        </div>
    </div>
</div>
