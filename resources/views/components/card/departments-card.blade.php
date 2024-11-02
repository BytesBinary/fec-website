@props([
    'name' => 'Department Name',
    'image' => 'images/card/cse-dept.jpg',
    'description' => null,
    'url' => '#',
    'isHomePage' => 'false',
])

<div class="card flex flex-col justify-between bg-lime-50 rounded-lg h-full glass mx-3 md:mx-0 shadow-lg hover:cursor-pointer border"
     >
    <figure class="overflow-hidden rounded-t-lg">
        <img src="{{ asset($image) }}" alt="car"
            class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300" />
    </figure>
    <div class="flex flex-col flex-grow p-6 rounded-b-lg">
        <p class="font-bold text-3xl text-center mb-4 text-gray-800">
           {{$name}}</p>
        <hr class="w-full h-1 mx-auto bg-emerald-300 rounded"  >
        <div class="card-actions mt-6 flex justify-center">
            <button href='{!!$url!!}' type="button"
                class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg" wire:navigate>
                <span class="text-xl text-gray-800">Explore</span>
                <x-svg-icon.external-url />
            </button>
        </div>
    </div>
</div>
