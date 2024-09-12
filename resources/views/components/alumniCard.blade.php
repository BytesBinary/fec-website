@props([
'image' => 'images/Profile Pic.jpg',
'name' => 'Abdullah Al Rafi',
'email' => 'abdullah.rafi.03@gmail.com',
'statement' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, esse?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, esse?',
])

<div class="card w-1/3 shadow-2xl shadow-gray-400 mt-5 bg-red-700">
    <div class="card-body bg-white p-6 rounded-lg shadow-md flex flex-col items-center group cursor-pointer hover:bg-gradient-to-r from-teal-400 via-blue-500 to-purple-600 hover:text-white transition duration-300">
        <img src="{{asset($image)}}" class="w-24 h-24 rounded-full mb-4 ">
        <div class="text-center">
            <h3 class="text-xl font-semibold mb-2">{{$name}}</h3>
            <p class="text-gray-500 text-sm mb-4 group-hover:text-white">{{$email}}</p>
            <p class="text-gray-700 mb-4 group-hover:text-white">{{$statement}}</p>
            <p class="font-semibold group-hover:text-white" x-text="card.position"></p>
        </div>
    </div>
</div>
