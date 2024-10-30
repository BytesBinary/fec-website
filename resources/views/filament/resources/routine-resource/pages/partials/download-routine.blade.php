<style>
    #routine {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #routine td, #routine th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #routine tr:nth-child(even){background-color: #f2f2f2;}

    #routine tr:hover {background-color: #ddd;}

    #routine th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>
<h1>List of courses</h1>
<ul>
    @foreach($courses as $course)
{{--        @php dd($course) @endphp--}}
        <li>
            {{$course['title']}}
        </li>
    @endforeach
</ul>

<div style="overflow-x: auto">
    <table id="routine">
        <tr>
            <th>
                Day
            </th>
            <th>
                8:00-8:50
            </th>
            <th>
                8:50-9 : 40
            </th>
            <th>
                9:40-10:30
            </th>
            <th>
                10:30-11:20
            </th>
            <th>
                11:20-12:10
            </th>
            <th>
                12:10-1 :00
            </th>
            <th>
                1:00- 2:00
            </th>
            <th>
                2:00- 5:00
            </th>
        </tr>
        <tbody>
        @foreach($routines as $key=>$routine)
            <tr>
                <td>
                    {{$key}}
                </td>
                <td class="px-6 py-4">
                    @if(array_key_exists('8:00',$routine))
                        @php
                            $routineData = current($routine['8:00']);
                        @endphp
                        {{$routineData['course_code']}} - {{$routineData['teacher_name']}}
                    @else
                        --
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(array_key_exists('8:50',$routine))
                        @php
                            $routineData = current($routine['8:00']);
                        @endphp
                        {{$routineData['course_code']}} - {{$routineData['teacher_name']}}
                    @else
                        --
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(array_key_exists('9:40',$routine))
                        @php
                            $routineData = current($routine['8:00']);
                        @endphp
                        {{$routineData['course_code']}} - {{$routineData['teacher_name']}}
                    @else
                        --
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(array_key_exists('10:30',$routine))
                        @php
                            $routineData = current($routine['8:00']);
                        @endphp
                        {{$routineData['course_code']}} - {{$routineData['teacher_name']}}
                    @else
                        --
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(array_key_exists('11:20',$routine))
                        @php
                            $routineData = current($routine['8:00']);
                        @endphp
                        {{$routineData['course_code']}} - {{$routineData['teacher_name']}}
                    @else
                        --
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(array_key_exists('12:10',$routine))
                        @php
                            $routineData = current($routine['8:00']);
                        @endphp
                        {{$routineData['course_code']}} - {{$routineData['teacher_name']}}
                    @else
                        --
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(array_key_exists('1:00',$routine))
                        @php
                            $routineData = current($routine['8:00']);
                        @endphp
                        {{$routineData['course_code']}} - {{$routineData['teacher_name']}}
                    @else
                        --
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(array_key_exists('2:00',$routine))
                        @php
                            $routineData = current($routine['8:00']);
                        @endphp
                        {{$routineData['course_code']}} - {{$routineData['teacher_name']}}
                    @else
                        --
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
