<div class="mx-auto w-3/4">

    <body class="bg-gray-100 m-0">
        <!-- Header Section for South Hall -->
        <div class="bg-white p-4 md:p-6 mt-5 shadow-md flex flex-col md:flex-row items-center justify-between rounded-lg space-y-4 md:space-y-0">
            <!-- Hall Image -->
            <div class="flex-shrink-0">
                <img src="{{ asset('images/halls/southhall.jpg') }}" alt="South Hall"
                    class="w-30 h-28 mr-4 ml-5 rounded-sm shadow-md hover:scale-105 transition transform duration-300 ease-out">
            </div>

            <!-- Hall Title & Details -->
            <div class="flex-1 mx-4 text-center md:text-left">
                <h1 class="text-lg md:text-2xl ml-7 font-bold text-gray-900 leading-snug">
                    South Hall
                </h1>
                <p class="text-sm text-gray-600 italic ml-7 ">Innovating Student Living</p>
                <div class="flex flex-col lg:flex-row justify-center lg:justify-start space-y-2 md:space-y-4 lg:space-x-4 mt-3">
                    <!-- Interested Section -->
                    <div class="flex items-center bg-gray-200 justify-center rounded p-2 px-4 ml-7 shadow-md hover:shadow-md transition">
                        <img src="{{ asset('images/halls/seats.png') }}" alt="Seating Capacity"
                            class="h-6 w-6 mr-2">
                        <p class="text-sm text-gray-800">160 Seats</p>
                    </div>

                    <!-- Dining Section -->
                    <div class="flex items-center bg-gray-200 justify-center rounded p-2 px-4 shadow-md hover:shadow-md transition">
                        <img src="{{ asset('images/halls/dining.png') }}" alt="Dining Facilities"
                            class="h-6 w-6 mr-2">
                        <p class="text-sm text-gray-800">3 Meals a Day</p>
                    </div>

                    <!-- Guest Room Section -->
                    <div class="flex items-center bg-gray-200 justify-center rounded p-2 px-4 shadow-md hover:shadow-md transition">
                        <img src="{{ asset('images/halls/guestroom.png') }}" alt="Guest Room"
                            class="h-6 w-6 mr-2">
                        <p class="text-sm text-gray-800">Dedicated Reading Room</p>
                    </div>
                </div>
            </div>

            <!-- Registration Section -->
            <div class="flex-shrink-0">
                <button class="bg-orange-500 text-white font-medium py-3 px-6 mr-5 rounded shadow-md hover:bg-orange-600 transition hover:shadow-lg text-sm">
                    Register Now
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row mx-auto p-4 md:p-8 gap-4">
            <!-- Hall Banner -->
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition w-full lg:w-2/3 order-2 lg:order-1">
                <img src="{{ asset('images/halls/banner.jpg') }}" alt="South Hall Banner"
                    class="w-full h-72 object-cover rounded-md mb-4">
                <p class="text-center text-xs text-gray-500 italic mb-4">"Empowering Students for a Bright Future"</p>

                <!-- About South Hall -->
                <h2 class="text-lg md:text-xl font-semibold text-gray-900 mb-3">About South Hall</h2>
                <p class="text-gray-600 text-sm mb-2">
                    South Hall offers top-tier accommodations with modern amenities for 160 students. The hall features a fully equipped kitchen, a reading room, and 3 nutritious meals a day to ensure a comfortable and balanced lifestyle for its residents. Additionally, a guest room is available for visitors.
                </p>

                <!-- Facilities -->
                <div class="mb-6">
                    <h3 class="text-md font-semibold text-gray-800 mb-2">Key Facilities</h3>
                    <ul class="list-disc ml-5 text-gray-600 text-sm">
                        <li>Fully Equipped Kitchen</li>
                        <li>Comfortable Study & Reading Rooms</li>
                        <li>3 Meals per Day (Breakfast, Lunch, Dinner)</li>
                        <li>Guest Room for Visitors</li>
                    </ul>
                </div>

                <!-- Gallery -->
                <div class="mb-6">
                    <h3 class="text-md font-semibold text-gray-800 mb-2">Gallery</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <img src="{{ asset('images/halls/readingroom.jpg') }}" alt="Reading Room" class="w-full h-auto rounded-md shadow-md">
                        <img src="{{ asset('images/halls/kitchen.jpg') }}" alt="Kitchen" class="w-full h-auto rounded-md shadow-md">
                    </div>
                </div>
            </div>

            <!-- Date & Time Section -->
            <div class="flex flex-col gap-4 w-full lg:w-1/3 order-1 lg:order-2">
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="font-semibold text-gray-800 text-lg mb-3">Check-in Time</h3>
                    <p class="text-sm text-gray-600 mb-4">Check-in: Monday to Friday | 9:00 AM - 5:00 PM</p>
                    <a href="calendar-link" class="text-blue-500 text-sm hover:underline transition">Add to Calendar</a>
                </div>

                <!-- Location Section -->
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="font-semibold text-gray-800 text-lg mb-3">Location</h3>
                    <p class="text-sm text-gray-600 mb-4">South Hall, Main Campus, University XYZ</p>
                    <a href="map-link" class="text-blue-500 text-sm hover:underline transition">View on Map</a>
                </div>

                <!-- Contact for Any Query Section -->
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="font-semibold text-gray-800 text-lg mb-3">Administration</h3>
                    <div class="bg-gray-100 p-3 mb-3 rounded-md shadow-md hover:shadow-lg">
                        <div class="flex items-center mt-4">
                            <img src="{{ asset('images/host1.jpg') }}" alt="Host Image"
                                class="w-12 h-12 rounded-full mr-4 border-2 border-orange-500">
                            <div>
                                <p class="text-gray-700 font-semibold">Alex Morgan</p>
                                <p class="text-sm text-gray-600">Hall Provost</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">
                                <strong>Email:</strong> <a href="mailto:alexmorgan@university.com" class="text-blue-500 hover:underline">alexmorgan@university.com</a>
                            </p>
                            <p class="text-sm text-gray-600 mt-1">
                                <strong>Phone:</strong> <a href="tel:+1234567890" class="text-blue-500 hover:underline">+1 234-567-890</a>
                            </p>
                        </div>
                    </div>

                    <!-- Another Contact -->
                    <div class="bg-gray-100 p-3 rounded-md shadow-md hover:shadow-lg">
                        <div class="flex items-center mt-4">
                            <img src="{{ asset('images/host2.jpg') }}" alt="Host Image"
                                class="w-12 h-12 rounded-full mr-4 border-2 border-orange-500">
                            <div>
                                <p class="text-gray-700 font-semibold">Taylor Swift</p>
                                <p class="text-sm text-gray-600">Hall Accountant</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">
                                <strong>Email:</strong> <a href="mailto:taylor.swift@university.com" class="text-blue-500 hover:underline">taylor.swift@university.com</a>
                            </p>
                            <p class="text-sm text-gray-600 mt-1">
                                <strong>Phone:</strong> <a href="tel:+1234567891" class="text-blue-500 hover:underline">+1 234-567-891</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>
