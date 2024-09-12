@props([
    'image' => 'images/gallery/1.jpg',
    'name' => 'Professor AJDM Jakiur Rahman',
    'designation' => 'Principal',
    'url' => '#',
    "animation" => ""
])

<div class="card w-full bg-zinc-50 shadow-2xl shadow-gray-500 mt-5 hover:shadow-gray-700 hover:cursor-pointer" onclick="window.location.href='{{$url}}'" data-aos="{{$animation}}">
    <div class="card-body">
        <img src="{{ asset($image) }}" alt="Administration" class="w-full h-80 object-cover object-center">
        <p class="text-center mt-3 text-lg text-gray-950">{{$name}}</p>
        <p class="text-center text-xl text-gray-950 font-bold">{{$designation}}</p>
    </div>
</div>
