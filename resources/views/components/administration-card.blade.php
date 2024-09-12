@props([
    'image' => 'images/gallery/1.jpg',
    'name' => 'Professor AJDM Jakiur Rahman',
    'designation' => 'Principal',
    'url' => '#'
])

<div class="card w-full shadow-2xl shadow-gray-500 mt-5 hover:shadow-gray-700 hover:cursor-pointer" onclick="window.location.href='{{$url}}'">
    <div class="card-body">
        <img src="{{ asset($image) }}" alt="Administration" class="w-full h-48 object-cover object-center">
        <p class="text-center mt-3 text-lg text-gray-950">{{$name}}</p>
        <p class="text-center text-xl text-gray-950">{{$designation}}</p>
    </div>
</div>