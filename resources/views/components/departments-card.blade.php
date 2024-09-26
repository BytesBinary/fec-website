@props([
    'name' => 'Department Name',
    'image' => 'images/card/cse-dept.jpg',
    'description' => null,
    'url' => '#',
    'isHomePage' => 'false',
])

@if ('true' === $isHomePage)
    <div class="card flex flex-col justify-between bg-lime-50 rounded-lg h-full glass mx-3 md:mx-0 shadow-lg hover:cursor-pointer border"
        data-aos="fade-up" data-aos-delay="200">
        <figure class="overflow-hidden rounded-t-lg">
            <img src="{{ asset($image) }}" alt="car"
                class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300" />
        </figure>
        <div class="flex flex-col flex-grow p-6 rounded-b-lg">
            <p class="font-bold text-3xl text-center mb-4 text-gray-800" data-aos="fade-up" data-aos-delay="200">
               {!!$name!!}</p>
            <hr class="w-full h-1 mx-auto bg-emerald-300 rounded" data-aos="fade-up" data-aos-delay="200">
            <div class="card-actions mt-6 flex justify-center" data-aos="fade-left" data-aos-delay="200">
                <button onclick="window.location.href='#'" type="button"
                    class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                    <span class="text-xl text-gray-800">Explore</span>
                    <x-svg-icon.external-url />
                </button>
            </div>
        </div>
    </div>
@else
    <div class="card flex flex-col justify-between rounded-lg h-full glass mx-3 md:mx-0 shadow-lg hover:cursor-pointer hover:shadow-xl transition-shadow duration-300"
        data-aos="fade-up" data-aos-delay="200">
        <figure class="overflow-hidden rounded-t-lg">
            <img src="{{ asset($image) }}" alt="car"
                class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300" />
        </figure>
        <div class="flex flex-col flex-grow p-6 rounded-b-lg">
            <p class="font-bold text-3xl text-center mb-4 text-gray-800" data-aos="fade-up" data-aos-delay="200">
                {!! $name !!}</p>
            <hr class="w-48 h-1 mx-auto bg-emerald-300 rounded" data-aos="fade-up" data-aos-delay="200">

            <!-- Description: The flex-grow here ensures the text expands without affecting the button placement -->
            <p class="text-justify mt-5 text-gray-600 flex-grow" data-aos="fade-right" data-aos-delay="200">
                {{ $description }}
            </p>

            <div class="card-actions mt-6 flex justify-center" data-aos="fade-left" data-aos-delay="200">
                <button onclick="window.location.href='{{ $url }}'" type="button"
                    class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                    <span class="text-xl text-gray-800">Explore</span>
                    <x-svg-icon.external-url />
                </button>
            </div>
        </div>
    </div>
@endif
