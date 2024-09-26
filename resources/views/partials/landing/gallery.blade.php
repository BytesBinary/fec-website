<div class="relative mx-auto p-5 my-10 py-16 bg-fixed bg-cover bg-center" style="background-image: url('{{ asset('images/gallery/4.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>

    <div class="relative z-10 text-center py-8">
        <h1 class="text-center mb-8 text-3xl md:text-5xl font-bold text-white" data-aos="fade-up">FEC Galleries</h1>
        <div class="border-t-4 border-yellow-500 w-28 mx-auto mb-8 mt-5"></div>
    </div>

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Campus -->
        <a href="{{ asset('images/gallery/1.jpg') }}" class="glightbox" data-glightbox="campus-gallery" data-title="Organized Campus">
            <div class="bg-lime-200 p-8 rounded-lg shadow-lg shadow-lime-200 transform hover:scale-105 transition duration-300 hover:cursor-zoom-in" data-aos="fade-up">
                <h3 class="text-2xl font-bold mb-2">Campus Gallery</h3>
                <p class="text-lg"></p>
            </div>
        </a>

        <!-- Lab -->
        <a href="{{ asset('images/gallery/4.jpg') }}" class="glightbox" data-glightbox="lab-gallery" data-title="Best Lab Facilities">
            <div class="bg-lime-100 p-8 rounded-lg shadow-lg shadow-lime-100 transform hover:scale-105 transition duration-300 hover:cursor-zoom-in" data-aos="fade-down">
                <h3 class="text-2xl font-bold mb-2">Labs Gallery</h3>
                <p class="text-lg"></p>
            </div>
        </a>

        <!-- Events -->
        <a href="{{ asset('images/gallery/4.jpg') }}" class="glightbox" data-glightbox="top-instructor" data-title="Top Instructor">
            <div class="bg-yellow-100 p-8 rounded-lg shadow-lg shadow-yellow-100 transform hover:scale-105 transition duration-300 hover:cursor-zoom-in" data-aos="fade-up">
                <h3 class="text-2xl font-bold mb-2">Events Gallery</h3>
                <p class="text-lg"></p>
            </div>
        </a>

        <!-- Batches -->
        <a href="{{ asset('images/gallery/4.jpg') }}" class="glightbox" data-glightbox="<h1>fellowship-gallery</h1>" data-title="Great Fellowship">
            <div class="bg-yellow-200 p-8 rounded-lg shadow-lg shadow-yellow-200 transform hover:scale-105 transition duration-300 hover:cursor-zoom-in" data-aos="fade-down">
                <h3 class="text-2xl font-bold mb-2">Batches Gallery</h3>
                <p class="text-lg"></p>
            </div>
        </a>
    </div>
</div>
