@props([
    'card' => 1,
    'route' => '',
    'title' => '',
    'slogan' => '',
])
<a href="{{ $route }}" wire:navigate
class="flex overflow-hidden relative flex-col items-center p-4 bg-gradient-to-br  {{($card%3===1) ? 'from-green-100 via-green-50 to-white' : (($card%3===2) ? 'from-orange-100 via-orange-50 to-white' : 'from-pink-100 via-pink-50 to-white') }} rounded-xl shadow-lg md:flex-row md:p-12">

    <div class="z-10 w-full">
        
        <h3 class="text-xl font-bold text-green-800 drop-shadow-md md:text-2xl">{{$title}}</h3>
        <p class="mt-4 text-xl font-extrabold text-green-600 drop-shadow-md md:text-3xl">{{$slogan}}</p>
    </div>
    <!-- Decorative Bubbles -->
    <div class="flex absolute top-4 right-4 flex-wrap gap-2">
        <div
            class="w-6 h-6 {{($card%3===1) ? 'bg-green-300' : (($card%3===2) ? 'bg-orange-300' : 'bg-pink-300') }} rounded-full opacity-50"></div>
        <div
            class="w-4 h-4 {{($card%3===1) ? 'bg-green-400' : (($card%3===2) ? 'bg-orange-400' : 'bg-pink-400') }} rounded-full opacity-60"></div>
        <div
            class="w-3 h-3 {{($card%3===1) ? 'bg-green-500' : (($card%3===2) ? 'bg-orange-500' : 'bg-pink-500') }} rounded-full opacity-70"></div>
        <div
            class="w-5 h-5 {{($card%3===1) ? 'bg-blue-300' : (($card%3===2) ? 'bg-red-300' : 'bg-purple-300') }} rounded-full opacity-50"></div>
        <div
            class="w-4 h-4 {{($card%3===1) ? 'bg-yellow-400' : (($card%3===2) ? 'bg-pink-400' : 'bg-red-400') }} rounded-full opacity-60"></div>
        <div
            class="w-3 h-3 {{($card%3===1) ? 'bg-purple-500' : (($card%3===2) ? 'bg-yellow-500' : 'bg-green-500') }} rounded-full opacity-70"></div>
    </div>
    <!-- Bottom Half-Circle -->
    <div class="absolute -right-7 -bottom-7 w-24 h-24 rounded-full shadow-inner {{($card%3===1) ? 'bg-green-200' : (($card%3===2) ? 'bg-orange-200' : 'bg-pink-200') }}"></div>
</a>
