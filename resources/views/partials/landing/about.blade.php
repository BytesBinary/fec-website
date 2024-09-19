<div class="landing-about container mx-auto pt-5 px-5 pb-10 my-10">
    <p class="text-center mt-10 mb-8 text-3xl md:text-5xl font-bold text-gray-950" data-aos="fade-up">About Us</p>
    <hr class="w-48 h-1 mx-auto bg-gray-400 border-0 rounded dark:bg-gray-700">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
        <!-- Text Section -->
        <div class="w-full p-5 bg-zinc-50 shadow-2xl shadow-gray-500 mt-5 hover:shadow-gray-700 hover:cursor-pointer rounded-lg" data-aos="fade-up">
            <p class="md:text-md text-gray-800">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum maiores quidem dignissimos consectetur. In molestias adipisci, eaque corrupti exercitationem cupiditate obcaecati. Asperiores ipsum facilis eos. Nemo asperiores eligendi perspiciatis numquam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores reiciendis eveniet nesciunt voluptas, nobis non perferendis cupiditate consectetur voluptates odit eos quia facilis officiis eius molestias quis corrupti repudiandae! Tempora.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quod, animi laboriosam quasi odit quibusdam fugit minima nesciunt nostrum, rem maxime neque repellat omnis eius. Repellendus hic esse facilis ullam!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
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
        <div class="relative w-full h-96 bg-cover bg-center p-5 bg-zinc-50 shadow-2xl shadow-gray-500 mt-5 hover:shadow-gray-700 hover:cursor-pointer bg-rounded" style="background-image: url('{{ asset('images/gallery/3.jpg') }}');" data-aos="fade-up">
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
