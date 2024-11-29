@props([
    'image' => 'images/research/research.png',
    'title' => '',
    'description' => '',
    'date' => '',
    'url' => '#',
])

<div class=" w-[85%] lg:w-[550px] bg-white rounded-xl shadow-lg overflow-hidden transition-transform transform group hover:scale-[1.02] hover:shadow-md hover:shadow-gray-400 duration-300">
    <!-- Image Section -->
    <div class="relative">
        <img src="{{ asset($image) }}" alt="Card Image"
            class="w-full h-64 object-cover transition-transform duration-500">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-60 transition duration-500"></div>
    </div>

    <!-- Content Section -->
    <div class="p-6 space-y-5 text-left">
        <!-- Title -->
        <div class="">
        <h3 class="text-2xl font-extrabold text-gray-900 transition-colors duration-300 hover:bg-gradient-to-r hover:from-purple-700 hover:via-indigo-600 hover:to-blue-600 hover:text-transparent hover:bg-clip-text">
            {{ $title }}
        </h3>
        </div>

        <!-- Description -->
        <p class="text-gray-600 text-sm leading-relaxed">
            {{ $description }}
        </p>

        <!-- Author Information -->
        <div class="flex items-center gap-4 mt-4">
            <img src="{{ asset($image) }}" alt="Author Name"
                class="w-12 h-12 rounded-full object-cover shadow-md ring-2 ring-indigo-600">
            <p class="text-lg font-medium text-gray-800">
                Saniad Islam
            </p>
        </div>

        <hr class="p-[1px] bg-gray-200">

        <!-- Footer: Date & Button -->
        <div class="flex items-center justify-between">
            <!-- Date -->
            <span class="text-gray-700 text-sm font-medium flex items-center">
                Published Date : {{ $date }}
            </span>

            <!-- Learn More Button -->
            <a href="{{ $url }}"
                class="text-black font-semibold px-6 rounded-lg transition-transform transform hover:scale-105 after:content-['→'] after:text-xl">
                Learn More
            </a>
        </div>
    </div>
</div>
