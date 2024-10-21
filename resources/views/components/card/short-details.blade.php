@props([
    'details' => array(
        [
            'name' => 'Established',
            'url' => 'images/establish.png',
            'number' => '2010',
        ],
        [
            'name' => 'Students',
            'url' => 'images/students.png',
            'number' => '800',
        ],
        [
            'name' => 'Departments',
            'url' => 'images/building.png',
            'number' => '3',
        ],
        [
            'name' => 'Faculty Members',
            'url' => 'images/faculty-members.png',
            'number' => '30',
        ]
    )
])

@foreach ($details as $detail)
<div class="p-4 rounded-lg" >
    <!-- Image container with transparent background -->
    <div class="rounded-full w-36 h-36 flex items-center justify-center overflow-hidden shadow-lg shadow-gray-500 mb-4 bg-zinc-50/60 mx-auto">
        <img class="w-full h-full object-cover" src="{{ asset($detail['url']) }}" alt="{{ $detail['name'] }}" />
    </div>
    <!-- Text container -->
    <div class="text-center text-gray-800">
        <!-- Count-up animation -->
        <p class="font-bold text-3xl text-yellow-500">{{ $detail['number'] }}</p>
        <p class="text-xl text-white">{{ $detail['name'] }}</p>
    </div>
</div>
@endforeach
