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
            @foreach($routinesData as $day => $routine)
                <tr>
                    <td class="table-data"  class="routine-bold">{{ $day }}</td>
                    @foreach($routine as $time => $course)
                        <td class="table-data"  class="routine-subject-cell max-w-sm">
                            <div>
                                @if(!empty($selected[$day][$time]))
                                    <p class="text-sm font-bold text-justify">{{ $selected[$day][$time]['code'] }} ({{$selected[$day][$time]['credit']}}) - ({{ $selected[$day][$time]['teacher']  }})</p>
                                @endif
                            </div>
                            <select name="routine[{{ $day }}][{{ $time }}][course]"
                                    wire:change="checkTeacherSchedule('{{ $day }}', '{{ $time }}', $event.target.value)"
                                    wire:model="data.routine.{{ $day }}.{{ $time }}.course"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select Please</option>
                                @foreach($routinesData[$day][$time] as $courses)
                                    @foreach($courses as $index => $course)
                                        @if(isset($course['teachers']))
                                            @foreach($course['teachers'] as $teacher)
                                                @if(isset($teacher['id']))
                                                    <option value="{{ $course['id'] }},{{ $index }},{{$teacher['id']}}">{{$course['code']}} ({{$course['credit']}})  - ({{$teacher['name']}})</option>
                                                @endif
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
