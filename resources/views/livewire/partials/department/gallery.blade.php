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
          @foreach ($img as $key => $image)
          <div class="relative group">
            <img src="{{asset($image)}}" alt="Gallery Image" class="w-full h-full object-cover rounded-lg shadow-lg">
            <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                <span class="text-white text-lg font-semibold">{{$key}}</span>
            </div>
        </div>
          @endforeach
        </div>
    </div>
</section>

</div>
