<div>

    <body class = "bg-gray-100">
        <!-- Top Navigation -->
        <div class = "w-[90%] mx-auto my-6">
            <!-- Welcome Section -->
            <div class = "bg-white p-6 rounded-lg shadow-lg">
                <h1 class = "text-2xl font-bold text-orange-600 text-center">
                    Welcome to FEC Residence
                </h1>
                <p class = "text-gray-600 text-center mt-3">
                    Explore our halls of residence and the exceptional facilities designed to make your stay comfortable
                    and enjoyable.
                </p>
            </div>

            <!-- Menu Section -->
            <div class = "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                <!-- About Section -->
                <div href  = "{{ route('residence', 'about') }}"
                    class = "group bg-blue-50 p-6 rounded-lg shadow-md hover:shadow-lg transition hover:cursor-pointer"wire:navigate>
                    <h3 class = "text-lg font-bold text-blue-600 group-hover:text-blue-800">About FEC Halls</h3>
                    <ul class = "mt-3 text-gray-600 text-sm space-y-2">
                        <li class = "hover:text-gray-800">Statistics</li>
                        <li class = "hover:text-gray-800">Facilities</li>
                    </ul>
                </div>

                <!-- South Hall Section -->
                <div href="{{route('residence','south-hall')}}"
                 class = "bg-orange-50 p-6 rounded-lg shadow-md hover:shadow-lg transition hover:cursor-pointer " wire:navigate>
                    <h3 class = "text-lg font-bold text-orange-600">South Hall</h3>
                    <ul class = "mt-3 text-gray-600 text-sm space-y-2">
                        <li class = "hover:text-gray-800">Housing</li>
                        <li class = "hover:text-gray-800">Dining</li>
                        <li class = "hover:text-gray-800">Administration</li>
                    </ul>
                </div>

                <!-- North Hall Section -->
                <div href="{{route('residence','north-hall')}}"
                class = "bg-green-50 p-6 rounded-lg shadow-md hover:shadow-lg transition hover:cursor-pointer "wire:navigate>
                    <h3 class = "text-lg font-bold text-green-600">North Hall</h3>
                    <ul class = "mt-3 text-gray-600 text-sm space-y-2">
                        <li class = "hover:text-gray-800">housing</li>
                        <li class = "hover:text-gray-800">Dining</li>
                        <li class = "hover:text-gray-800">Administration</li>
                    </ul>
                </div>

                <!-- Female Hall Section -->
                <div href="{{route('residence','female-hall')}}" class = "bg-pink-50 p-6 rounded-lg shadow-md hover:shadow-lg transition hover:cursor-pointer"wire:navigate>
                    <h3 class = "text-lg font-bold text-pink-600">Female Hall</h3>
                    <ul class = "mt-3 text-gray-600 text-sm space-y-2">
                        <li class = "hover:text-gray-800">housing<li>
                        <li class  = "hover:text-gray-800">Dining<li>
                        <li class   = "hover:text-gray-800">Administration<li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</div>
