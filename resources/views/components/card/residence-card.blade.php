@props([
    'card' => 1,
    'route' => '',
    'title' => '',
    'slogan' => '',
])
<a href="{{ $route }}" wire:navigate
   class="relative bg-gradient-to-br from-green-100 via-green-50 to-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition overflow-hidden cursor-pointer">
    <div class="z-10 w-full">
        <h3 class="text-xl md:text-2xl font-bold text-green-800 drop-shadow-md">{{$title}}</h3>
        <p class="text-2xl md:text-3xl font-extrabold text-green-600 mt-4 drop-shadow-md">{{$slogan}}</p>
    </div>
    <!-- Decorative Bubbles -->
    <div class="absolute top-4 right-4 flex flex-wrap gap-2">
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
    <div class="absolute -bottom-7 -right-7 w-24 h-24 bg-green-200 rounded-full shadow-inner"></div>
</a>
