<div>
    {{-- In work, do what you enjoy. --}}


    <!-- Main Gallery Section -->
<section class="bg-white py-12">
    <div class="container mx-auto px-4 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Gallery of {{$dept}}</h2>
            <p class="text-gray-600 mt-4 max-w-xl mx-auto">A glimpse into the memorable moments and exciting activities of the {{$dept}} department.</p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Image 1 -->
            <div class="relative group">
                <img src="{{asset($img1)}}" alt="Gallery Image 1" class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                    <span class="text-white text-lg font-semibold">Event 1</span>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="relative group">
                <img src="{{asset($img2)}}" alt="Gallery Image 2" class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                    <span class="text-white text-lg font-semibold">Event 2</span>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="relative group">
                <img src="{{asset($img3)}}" alt="Gallery Image 3" class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                    <span class="text-white text-lg font-semibold">Event 3</span>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="relative group">
                <img src="{{asset($img4)}}" alt="Gallery Image 4" class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                    <span class="text-white text-lg font-semibold">Event 4</span>
                </div>
            </div>

            <!-- Image 5 -->
            <div class="relative group">
                <img src="{{asset($img5)}}" alt="Gallery Image 5" class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                    <span class="text-white text-lg font-semibold">Event 5</span>
                </div>
            </div>

            <!-- Image 6 -->
            <div class="relative group">
                <img src="{{asset($img6)}}" alt="Gallery Image 6" class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                    <span class="text-white text-lg font-semibold">Event 6</span>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
