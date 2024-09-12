<div class="container mx-auto p-5 my-10 bg-white shadow-inner py-16 rounded-lg">
  <p class="text-center mt-10 mb-8 text-5xl font-bold text-gray-950">Our Facilities</p>
  <hr class="w-48 h-1 mx-auto bg-gray-400 border-0 rounded dark:bg-gray-700">
  <div class="grid grid-cols-1 mt-10 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <!-- Organized Campus Card -->
    <a href="{{ asset('images/gallery/1.jpg') }}" class="glightbox" data-glightbox="campus-gallery" data-title="Organized Campus">
      <div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300 hover:cursor-zoom-in">
        <div class="mb-4">
          <x-svg-icon.academic-cap />
        </div>
        <h3 class="text-2xl font-bold mb-2">Organized Campus</h3>
        <p class="text-lg"></p>
      </div>
    </a>
    
    <!-- Best Lab Facilities Card -->
    <a href="{{ asset('images/gallery/4.jpg') }}" class="glightbox" data-glightbox="lab-gallery" data-title="Best Lab Facilities">
      <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300 hover:cursor-zoom-in">
        <div class="mb-4">
          <x-svg-icon.academic-cap />
        </div>
        <h3 class="text-2xl font-bold mb-2">Best Lab Facilities</h3>
        <p class="text-lg"></p>
      </div>
    </a>

    <!-- Top Instructors Card -->
    <a href="{{ asset('images/gallery/7.jpg') }}" class="glightbox" data-glightbox="instructors-gallery" data-title="Top Instructors">
      <div class="bg-gradient-to-r from-teal-400 to-cyan-500 text-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300 hover:cursor-zoom-in">
        <div class="mb-4">
          <x-svg-icon.academic-cap />
        </div>
        <h3 class="text-2xl font-bold mb-2">Top Instructors</h3>
        <p class="text-lg"></p>
      </div>
    </a>

    <!-- Great Fellowship Card -->
    <a href="{{ asset('images/gallery/4.jpg') }}" class="glightbox" data-glightbox="fellowship-gallery" data-title="Great Fellowship">
      <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300 hover:cursor-zoom-in">
        <div class="mb-4">
          <x-svg-icon.academic-cap />
        </div>
        <h3 class="text-2xl font-bold mb-2">Great Fellowship</h3>
        <p class="text-lg"></p>
      </div>
    </a>
  </div>
</div>
