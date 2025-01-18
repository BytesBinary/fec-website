@props([
    'details' => []
])

@foreach ($details as $detail)
<div class="p-4 rounded-lg" >
    <!-- Image container with transparent background -->
    <div class="rounded-full w-36 h-36 flex items-center justify-center overflow-hidden shadow-lg shadow-gray-500 mb-4 bg-zinc-50/60 mx-auto">
        <img class="w-full h-full object-cover" src="{{ asset($detail['logo']) }}" alt="{{ $detail['option_name'] }}" />
    </div>
    <!-- Text container -->
    <div class="text-center text-gray-800">
        <!-- Count-up animation -->
        <p class="font-bold text-3xl text-[#f5ad0d]">{{ $detail['option_value'] }}</p>
        <p class="text-xl text-black">{{ $detail['title'] }}</p>
    </div>
</div>
@endforeach
