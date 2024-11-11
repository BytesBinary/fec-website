@props([
    'logo' => '',
    'shortName' => '',
    'fullName' => '',
    'description' => '',
    'url' => '',
    'group' => 'Add a location here',
])
<div class="max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 h-[28rem] flex flex-col">
    <div class="relative flex-grow"> <!-- Allow this section to grow -->
        <img class="w-full h-40 object-cover" src="{{ asset($logo) }}" alt="Club Logo">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-60"></div>
        <div class="absolute bottom-0 left-0 p-4">
            <h2 class="text-white text-xl font-bold">{{ $shortName }}</h2>
        </div>
    </div>

    <!-- Club Info Section -->
    <div class="p-6 flex flex-col flex-grow"> <!-- Ensure the content area can expand -->
        <h3 class="text-lg font-bold text-gray-800">{{ $fullName }}</h3>
        <p class="text-gray-600 mt-2">{{ $description }}</p>

        <!-- Contact or Buttons -->
        <div class="mt-4 flex justify-between items-center flex-grow">
            <!-- Placeholder for potential contact or button section if needed -->
        </div>
    </div>

    <!-- Footer: Club Information -->
    <div class="bg-gray-100 px-5 py-4 flex justify-between items-center">
        <div class="text-lg text-gray-500">
            <a href="{{ $group }}" class="hover:text-blue-900 hover:text-xl hover:underline text-blue-600">{{ $shortName }}</a>
        </div>
        <a href="{{ $url }}" wire:navigate>
            <button class="bg-lime-500 hover:bg-lime-600 text-white py-2 px-4 rounded transition-colors duration-200">Join Now</button>
        </a>
    </div>
</div>
