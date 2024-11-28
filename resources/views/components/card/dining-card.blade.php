@props([
    'card' => 1,
    'title' => '',
    'start_time' => '',
    'end_time' => '',
    'foods' => ''
])
<div class="mb-8 ml-6">
    <div class="px-4 py-3 {{($card%3===1) ? 'text-blue-800 bg-blue-100' : (($card%3===2) ? 'text-green-800 bg-green-100' : 'text-yellow-800 bg-yellow-100') }} rounded-lg shadow">
        <h3 class="text-xl font-bold">{{$title}}</h3>
        <p class="mt-2 text-gray-600">{{$start_time}} - {{$end_time}}</p>
        <p class="mt-1 text-sm text-gray-500">{{$foods}}</p>
    </div>
</div>
