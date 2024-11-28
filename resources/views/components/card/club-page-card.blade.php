@props([
    'image'     => '',
    'title'     => '',
    'short_des' => '',
    'route'     => '',
])



<div class="flex flex-col w-full max-w-4xl mx-auto my-6 items-center bg-gradient-to-br from-white via-gray-100 to-gray-50 shadow-lg rounded-lg hover:cursor-pointer md:flex-row relative overflow-hidden">
    <!-- Abstract Background Shapes -->
    
    <div class="absolute inset-0 z-0">
        <!-- Gradient Circular Blobs -->
        <div class="absolute -top-10 left-16 w-32 md:w-40 h-32 md:h-40 bg-gradient-to-br from-blue-400 to-teal-500 opacity-30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-10 w-48 md:w-64 h-48 md:h-64 bg-gradient-to-bl from-indigo-300 to-purple-400 opacity-40 rounded-full blur-2xl"></div>

        <!-- Highlights -->
        <div class="absolute top-1/3 right-1/4 w-16 md:w-20 h-16 md:h-20 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/3 left-1/4 w-24 md:w-32 h-24 md:h-32 bg-gray-300 opacity-5 rounded-full blur-2xl"></div>
    </div>

    <!-- Image -->
    <img class="object-cover w-full h-48 sm:h-64 md:w-80 md:h-auto rounded-t-lg md:rounded-l-lg shadow-md"
         src="{{ asset($image) }}" alt="{{ $title }}">

    <!-- Content -->
    <div class="flex flex-col justify-between p-4 md:p-6 leading-normal z-10 w-full md:w-3/4">
        <!-- Title -->
        <h5 class="mb-2 text-xl sm:text-2xl md:text-3xl font-extrabold tracking-tight text-gray-900">
            {{ $title }}
        </h5>
        <!-- Divider -->
        <hr class="mb-3 border-gray-300">
        <!-- Description -->
        <p class="mb-3 text-sm sm:text-base md:text-lg font-medium text-gray-700">
            {{ $short_des }}
        </p>
        <!-- Button -->
        <div class="card-actions mt-auto flex justify-center">
            <button
                {{-- href="{{route($route)}}" wire:navigate --}}
                class="w-full max-w-md bg-gradient-to-tr from-blue-500 via-purple-500 to-pink-500 text-white
                hover:from-blue-600 hover:to-pink-600 hover:shadow-lg rounded-full py-2 sm:py-3 flex items-center justify-center
                space-x-4 shadow-md transition-all duration-300 ease-in-out">
                <!-- Button Text -->
                <span class="text-sm sm:text-base md:text-lg font-semibold">Explore Now</span>

                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 text-white sm:w-7 sm:h-7"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
            >
                <circle
                    cx="12"
                    cy="12"
                    r="10"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M10 8l4 4-4 4"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
            </button>
        </div>
    </div>
</div>
