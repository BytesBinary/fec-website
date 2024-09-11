@props([
    'name' => 'Department Name',
    'image' => 'images/card/cse-dept.jpg',
    'description' => 'Department Description',
    'url' => '#'
])

<div class="card rounded glass mx-3 md:mx-0 shadow-lg shadow-gray-500 hover:shadow-2xl hover:shadow-gray-600 hover:cursor-pointer">
    <figure>
      <img
        src="{{asset($image)}}"
        alt="car!" />
    </figure>
    <div class="rounded">
        <div class="p-3 mt-3">
            <p class="font-bold text-3xl text-center mb-2">{!!$name!!}</p>
            <hr class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700">
            <p class="text-justify mt-5">
                {{$description}}
            </p>
            <div class="card-actions justify-end">
                <button onclick="window.location.href='{{$url}}'" type="button" class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass text-lg">
                    Explore <x-svg-icon.external-url />
                </button>
            </div>
        </div>
    </div>
</div>