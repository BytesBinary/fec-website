<x-filament-panels::page>
{{--    Form--}}
    <form wire:submit.prevent="saveRoutine">
        <div class="routine-table-container">
            <table class="routine-table">
                <tr>
                    <th class="table-head" >Day</th>
                    <th class="table-head" >1<br />08:00-08:50</th>
                    <th class="table-head" >2<br />08:50-09:40</th>
                    <th class="table-head" >3<br />09:40-10:30</th>
                    <th class="table-head" >4<br />10:30-11:20</th>
                    <th class="table-head" >5<br />11:20-12:10</th>
                    <th class="table-head" >6<br />12:10-13:00</th>
                    <th class="table-head" >8<br />14:00-17:00</th>
                </tr>
                @foreach($routinesData as $key => $routine)
                    <tr>
                        <td class="table-data"  class="routine-bold">{{ $key }}</td>
                        @foreach($routine as $time => $course)
                            <td class="table-data"  class="routine-subject-cell max-w-sm">
                                <select name="routine[{{ $key }}][{{ $time }}][course]"
                                        wire:change="loadAvailableTeachers('{{ $key }}', '{{ $time }}', $event.target.value)"
                                        wire:model="data.routine.{{ $key }}.{{ $time }}.course"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Select A Course</option>
                                    @foreach($routinesData[$key][$time] as $courses)
                                        @foreach($courses as $index => $course)
                                            @if(isset($course['id']))
                                                <option value="{{ $course['id'] }},{{ $index }}">{{ $course['title'] }}</option>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </select>
                                <select name="routine[{{ $key }}][{{ $time }}][course][teacher]"
                                        wire:model="data.routine.{{ $key }}.{{ $time }}.teacher"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($routinesData[$key][$time] as $courses)
                                        <option value="">Select A Teacher</option>
                                        @foreach($courses as $index => $course)
                                            @if(isset($course['teachers']))
                                                @foreach($course['teachers'] as $id => $name)
                                                    <option value="{{ $id }}">{{ $name }}</option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endforeach
                                </select>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="routine-save-btn flex flex-row justify-center mt-3">
            <button type="submit" class="btn-of-download-routine px-6 text-white py-1 rounded-lg">Save</button>
        </div>
    </form>
    <div class="flex justify-end">
        <button type="submit" class="bg-primary-600 px-3 py-2 text-white rounded-xl" wire:click="download"> Click Download Routine </button>
    </div>
{{--   Table--}}
    <div class="routine-table-container">
        <table class="routine-table">
            <tr>
                <th class="table-head" >Day</th>
                <th class="table-head" >1<br />08:00-08:50</th>
                <th class="table-head" >2<br />08:50-09:40</th>
                <th class="table-head" >3<br />09:40-10:30</th>
                <th class="table-head" >4<br />10:30-11:20</th>
                <th class="table-head" >5<br />11:20-12:10</th>
                <th class="table-head" >6<br />12:10-13:00</th>
                <th class="table-head" >8<br />14:00-17:00</th>
            </tr>
            @foreach($routines as $day => $routine)
                <tr>
                    <td class="table-data routine-bold">{{ $day }}</td>
                    @foreach($routine as $time => $course)
                        <td class="table-data routine-subject-cell">
                        @foreach($course as $final_course)
                                <div class="routine-subject">
                                    <span class="routine-subject-title">{{ $final_course['course_code']  }}</span>
                                    <br/>
                                    (<span class="routine-subject-teacher" style="font-weight: bold">{{ $final_course['teacher_name'] }}</span>)
                                </div>
                        @endforeach
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
</x-filament-panels::page>
