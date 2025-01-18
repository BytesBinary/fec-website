<div>
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-deepBlue">About {{$cardTitle}}</h2>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Faridpur Engineering College (FEC) provides a world-class educational experience in the field of {{$cardTitle}} . Our department is committed to academic excellence, fostering innovation, and nurturing future technology leaders.</p>
    </div>

    <!-- Two-column Layout -->
    <div class="lg:flex lg:space-x-8">
        <!-- Left Column - About Details -->
        <div class="lg:w-1/2 space-y-6">
            <div class="p-6 bg-gray-100 rounded-lg shadow-sm">
                <h3 class="text-xl font-semibold text-gray-800">About {{$dept}}</h3>
                <p class="text-gray-600 mt-2">{{$deptDesc}}</p>
            </div>

            <div class="p-6 bg-gray-100 rounded-lg shadow-sm">
                <h3 class="text-xl font-semibold text-gray-800">Subject in {{$dept}} Course</h3>
                <ul class="list-disc ml-6 text-gray-600">
                    <li>{{$l1}}</li>
                    <li>{{$l2}}</li>
                    <li>{{$l3}}</li>
                    <li>{{$l4}}</li>
                    <li>{{$l5}}</li>
                </ul>
            </div>

            <div class="p-6 bg-gray-100 rounded-lg shadow-sm">
                <h3 class="text-xl font-semibold text-gray-800">Contact Information</h3>
                <p class="text-gray-600 mt-2">E-mail:<a href="mailto:{{$mail}}"> {{$mail}}</p>
                <p class="text-gray-600">Phone: {{$phone}}</p>
            </div>
        </div>

        <!-- Right Column - Image or Quote -->
        <div class="lg:w-1/2 mt-8 lg:mt-0">
            <div class="flex items-center justify-center h-full">
                <img src="{{$img}}" alt="Department Image" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>

</div>
