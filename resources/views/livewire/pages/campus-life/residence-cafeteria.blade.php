<div>
    @php
        $menu = [
            'About' => '#about',

            'South Hall' => [
                'Statistics'     => '#south-statistics',
                'Dining'         => '#south-dining',
                'Administration' => '#south-admin',
                'Facilities'     => '#south-facilities',
            ],

            'North Hall' => [
                'Statistics'     => '#north-statistics',
                'Dining'         => '#north-dining',
                'Administration' => '#north-admin',
                'Facilities'     => '#north-facilities',
            ],

            'Female Hall' => [
                'Statistics'     => '#female-statistics',
                'Dining'         => '#female-dining',
                'Administration' => '#female-admin',
                'Facilities'     => '#female-facilities',
            ],

            'Administration' => '#administration',
        ];

    @endphp

    <body class = "bg-gray-100">
        <!-- Top Navigation -->
        <div x-data="{ openSouth: false, openNorth: false, openFemale: false }" class="flex bg-gray-100 min-h-screen">
            <!-- Side Navigation -->
            <div class="w-64 bg-gray-800 text-white p-6">
                <div class="text-3xl font-bold text-white mb-6">Residence & Cafeteria</div>

                <div class="space-y-6">
                    <!-- About -->
                    <a href="#about" class="text-gray-300 hover:text-blue-500 text-lg font-medium">About</a>

                    <!-- Dropdown: South Hall -->
                    <div class="relative group">
                        <button @mouseover="openSouth = true" @mouseleave="openSouth = false" class="w-full text-left text-gray-300 hover:text-blue-500 text-lg font-medium py-2 px-4">South Hall</button>
                        <div x-show="openSouth" x-transition class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-lg z-10 w-48 py-2 mt-1 border border-gray-200">
                            <a href="#south-statistics" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Statistics</a>
                            <a href="#south-dining" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Dining</a>
                            <a href="#south-admin" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Administration</a>
                            <a href="#south-facilities" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Facilities</a>
                        </div>
                    </div>

                    <!-- Dropdown: North Hall -->
                    <div class="relative group">
                        <button @mouseover="openNorth = true" @mouseleave="openNorth = false" class="w-full text-left text-gray-300 hover:text-blue-500 text-lg font-medium py-2 px-4">North Hall</button>
                        <div x-show="openNorth" x-transition class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-lg z-10 w-48 py-2 mt-1 border border-gray-200">
                            <a href="#north-statistics" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Statistics</a>
                            <a href="#north-dining" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Dining</a>
                            <a href="#north-admin" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Administration</a>
                            <a href="#north-facilities" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Facilities</a>
                        </div>
                    </div>

                    <!-- Dropdown: Female Hall -->
                    <div class="relative group">
                        <button @mouseover="openFemale = true" @mouseleave="openFemale = false" class="w-full text-left text-gray-300 hover:text-blue-500 text-lg font-medium py-2 px-4">Female Hall</button>
                        <div x-show="openFemale" x-transition class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-lg z-10 w-48 py-2 mt-1 border border-gray-200">
                            <a href="#female-statistics" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Statistics</a>
                            <a href="#female-facilities" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-500">Facilities</a>
                        </div>
                    </div>

                    <!-- Administration -->
                    <a href="#administration" class="text-gray-300 hover:text-blue-500 text-lg font-medium py-2 px-4">Administration</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 p-8 bg-gray-50">
                <main class="container mx-auto">
                    <div class="text-center mb-8">
                        <h1 class="text-4xl font-semibold text-gray-800">Welcome to Residence & Cafeteria</h1>
                        <p class="text-lg text-gray-600 mt-4">Explore the halls, cafeteria, and administration to learn more about our facilities and services.</p>
                    </div>
                    <!-- Your dynamic content goes here -->
                    @yield('content')
                </main>
            </div>
        </div>

    </body>

</div>
