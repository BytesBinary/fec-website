<body class="bg-gray-100 m-0">
    <div class="lg:w-3/4 mx-auto">
        <!-- Section with Background Image -->
        <section class="relative bg-gradient-to-r from-blue-500 to-green-500 rounded-lg text-white py-8 mt-5 shadow-lg">
            <div class="absolute inset-0 bg-black bg-opacity-30 rounded-lg"></div>
            <div class="relative container mx-auto flex flex-col md:flex-row justify-between items-center px-6">
                <div class="text-center md:text-left">
                    <h1 class="text-5xl font-extrabold mb-4">South Hall</h1>
                    <p class="text-lg italic">Empowering Students for a Bright Future</p>
                </div>
                <div class="flex space-x-4 mt-6 md:mt-0">
                    <a href="#housing"
                        class="bg-blue-600 px-6 py-3 rounded-lg text-white font-medium shadow-lg hover:bg-blue-700">Housing
                        & Dining</a>
                    <a href="#facilities"
                        class="bg-green-600 px-6 py-3 rounded-lg text-white font-medium shadow-lg hover:bg-green-700">Facilities</a>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <div class="flex flex-col md:flex-col shadow-lg rounded-t-lg lg:flex-row mt-5 bg-white">
            <!-- About Section -->
            <div class="p-4 flex-1 px-6">
                <h2 class="text-2xl font-semibold text-gray-900 mb-3">About South Hall</h2>
                <p class="text-gray-600 text-xl text-justify mb-2">
                    South Hall offers top-tier accommodations with modern amenities for 160 students. The hall
                    features a fully equipped kitchen, a reading room, and 3 nutritious meals a day to ensure a
                    comfortable and balanced lifestyle for its residents. Additionally, a guest room is available
                    for visitors.
                </p>

                <!-- Housing and Dining -->
                <div class="mb-6 mt-3 text-justify">
                    <h2 id="housing" class="text-3xl font-semibold text-gray-900 mb-4">Housing</h2>
                    <div class="overflow-x-auto rounded-lg shadow-md bg-white">
                        <table class="min-w-full border border-gray-200">
                            <thead>
                                <tr class="bg-gray-200 text-gray-700">
                                    <th class="px-6 py-3 border-b border-gray-300 text-center font-semibold uppercase">
                                        Total Rooms</th>
                                    <th class="px-6 py-3 border-b border-gray-300 text-center font-semibold uppercase">
                                        Capacity</th>
                                    <th class="px-6 py-3 border-b border-gray-300 text-center font-semibold uppercase">
                                        Occupied</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 text-center text-gray-800 font-medium">40</td>
                                    <td class="px-6 py-4 text-center text-gray-800 font-medium">160</td>
                                    <td class="px-6 py-4 text-center text-gray-800 font-medium">
                                        <div class="flex flex-col">
                                            <span>158</span>
                                            <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1">
                                                <div class="bg-green-500 h-2.5 rounded-full" style="width: 98%;">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mb-6 mt-5 text-justify">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Dining Schedule</h2>
                    <div class="relative border-l-2 border-blue-500">
                        <div class="mb-8 ml-6">
                            <div class="bg-blue-100 text-blue-800 py-3 px-4 rounded-lg shadow">
                                <h3 class="font-bold text-xl">Breakfast</h3>
                                <p class="text-gray-600 mt-2">8:00 AM - 10:00 AM</p>
                                <p class="text-sm mt-1 text-gray-500">Khichuri, Mixed Vegetables (Monday)</p>
                            </div>
                        </div>
                        <div class="mb-8 ml-6">
                            <div class="bg-green-100 text-green-800 py-3 px-4 rounded-lg shadow">
                                <h3 class="font-bold text-xl">Lunch</h3>
                                <p class="text-gray-600 mt-2">1:00 PM - 3:00 PM</p>
                                <p class="text-sm mt-1 text-gray-500">Rice, Chicken Curry, Dal (Wednesday: Fish
                                    Curry)</p>
                            </div>
                        </div>
                        <div class="ml-6">
                            <div class="bg-yellow-100 text-yellow-800 py-3 px-4 rounded-lg shadow">
                                <h3 class="font-bold text-xl">Dinner</h3>
                                <p class="text-gray-600 mt-2">8:00 PM - 10:00 PM</p>
                                <p class="text-sm mt-1 text-gray-500">Rice, Dal, Fried Fish, Vegetables (Friday:
                                    Special Menu)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4" id="facilities">Key Facilities</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mx-auto text-center">
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">State-of-the-Art Kitchen</span>
                            <p class="mt-2 text-sm">Equipped with modern appliances and managed by professional cooks to ensure quality.</p>
                        </div>
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">Comfortable Study Areas</span>
                            <p class="mt-2 text-sm">Well-designed, peaceful spaces tailored for effective learning and productivity.</p>
                        </div>
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">Nutritious Meals</span>
                            <p class="mt-2 text-sm">Three daily meals, carefully prepared to provide variety, balance, and nourishment.</p>
                        </div>
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">Spacious Dining Room</span>
                            <p class="mt-2 text-sm">A clean and inviting dining area designed for comfort and community interaction.</p>
                        </div>
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">Guest Accommodation</span>
                            <p class="mt-2 text-sm">Comfortable guest rooms available to host visiting family members and friends.</p>
                        </div>
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">Round-the-Clock Security</span>
                            <p class="mt-2 text-sm">24/7 surveillance and security measures to ensure resident safety at all times.</p>
                        </div>
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">Professional Maintenance</span>
                            <p class="mt-2 text-sm">A dedicated team ensuring prompt and efficient resolution of maintenance concerns.</p>
                        </div>
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">High-Speed Wi-Fi</span>
                            <p class="mt-2 text-sm">Reliable internet connectivity for seamless academic and personal use.</p>
                        </div>
                        <div
                            class="w-full bg-blue-100 text-blue-900 py-6 px-8 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                            <span class="font-bold text-lg">Lush Green Spaces</span>
                            <p class="mt-2 text-sm">Beautifully landscaped outdoor areas for relaxation and recreational activities.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Side Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gaps-4">
            <!-- Location Section -->
            <div class="bg-white p-6 ">
                <h3 class="font-semibold text-gray-800 text-2xl mb-4">Location</h3>
                <p class="text-lg text-gray-700 mb-6">
                    Faridpur Engineering College Campus.
                </p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7295.764987821575!2d89.81057262399037!3d23.58367601330285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe110d1a13e337%3A0x102eb00f0c0babc8!2sFaridpur%20Engineering%20College!5e0!3m2!1sen!2sbd!4v1699892045567!5m2!1sen!2sbd"
                    width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Contact Section -->
            <div class="bg-white p-6 ">
                <h3 class="font-semibold text-gray-800 text-2xl mb-4">Administration</h3>
                <p class="text-lg text-gray-700 mb-6">
                    Contact for any Queries
                </p>
                <!-- Contact 1 -->
                <div class="bg-gray-100 p-4 mb-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center">
                        <img src="{{ asset('images/host1.jpg') }}" alt="Host Image"
                            class="w-14 h-14 rounded-full mr-4 border-2 border-orange-500">
                        <div>
                            <p class="text-gray-800 font-semibold text-lg">Alex Morgan</p>
                            <p class="text-gray-600 text-md">Hall Provost</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600"><strong>Email:</strong> <a href="mailto:alexmorgan@university.com"
                                class="text-blue-500 hover:underline">alexmorgan@university.com</a></p>
                        <p class="text-gray-600 mt-1"><strong>Phone:</strong> <a href="tel:+1234567890"
                                class="text-blue-500 hover:underline">+1 234-567-890</a></p>
                    </div>
                </div>

                <!-- Contact 2 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center">
                        <img src="{{ asset('images/host2.jpg') }}" alt="Host Image"
                            class="w-14 h-14 rounded-full mr-4 border-2 border-orange-500">
                        <div>
                            <p class="text-gray-800 font-semibold text-lg">Taylor Swift</p>
                            <p class="text-gray-600 text-md">Hall Accountant</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600"><strong>Email:</strong> <a href="mailto:taylor.swift@university.com"
                                class="text-blue-500 hover:underline">taylor.swift@university.com</a></p>
                        <p class="text-gray-600 mt-1"><strong>Phone:</strong> <a href="tel:+1234567891"
                                class="text-blue-500 hover:underline">+1 234-567-891</a></p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Gallery -->
        <div class="h-full w-full mx-auto mb-5 mt-0 rounded-lg shadow-lg">
            <div class="swiper-container swiper-container-residence relative h-96 w-96 overflow-hidden">
                <div class="swiper-wrapper">
                    <!-- Loading details from livewire-->
                    @foreach ($images as $image)
                        <div class="swiper-slide h-full">
                            <div class="relative w-full h-full">
                                <img src="{{ $image['src'] }}" alt="Image"
                                    class="absolute inset-0 w-full h-full object-cover">
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
