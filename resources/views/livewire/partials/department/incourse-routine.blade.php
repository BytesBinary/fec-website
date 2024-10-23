<div>
    {{-- The best athlete wants his opponent at his best. --}}
   <!-- Main Incourse Routine Section -->
<section class="bg-white py-12">
    <div class="container mx-auto px-4 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Incourse Routine</h2>
            <p class="text-gray-600 mt-4 max-w-xl mx-auto">Find the examination dates for in-course assessments.</p>
        </div>

        <!-- Routine Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-3 px-4 text-gray-700 font-semibold uppercase text-sm">Date</th>
                        <th class="py-3 px-4 text-gray-700 font-semibold uppercase text-sm">Course Code</th>
                        <th class="py-3 px-4 text-gray-700 font-semibold uppercase text-sm">Course Title</th>
                        <th class="py-3 px-4 text-gray-700 font-semibold uppercase text-sm">Time</th>
                        <th class="py-3 px-4 text-gray-700 font-semibold uppercase text-sm">Room</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row 1 -->
                    <tr class="border-b">
                        <td class="py-4 px-4 text-gray-700">November 1, 2024</td>
                        <td class="py-4 px-4 text-gray-900 font-semibold">{{Str::upper($department)}} 2101</td>
                        <td class="py-4 px-4 text-gray-600">Data Structures</td>
                        <td class="py-4 px-4 text-gray-600">10:00 AM - 12:00 PM</td>
                        <td class="py-4 px-4 text-gray-600">Room 203</td>
                    </tr>

                    <!-- Example Row 2 -->
                    <tr class="border-b bg-gray-50">
                        <td class="py-4 px-4 text-gray-700">November 3, 2024</td>
                        <td class="py-4 px-4 text-gray-900 font-semibold">{{Str::upper($department)}} 2102</td>
                        <td class="py-4 px-4 text-gray-600">Algorithms</td>
                        <td class="py-4 px-4 text-gray-600">1:00 PM - 3:00 PM</td>
                        <td class="py-4 px-4 text-gray-600">Room 105</td>
                    </tr>

                    <!-- Example Row 3 -->
                    <tr class="border-b">
                        <td class="py-4 px-4 text-gray-700">November 5, 2024</td>
                        <td class="py-4 px-4 text-gray-900 font-semibold">{{Str::upper($department)}} 2103</td>
                        <td class="py-4 px-4 text-gray-600">Operating Systems</td>
                        <td class="py-4 px-4 text-gray-600">9:00 AM - 11:00 AM</td>
                        <td class="py-4 px-4 text-gray-600">Room 207</td>
                    </tr>

                    <!-- Example Row 4 -->
                    <tr class="border-b bg-gray-50">
                        <td class="py-4 px-4 text-gray-700">November 8, 2024</td>
                        <td class="py-4 px-4 text-gray-900 font-semibold">{{Str::upper($department)}} 2104</td>
                        <td class="py-4 px-4 text-gray-600">Database Systems</td>
                        <td class="py-4 px-4 text-gray-600">2:00 PM - 4:00 PM</td>
                        <td class="py-4 px-4 text-gray-600">Room 302</td>
                    </tr>

                    <!-- Example Row 5 -->
                    <tr class="border-b">
                        <td class="py-4 px-4 text-gray-700">November 10, 2024</td>
                        <td class="py-4 px-4 text-gray-900 font-semibold">{{Str::upper($department)}} 2105</td>
                        <td class="py-4 px-4 text-gray-600">Computer Networks</td>
                        <td class="py-4 px-4 text-gray-600">11:00 AM - 1:00 PM</td>
                        <td class="py-4 px-4 text-gray-600">Room 204</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

</div>
