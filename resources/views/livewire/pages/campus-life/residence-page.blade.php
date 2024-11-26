<body class="m-0 bg-gray-100">
    <div class="mx-auto lg:w-3/4">
        <!-- Section with Background Image -->

        {{-- option 1 --}}
        <section
            class="overflow-hidden relative py-10 mt-5 text-white bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 rounded-lg shadow-2xl">
            <!-- Abstract Design -->
            <div class="absolute inset-0">
                <!-- Layered Abstract Shapes -->
                <div class="absolute top-0 left-16 w-72 h-72 bg-yellow-400 opacity-30 transform rotate-45"></div>
                <div class="absolute w-96 h-96 bg-white opacity-10 transform rotate-[60deg] top-10 right-20"></div>
                <div class="absolute bottom-0 left-10 w-80 h-80 bg-teal-500 opacity-40 transform rotate-12"></div>
                <div class="absolute w-60 h-60 bg-indigo-600 opacity-25 transform rotate-[45deg] bottom-5 right-16">
                </div>
            </div>

            <!-- Black Transparent Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-40 rounded-lg"></div>

            <!-- Content -->
            <div class="container flex relative flex-col justify-between items-center px-6 mx-auto md:flex-row">
                <div class="text-center md:text-left">
                    <h1 class="mb-4 text-5xl font-extrabold">South Hall</h1>
                    <p class="text-lg italic">Empowering Students for a Bright Future</p>
                </div>
                <div class="flex mt-6 space-x-4 md:mt-0">
                    <a href="#housing"
                        class="px-6 py-3 font-medium text-white bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700">Housing
                        & Dining</a>
                    <a href="#facilities"
                        class="px-6 py-3 font-medium text-white bg-green-600 rounded-lg shadow-lg hover:bg-green-700">Facilities</a>
                </div>
            </div>
        </section>


        {{-- option 2 --}}

        <section
            class="overflow-hidden relative py-10 mt-5 text-white bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 rounded-lg shadow-2xl">
            <!-- Abstract Design -->
            <div class="absolute inset-0">
                <!-- Layered Abstract Shapes -->
                <div class="absolute top-0 left-16 w-72 h-72 bg-pink-800 opacity-30 transform rotate-45"></div>
                <div class="absolute w-96 h-96 bg-white opacity-10 transform rotate-[60deg] top-10 right-20"></div>
                <div class="absolute bottom-0 left-10 w-80 h-80 bg-orange-500 opacity-40 transform rotate-12"></div>
                <div class="absolute w-60 h-60 bg-blue-700 opacity-25 transform rotate-[45deg] bottom-5 right-16"></div>
            </div>

            <!-- Black Transparent Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-40 rounded-lg"></div>

            <!-- Content -->
            <div class="container flex relative flex-col justify-between items-center px-6 mx-auto md:flex-row">
                <div class="text-center md:text-left">
                    <h1 class="mb-4 text-5xl font-extrabold">South Hall</h1>
                    <p class="text-lg italic">Empowering Students for a Bright Future</p>
                </div>
                <div class="flex mt-6 space-x-4 md:mt-0">
                    <a href="#housing"
                        class="px-6 py-3 font-medium text-white bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700">Housing
                        & Dining</a>
                    <a href="#facilities"
                        class="px-6 py-3 font-medium text-white bg-green-600 rounded-lg shadow-lg hover:bg-green-700">Facilities</a>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <div class="flex flex-col mt-5 bg-white rounded-t-lg shadow-lg md:flex-col lg:flex-row">
            <!-- About Section -->
            <div class="flex-1 p-4 px-6">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">About South Hall</h2>
                <p class="mb-2 text-xl text-justify text-gray-600">
                    South Hall offers top-tier accommodations with modern amenities for 160 students. The hall
                    features a fully equipped kitchen, a reading room, and 3 nutritious meals a day to ensure a
                    comfortable and balanced lifestyle for its residents. Additionally, a guest room is available
                    for visitors.
                </p>

                <!-- Housing and Dining -->
                <div class="mt-3 mb-6 text-justify">
                    <h2 id="housing" class="mb-4 text-3xl font-semibold text-gray-900">Housing</h2>
                    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                        <table class="min-w-full border border-gray-200">
                            <thead>
                                <tr class="text-gray-700 bg-gray-200">
                                    <th class="px-6 py-3 font-semibold text-center uppercase border-b border-gray-300">
                                        Total Rooms</th>
                                    <th class="px-6 py-3 font-semibold text-center uppercase border-b border-gray-300">
                                        Capacity</th>
                                    <th class="px-6 py-3 font-semibold text-center uppercase border-b border-gray-300">
                                        Occupied</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-center text-gray-800">40</td>
                                    <td class="px-6 py-4 font-medium text-center text-gray-800">160</td>
                                    <td class="px-6 py-4 font-medium text-center text-gray-800">
                                        <div class="flex flex-col">
                                            <span>158</span>
                                            <div class="mt-1 w-full h-2.5 bg-gray-200 rounded-full">
                                                <div class="h-2.5 bg-green-500 rounded-full" style="width: 98%;">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-5 mb-6 text-justify">
                    <h2 class="mb-4 text-3xl font-semibold text-gray-900">Dining Schedule</h2>
                    <div class="relative border-l-2 border-blue-500">
                        <div class="mb-8 ml-6">
                            <div class="px-4 py-3 text-blue-800 bg-blue-100 rounded-lg shadow">
                                <h3 class="text-xl font-bold">Breakfast</h3>
                                <p class="mt-2 text-gray-600">8:00 AM - 10:00 AM</p>
                                <p class="mt-1 text-sm text-gray-500">Khichuri, Mixed Vegetables (Monday)</p>
                            </div>
                        </div>
                        <div class="mb-8 ml-6">
                            <div class="px-4 py-3 text-green-800 bg-green-100 rounded-lg shadow">
                                <h3 class="text-xl font-bold">Lunch</h3>
                                <p class="mt-2 text-gray-600">1:00 PM - 3:00 PM</p>
                                <p class="mt-1 text-sm text-gray-500">Rice, Chicken Curry, Dal (Wednesday: Fish
                                    Curry)</p>
                            </div>
                        </div>
                        <div class="ml-6">
                            <div class="px-4 py-3 text-yellow-800 bg-yellow-100 rounded-lg shadow">
                                <h3 class="text-xl font-bold">Dinner</h3>
                                <p class="mt-2 text-gray-600">8:00 PM - 10:00 PM</p>
                                <p class="mt-1 text-sm text-gray-500">Rice, Dal, Fried Fish, Vegetables (Friday:
                                    Special Menu)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="mb-4 text-2xl font-semibold text-gray-800" id="facilities">Key Facilities</h3>
                    <div class="grid grid-cols-1 gap-6 mx-auto text-center md:grid-cols-2 lg:grid-cols-3">
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">State-of-the-Art Kitchen</span>
                            <p class="mt-2 text-sm">Equipped with modern appliances and managed by professional cooks to
                                ensure quality.</p>
                        </div>
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">Comfortable Study Areas</span>
                            <p class="mt-2 text-sm">Well-designed, peaceful spaces tailored for effective learning and
                                productivity.</p>
                        </div>
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">Nutritious Meals</span>
                            <p class="mt-2 text-sm">Three daily meals, carefully prepared to provide variety, balance,
                                and nourishment.</p>
                        </div>
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">Spacious Dining Room</span>
                            <p class="mt-2 text-sm">A clean and inviting dining area designed for comfort and community
                                interaction.</p>
                        </div>
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">Guest Accommodation</span>
                            <p class="mt-2 text-sm">Comfortable guest rooms available to host visiting family members
                                and friends.</p>
                        </div>
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">Round-the-Clock Security</span>
                            <p class="mt-2 text-sm">24/7 surveillance and security measures to ensure resident safety at
                                all times.</p>
                        </div>
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">Professional Maintenance</span>
                            <p class="mt-2 text-sm">A dedicated team ensuring prompt and efficient resolution of
                                maintenance concerns.</p>
                        </div>
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">High-Speed Wi-Fi</span>
                            <p class="mt-2 text-sm">Reliable internet connectivity for seamless academic and personal
                                use.</p>
                        </div>
                        <div
                            class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                            <span class="text-lg font-bold">Lush Green Spaces</span>
                            <p class="mt-2 text-sm">Beautifully landscaped outdoor areas for relaxation and
                                recreational activities.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Side Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gaps-4">
            <!-- Location Section -->
            <div class="p-6 bg-white">
                <h3 class="mb-4 text-2xl font-semibold text-gray-800">Location</h3>
                <p class="mb-6 text-lg text-gray-700">
                    Faridpur Engineering College Campus.
                </p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7295.764987821575!2d89.81057262399037!3d23.58367601330285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe110d1a13e337%3A0x102eb00f0c0babc8!2sFaridpur%20Engineering%20College!5e0!3m2!1sen!2sbd!4v1699892045567!5m2!1sen!2sbd"
                    width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Contact Section -->
            <div class="p-6 bg-white">
                <h3 class="mb-4 text-2xl font-semibold text-gray-800">Administration</h3>
                <p class="mb-6 text-lg text-gray-700">
                    Contact for any Queries
                </p>
                <!-- Contact 1 -->
                <div class="p-4 mb-4 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:shadow-lg">
                    <div class="flex items-center">
                        <img src="{{ asset('images/host1.jpg') }}" alt="Host Image"
                            class="mr-4 w-14 h-14 rounded-full border-2 border-orange-500">
                        <div>
                            <p class="text-lg font-semibold text-gray-800">Alex Morgan</p>
                            <p class="text-gray-600 text-md">Hall Provost</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600"><strong>Email:</strong> <a href="mailto:alexmorgan@university.com"
                                class="text-blue-500 hover:underline">alexmorgan@university.com</a></p>
                        <p class="mt-1 text-gray-600"><strong>Phone:</strong> <a href="tel:+1234567890"
                                class="text-blue-500 hover:underline">+1 234-567-890</a></p>
                    </div>
                </div>

                <!-- Contact 2 -->
                <div class="p-4 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:shadow-lg">
                    <div class="flex items-center">
                        <img src="{{ asset('images/host2.jpg') }}" alt="Host Image"
                            class="mr-4 w-14 h-14 rounded-full border-2 border-orange-500">
                        <div>
                            <p class="text-lg font-semibold text-gray-800">Taylor Swift</p>
                            <p class="text-gray-600 text-md">Hall Accountant</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600"><strong>Email:</strong> <a href="mailto:taylor.swift@university.com"
                                class="text-blue-500 hover:underline">taylor.swift@university.com</a></p>
                        <p class="mt-1 text-gray-600"><strong>Phone:</strong> <a href="tel:+1234567891"
                                class="text-blue-500 hover:underline">+1 234-567-891</a></p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Gallery -->
        <div class="mx-auto mt-0 mb-5 w-full h-full rounded-lg shadow-lg">
            <div class="overflow-hidden relative w-96 h-96 swiper-container swiper-container-residence">
                <div class="swiper-wrapper">
                    <!-- Loading details from livewire-->
                    @foreach ($images as $image)
                        <div class="h-full swiper-slide">
                            <div class="relative w-full h-full">
                                <img src="{{ $image['src'] }}" alt="Image"
                                    class="object-cover absolute inset-0 w-full h-full">
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</body>



@push('scripts')
    @vite(['resources/js/residence.js'])
@endpush
