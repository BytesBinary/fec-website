<div class="relative mx-auto p-5 my-10 py-16 bg-fixed bg-cover bg-center" style="background-image: url('{{ asset('images/gallery/4.jpg') }}');">
  {{-- <p class="text-center mt-10 mb-8 text-3xl md:text-5xl font-bold text-gray-950">Our Facilities</p>
  <hr class="w-48 h-1 mx-auto bg-gray-400 border-0 rounded dark:bg-gray-700"> --}}
  <div class="absolute inset-0 bg-black opacity-50 z-0"></div>

  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
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
    <a href="{{ asset('images/gallery/4.jpg') }}" class="glightbox" data-glightbox="top-instructor" data-title="Top Instructor">
      <div class="bg-gradient-to-r from-teal-400 to-cyan-500 text-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300 hover:cursor-zoom-in">
        <div class="mb-4">
          <x-svg-icon.academic-cap />
        </div>
        <h3 class="text-2xl font-bold mb-2">Top Instructors</h3>
        <p class="text-lg"></p>
      </div>
    </a>

    <!-- Great Fellowship Card -->
    <a href="{{ asset('images/gallery/4.jpg') }}" class="glightbox" data-glightbox="<h1>fellowship-gallery</h1>" data-title="Great Fellowship">
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
