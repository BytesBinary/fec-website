<div class="landing-about container mx-auto pt-16 px-5 pb-10 mb-10" id="about">
    <p class="text-center mt-10 mb-8 text-3xl md:text-5xl font-bold text-gray-950" >About Us</p>
    <hr class="w-48 h-1 mx-auto bg-gray-400 border-0 rounded dark:bg-gray-700">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
        <!-- Text Section -->
        <div class="w-full p-6 bg-zinc-50 shadow-2xl shadow-gray-500 mt-5 hover:shadow-gray-700 hover:cursor-pointer rounded-lg" >
            <p class="md:text-md text-gray-800 text-justify">
                Faridpur Engineering College (FEC) is a public undergraduate college in Faridpur, Bangladesh.The college is just 2.7 km away from Faridpur city Located at Dr. Kazi Motaher Hossain Road, Char Kamalapur, Baitul Aman, Faridpur. <br>
                <br>
                Construction of the Education Engineering Department began in 2005, financed by the government of Bangladesh. The main work was completed in 2010, while the electricity and water connections were finished in 2013 <br><br>
                The academic activities of the college are managed under the Faculty of Engineering and Technology of Dhaka University and the administrative activities under the Directorate of Technical Education. <br>
            </p>
            <a href="" class="block mt-4">
                <div class="flex justify-center">
                    <button class="flex items-center justify-center space-x-2 w-full py-2 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 hover:cursor-pointer" type="button">
                        <span class="text-base">Read More</span>
                        <x-svg-icon.external-url class="w-5 h-5" />
                    </button>
                </div>
            </a>
        </div>

        <!-- Image Section with Background Image and Overlay -->
        <div class="relative w-full h-96 bg-cover bg-center p-5 bg-zinc-50 shadow-2xl shadow-gray-500 mt-5 hover:shadow-gray-700 hover:cursor-pointer bg-rounded" style="background-image: url('{{ asset('images/gallery/3.jpg') }}');" >
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-40 flex justify-center items-center">
                <!-- Play Button with Animation -->
                <a href="https://www.youtube.com/watch?v=_H9B4iynTY0" class="glightbox pulse p-4 bg-yellow-400 text-white rounded-full shadow-lg transform transition-transform duration-300 hover:scale-110 active:scale-90 active:shadow-inner">
                    <!-- Heroicon Play Icon -->
                    <x-svg-icon.play-button class="size-10" />
                </a>
            </div>
        </div>
    </div>
</div>
