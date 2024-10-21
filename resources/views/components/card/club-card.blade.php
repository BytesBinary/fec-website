@props([
    'logo' => '',
    'shortName' => '',
    'fullName' => '',
    'description' => '',
    'url' => '',
    'group' => 'Add a location here',
    'email' => 'ajdmjakiurrahman1234@gmail.com'
])
<div class="max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300" >
    <div class="relative">
        <img class="w-full h-40 object-cover" src="{{asset($logo)}}" alt="Club Logo">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-60"></div>
        <div class="absolute bottom-0 left-0 p-4">
            <h2 class="text-white text-xl font-bold">{{$shortName}}</h2>
        </div>
    </div>

    <!-- Club Info Section -->
    <div class="p-6">
        <h3 class="text-xl font-bold text-gray-800" >{{$fullName}}</h3>
        <p class="text-gray-600 mt-2" >{{$description}}</p>

        <!-- Contact or Buttons -->
        <div class="mt-4 flex justify-between items-center">
            <a href="{{$url}}"><button class="bg-lime-500 hover:bg-lime-600 text-white py-2 px-4 rounded transition-colors duration-200">Join Now</button></a>
            <a href="{{$url}}"><button class="text-yellow-500 hover:text-yellow-600 font-bold transition-colors duration-200">Learn More</button></a>
        </div>
    </div>

    <!-- Footer: Club Information -->
    <div class="bg-gray-100 px-6 py-4 flex justify-between items-center">
        <div class="text-sm text-gray-500">Group: <a href="{{$group}}" class="hover:text-blue-900 hover:text-lg hover:underline text-blue-600">{{$shortName}}</a></div>
        <div class="text-sm text-blue-500">Email: <a href="{{$email}}" class="hover:text-blue-900 hover:text-lg hover:underline text-blue-600">{{$email}}</a></div>
    </div>
</div>
