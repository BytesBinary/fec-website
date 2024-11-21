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
                                <button
                                    style="background-color: red; margin: 3px;"
                                    wire:click="deleteRoutine('{{ $day }}', '{{ $time }}')"
                                    class="routine-delete-button w-8 h-8 flex items-center justify-center bg-red-500 hover:bg-red-600 text-white rounded-full shadow-lg transition duration-300"
                                    title="Delete Routine"
                                >
                                    <div wire:loading wire:target="deleteRoutine" class="mb-1">
                                        <x-filament::loading-indicator class="h-5 w-5" />
                                    </div>
                                    <div wire.loading.remove>
                                        &#10005;
                                    </div>
                                </button>
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
