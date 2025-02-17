@props([
    'name' => 'Department Name',
    'image' => 'images/card/cse-dept.jpg',
    'description' => null,
    'url' => '#',
    'isHomePage' => 'false',
])
<div class="card flex flex-col justify-between bg-[#f2f0ef] rounded-lg h-full glass mx-3 md:mx-0 shadow-lg hover:cursor-pointer border"
     >
    <figure class="overflow-hidden rounded-t-lg">
        <img src="{{ asset($image) }}" alt="car"
            class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300" />
    </figure>
    <div class="flex flex-col flex-grow p-6 rounded-b-lg">
        <p class="font-bold text-3xl text-center mb-4 text-deepBlue">
           {{$name}}</p>
        <hr class="w-full h-1 mx-auto bg-blue-400 rounded"  >
        <div class="card-actions mt-6 flex justify-center">
            <button href='{{$url}}' type="button"
                class="btn w-full max-w-xs bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-500 hover:bg-gradient-to-r hover:from-blue-500 hover:via-indigo-500 hover:to-purple-600 text-white rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg" wire:navigate>
                <span class="text-xl text-white">Explore</span>
                <x-svg-icon.external-url />
            </button>
        </div>
    </div>
</div>
