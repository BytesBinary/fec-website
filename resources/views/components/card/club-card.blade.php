@props([
    'logo' => '',
    'shortName' => '',
    'fullName' => '',
    'description' => '',
    'url' => '',
    'group' => 'Add a location here',
])
<div class="max-w-[350px] mx-auto bg-[#f2f0ef] rounded-lg shadow-md overflow-hidden hover:shadow-lg h-[28rem] flex flex-col transition-all duration-300">
    <div class="relative flex-grow"> <!-- Allow this section to grow -->
        <img class="w-full h-40 object-cover" src="{{ asset($logo) }}" alt="Club Logo">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-60"></div>
        <div class="absolute bottom-0 left-0 p-4">
            <h2 class="text-white text-xl font-bold">{{ $shortName }}</h2>
        </div>
    </div>

    <!-- Club Info Section -->
    <div class="p-6 flex flex-col flex-grow"> <!-- Ensure the content area can expand -->
        <h3 class="text-lg font-bold text-deepBlue">{{ $fullName }}</h3>
        <p class="text-gray-600 mt-4 text-justify">{{ $description }}</p>

        <!-- Contact or Buttons -->
        <div class="mt-4 flex justify-between items-center flex-grow">
            <!-- Placeholder for potential contact or button section if needed -->
        </div>
    </div>

    <!-- Footer: Club Information -->
    <div class="bg-gray-200 px-5 py-4 flex justify-between items-center">
        <div class="text-lg text-gray-500">
            <a href="{{ $group }}" class="text-blue-900 hover:underline hover:text-[white] hover:bg-purple-700 py-2 px-4 rounded transition-all duration-400">{{ $shortName }}</a>
        </div>
        <a href="{{ $url }}" wire:navigate>
            <button class="bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-500 hover:bg-gradient-to-r hover:from-blue-500 hover:via-indigo-500 hover:to-purple-600 text-white py-2 px-4 rounded transition duration-400">Join Now</button>
        </a>
    </div>
</div>
