@props([
    'pic' => '',
    'title' => '',
    'date' => '',
    'url' => '',
    'location' => '',
    'interestCount' => 0,
])

<div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition duration-200 flex flex-col delay-100 hover:scale-[1.03] shadowm-md shadow-slate-400 max-w-[340px] max-h-[480px]">
    <!-- Header Image and Main Info -->
    <div class="flex justify-between p-4 bg-slate-100 rounded-lg">
        <div class="w-full">
            <img class="rounded-tl-lg" src="{{ asset($pic) }}" alt="Event pic">
            <div class="bg-slate-300 p-4 pt-2 rounded-bl-lg">
                <h2 class="text-xl font-semibold text-sky-950 hover:text-blue-900 transition-colors duration-200">{{ $title }}</h2>
                <p class="text-sm text-gray-700 py-1">{{ $location }}</p>

                <div class='inline-block mt-2 rounded-md shadow-sm shadow-slate-600'>
                    <span class="text-sm text-indigo-700 cursor-pointer flex items-center p-[3px] font-semibold">
                        <x-svg-icon.star></x-svg-icon.star>
                        {{ $interestCount }} interested
                    </span>
                </div>

                <a href="{{ $url }}" wire:navigate>
                    <button class="bg-sky-950 hover:bg-sky-900 text-white py-2 px-4 rounded-lg transition-colors duration-200 mt-4 w-full shadow-md hover:shadow-lg">
                        More
                    </button>
                </a>
            </div>
        </div>
        <!-- Date (Vertical Lettered Text) -->
        <div class="w-12 flex items-center justify-center bg-gradient-to-b from-blue-400 to-indigo-400 rounded-tr-lg rounded-br-lg p-2 shadow-inner ">
            <div class="flex flex-col items-center ">
                @foreach(str_split($date) as $letter)
                    <span class="text-md font-semibold text-inherit">{{ $letter }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>
