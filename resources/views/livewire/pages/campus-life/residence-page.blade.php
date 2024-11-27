<body class="m-0 bg-gray-100">
    <div class="mx-auto lg:w-3/4">
        <!-- Section with Background Image -->
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
                    <h1 class="mb-4 text-5xl font-extrabold">{{$residence['post_title'] ?? ''}}</h1>
                    <p class="text-lg italic">{{ $residence['residence_slogan'] ?? '' }}</p>
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
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">About {{$residence['post_title'] ?? ''}}</h2>
                <p class="mb-2 text-xl text-justify text-gray-600">
                    {{$residence['post_content'] ?? ''}}
                </p>
                @if( ! empty($residence['housing_details']) || ! empty($residence['dining_schedule']) || ! empty($residence['facilities']) )
                    @if( ! empty($residence['housing_details']) )
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
                                        <td class="px-6 py-4 font-medium text-center text-gray-800">{{$residence['housing_details']['total_room']}}</td>
                                        <td class="px-6 py-4 font-medium text-center text-gray-800">{{$residence['housing_details']['total_capacity']}}</td>
                                        <td class="px-6 py-4 font-medium text-center text-gray-800">
                                            <div class="flex flex-col">
                                                <span>{{$residence['housing_details']['total_occupied']}}</span>
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
                    @endif
                    @if( ! empty($residence['dining_schedule']) )
                        <div class="mt-5 mb-6 text-justify">
                            <h2 class="mb-4 text-3xl font-semibold text-gray-900">Dining Schedule</h2>
                            <div class="relative border-l-2 border-blue-500">
                                @foreach($residence['dining_schedule'] as $dining)
                                    <x-card.dining-card :card="$loop->iteration"
                                                        :title="$dining['meal_title']"
                                                        :start_time="$dining['meal_start_time']"
                                                        :end_time="$dining['meal_end_time']"
                                                        :foods="$dining['food_details']" />
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if( ! empty($residence['facilities']) )
                        <div class="mb-6">
                            <h3 class="mb-4 text-2xl font-semibold text-gray-800" id="facilities">Key Facilities</h3>
                            <div class="grid grid-cols-1 gap-6 mx-auto text-center md:grid-cols-2 lg:grid-cols-3">
                                @foreach($residence['facilities'] as $facility)
                                    <div
                                        class="px-8 py-6 w-full text-blue-900 bg-blue-100 rounded-lg shadow-md transition duration-300 hover:bg-blue-200">
                                        <span class="text-lg font-bold">{{$facility['title']}}</span>
                                        <p class="mt-2 text-sm">{{$facility['simple description']}}</p>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @endif
                @endif
            </div>
        </div>

        <!-- Side Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gaps-4">
            <!-- Location Section -->
            @if( ! empty( $residence['map_url'] ) )
                <div class="p-6 bg-white">
                    <h3 class="mb-4 text-2xl font-semibold text-gray-800">Location</h3>
                    <p class="mb-6 text-lg text-gray-700">
                        {{$residence['post_title']}} is located at
                    </p>
                    <iframe
                        src="{{$residence['map_url']}}"
                        width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            @endif
            <!-- Contact Section -->
            <div class="p-6 bg-white">
                @if( ! empty($residence['administration']) )
                        <h3 class="mb-4 text-2xl font-semibold text-gray-800">Administration</h3>
                        <p class="mb-6 text-lg text-gray-700">
                            Contact for any Queries
                        </p>
                        <!-- Contact 1 -->
                        @foreach ($residence['administration'] as $admin)
                            <x-card.admin-card
                                :name="$admin['name']"
                                :position="$admin['position']"
                                :email="$admin['email']"
                                :phone="$admin['phone_number']" />
                        @endforeach
                @endif
            </div>
        </div>
    </div>
</body>
