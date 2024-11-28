@props([
    'name' => '',
    'position' => '',
    'email' => '',
    'phone' => '',
 ])


<div class="p-4 mb-4 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:shadow-lg">
    <div class="flex items-center">
        <div>
            <p class="text-lg font-semibold text-gray-800">{{$name}}</p>
            <p class="text-gray-600 text-md">{{$position}}</p>
        </div>
    </div>
    <div class="mt-4">
        <p class="text-gray-600"><strong>Email:</strong> <a href="mailto:a{{$email}}"
                class="text-blue-500 hover:underline">{{$email}}</a></p>
        <p class="mt-1 text-gray-600"><strong>Phone:</strong> <a href="tel:{{$phone}}"
                class="text-blue-500 hover:underline">{{$phone}}</a></p>
    </div>
</div>