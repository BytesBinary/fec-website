<x-filament-panels::page>
    <form wire:submit.prevent="saveRoutine">
        <div class="routine-table-container">
            <table class="routine-table">
                <tr>
                    <th>Day</th>
                    <th>1<br />08:00-08:50</th>
                    <th>2<br />08:50-09:40</th>
                    <th>3<br />09:40-10:30</th>
                    <th>4<br />10:30-11:20</th>
                    <th>5<br />11:20-12:10</th>
                    <th>6<br />12:10-13:00</th>
                    <th>8<br />14:00-17:00</th>
                </tr>
                @foreach($processRoutine as $key => $routine)
                    <tr>
                        <td class="routine-bold">{{ $key }}</td>
                        @foreach($routine as $time => $course)
                            <td class="routine-subject-cell max-w-sm">
                                <select name="routine[{{ $key }}][{{ $time }}][course]"
                                        wire:change="loadAvailableTeachers('{{ $key }}', '{{ $time }}', $event.target.value)"
                                        wire:model="data.routine.{{ $key }}.{{ $time }}.course"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Select A Course</option>
                                    @foreach($processRoutine[$key][$time] as $courses)
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
                                    @foreach($processRoutine[$key][$time] as $courses)
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
        <div class="flex flex-row justify-center">
            <button type="submit" class="button-1">Save</button>
        </div>
    </form>
</x-filament-panels::page>
