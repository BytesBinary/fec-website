@props([
    'logo' => '',
    'headline' => '',
    'menus' => array(),
])
@php dd($menus) @endphp
<div class="bg-white shadow-md rounded-lg p-6 hover:shadow-gray-500">
    <!-- Card Content -->
    <div class="flex items-center space-x-4">
        <!-- Image -->
        <img src="{{$logo}}" alt="Logo" class="w-24 h-24">
        <!-- Text Section -->
        <div>
            <h2 class="text-xl font-bold mb-2">{{$headline}}</h2>
            <ul class="list-none">
                @foreach($menus as $menu)
                    <li class="text-gray-600"><a href="{{$menu['url']}}" class="hover:underline hover:text-green-600">&#10003; {{$menu['title']}}</a> </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
