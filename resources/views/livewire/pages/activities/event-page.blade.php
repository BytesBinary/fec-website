<div class="mx-auto w-full md:w-3/4 lg:w-4/5 p-3">

    <div class="bg-gray-100 m-0">
        <!-- Header Section -->
        <div
            class="bg-white pt-3 md:p-4 mt-5 shadow-md flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
            <!-- Event Title & Actions -->
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 leading-snug">
                    Tech Innovators Summit 2025
                </h1>
                <p class="text-lg text-gray-600 italic">Innovating the Future Together</p>
                <div
                    class="flex flex-col lg:flex-row justify-center lg:justify-start lg:items-center space-y-4 lg:space-y-0 md:space-y-4 lg:space-x-4 mt-5">
                    <!-- Interested Section -->
                    <div
                        class="flex items-center bg-gray-200 hover:bg-gray-300 justify-center rounded px-2 py-2 shadow-md hover:shadow-md transition">
                        <img src="{{ asset('images/event/leadership.png') }}" alt="people interested"
                            class="size-5 mr-2">
                        <p class="text-sm text-gray-800">1,200+ Interested</p>
                    </div>

                    <!-- Interested Button -->
                    <button
                        class="flex items-center justify-center p-2 px-4 bg-orange-100 text-orange-600 rounded shadow-sm hover:shadow-md hover:bg-orange-200 transition">
                        <img src="{{ asset('images/event/star.png') }}" alt="Interested" class="h-5 w-5 mr-2">
                        <span class="text-sm">Interested</span>
                    </button>

                    <!-- Share Button -->
                    <button
                        class="flex items-center justify-center p-2 px-4 bg-blue-100 text-blue-600 rounded shadow-sm hover:shadow-md hover:bg-blue-200 transition">
                        <img src="{{ asset('images/event/share.png') }}" alt="Share" class="h-5 w-5 mr-2">
                        <span class="text-sm">Share</span>
                    </button>
                </div>
            </div>

            <!-- Register Button -->
            <div class="flex-shrink-0">
                <button
                    class="bg-orange-500 text-white font-medium py-3 px-6 mr-5 rounded shadow-md hover:bg-orange-600 transition hover:shadow-lg text-sm">
                    Register Now
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row mx-auto lg:gap-4">
            <!-- Event Banner -->
            <div
                class="bg-white p-4 shadow-lg hover:shadow-xl transition w-full lg:w-2/3 order-2 lg:order-1">
                <img src="{{ asset('images/gallery/10.jpg') }}" alt="Event Banner"
                     class="w-full h-72 object-cover rounded-md mb-4">
                <p class="text-center text-sm text-gray-600 italic mb-4">"Empowering Innovators for a Sustainable Tomorrow"</p>
                <!-- About Section -->
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-3">About the Event</h2>
                <p class="text-gray-800 text-md tracking-widest mb-2">
                    Join us for a premier technology summit that brings together innovators, entrepreneurs, and thought
                    leaders. Explore groundbreaking ideas and discover the future of technology through engaging
                    keynotes, workshops, and networking opportunities.
                </p>
                <!-- Categories -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-black mb-2">Categories</h3>
                    <ul class="list-disc ml-5 text-gray-700 text-md tracking-wide">
                        <li>High School (Grades IX - XII)</li>
                        <li>Undergraduate Students</li>
                        <li>Industry Professionals</li>
                        <li>Tech Enthusiasts</li>
                    </ul>
                </div>
                <!-- Segments -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-black mb-2">Segments</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-200 p-3 rounded-md shadow-md hover:shadow-lg">
                            <h4 class="font-semibold text-gray-800">Tech Exhibition</h4>
                            <p class="text-sm text-gray-700 tracking-wide">Innovative projects from various industries.</p>
                        </div>
                        <div class="bg-gray-200 p-3 rounded-md shadow-md hover:shadow-lg">
                            <h4 class="font-semibold text-gray-700">AI & Robotics Competition</h4>
                            <p class="text-sm text-gray-600">Pioneering challenges for future tech leaders.</p>
                        </div>
                        <div class="bg-gray-200 p-3 rounded-md shadow-md hover:shadow-lg">
                            <h4 class="font-semibold text-gray-700">Startup Pitch Fest</h4>
                            <p class="text-sm text-gray-600">Pitch your idea to a panel of top investors.</p>
                        </div>
                        <div class="bg-gray-200 p-3 rounded-md shadow-md hover:shadow-lg">
                            <h4 class="font-semibold text-gray-700">Tech Talks</h4>
                            <p class="text-sm text-gray-600">Inspiring talks by industry leaders.</p>
                        </div>
                        <div class="bg-gray-200 p-3 rounded-md shadow-md hover:shadow-lg">
                            <h4 class="font-semibold text-gray-700">Hackathon</h4>
                            <p class="text-sm text-gray-600">Solve real-world challenges within a time limit.</p>
                        </div>
                        <div class="bg-gray-200 p-3 rounded-md shadow-md hover:shadow-lg">
                            <h4 class="font-semibold text-gray-700">Coding Challenges</h4>
                            <p class="text-sm text-gray-600">Compete with the best coders in thrilling challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Date & Time Section -->
            <div class="flex flex-col gap-4 w-full lg:w-1/3 order-2 lg:order-2">
                <div class="bg-white p-4 rounded-lg shadow-lg shadow-gray-300 hover:shadow-gray-400 transition md:mr-2 md:mt-2">
                    <h3 class="font-semibold text-gray-800 text-lg mb-3">Date & Time</h3>
                    <p class="text-sm text-gray-600 mb-4">Saturday, Nov 25, 2025 | 9:00 AM - 6:00 PM</p>
                    <a href="calendar-link" class="text-blue-500 text-sm hover:underline transition">Add to Calendar</a>
                </div>
                <!-- Location Section -->
                <div class="bg-white p-4 rounded-lg shadow-lg shadow-gray-300 hover:shadow-gray-400 transition md:mr-2">
                    <h3 class="font-semibold text-gray-800 text-lg mb-3">Location</h3>
                    <p class="text-sm text-gray-600 mb-4">Grand Tech Hall, Innovation Avenue, Silicon Valley</p>
                    <a href="map-link" class="text-blue-500 text-sm hover:underline transition">View on Map</a>
                </div>
                <!-- Spread the Word Section -->
                <div class="bg-white p-4 rounded-lg shadow-lg shadow-gray-300 hover:shadow-gray-400 transition md:mr-2">
                    <h3 class="font-semibold text-gray-800 text-lg mb-3">Spread the Word</h3>
                    <div class="flex space-x-6">
                        <a href="facebook-link" class="text-blue-600 hover:text-blue-700 transition">
                            <i class="fab fa-facebook-square"></i> Facebook
                        </a>
                        <a href="twitter-link" class="text-cyan-500 hover:text-cyan-600 transition">
                            <i class="fab fa-twitter-square"></i> Twitter
                        </a>
                        <a href="linkedin-link" class="text-blue-700 hover:text-blue-800 transition">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </a>
                    </div>
                </div>
                <!-- Contact for Any Query Section -->
                <div class="bg-white p-4 rounded-lg shadow-lg shadow-gray-300 hover:shadow-gray-400 transition md:mr-2 md:mr-2">
                    <h3 class="font-semibold text-gray-800 text-lg mb-3">Contact for Any Query</h3>
                    <div class="bg-gray-200 p-3 mb-3 rounded-md shadow-md hover:shadow-lg">
                        <div class="flex items-center mt-4">
                            <img src="{{ asset('images/BytesBinary.png') }}" alt="Host Image"
                                 class="w-12 h-12 rounded-full mr-4 border-2 border-orange-500">
                            <div>
                                <p class="text-gray-700 font-semibold">Alex Morgan</p>
                                <p class="text-sm text-gray-600">Event Manager</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">
                                <strong>Email:</strong> <a href="mailto:alexmorgan@techsummit.com"
                                                           class="text-blue-500 hover:underline">alexmorgan@techsummit.com</a>
                            </p>
                            <p class="text-sm text-gray-600 mt-1">
                                <strong>Phone:</strong> <a href="tel:+1234567890"
                                                           class="text-blue-500 hover:underline">+1
                                    234-567-890</a>
                            </p>
                            <p class="text-sm text-gray-600 mt-1">
                                <strong>WhatsApp:</strong> <a href="https://wa.me/1234567890"
                                                              class="text-blue-500 hover:underline">+1 234-567-890</a>
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-200 p-3 rounded-md shadow-md hover:shadow-lg md:mr-2">
                        <div class="flex items-center mt-4">
                            <img src="{{ asset('images/BytesBinary.png') }}" alt="Host Image"
                                 class="w-12 h-12 rounded-full mr-4 border-2 border-orange-500">
                            <div>
                                <p class="text-gray-700 font-semibold">Taylor Swift</p>
                                <p class="text-sm text-gray-600">Program Coordinator</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">
                                <strong>Email:</strong> <a href="mailto:taylor.swift@techsummit.com"
                                                           class="text-blue-500 hover:underline">taylor.swift@techsummit.com</a>
                            </p>
                            <p class="text-sm text-gray-600 mt-1">
                                <strong>Phone:</strong> <a href="tel:+1234567891"
                                                           class="text-blue-500 hover:underline">+1
                                    234-567-891</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
