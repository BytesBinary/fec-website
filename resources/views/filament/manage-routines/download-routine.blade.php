<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Class Routine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            line-height: 10px;
        }
        .header h2 {
            font-size: 20px;
        }
        table {
            border-collapse: collapse;
            font-size: 13px;
            width: 100%;
        }
        th,
        td {
            border: 1px solid black;
            padding: 0 4px;
            text-align: center;
        }
        th {
            background-color: #fcf4d0;
            padding: 10px;
        }
        .bold {
            font-weight: bold;
        }
        .lunch-break {
            writing-mode: vertical-lr;
            background-color: #f0f0f0;
            font-weight: bold;
        }
        .last {
            width: 300px;
        }
        .signature {
            text-align: center;
            font-size: 12px;
            line-height: 5px;
            margin-top: 50px;
        }
        .course-list {
            font-size: 13px;
        }
        @page {
            size: landscape;
        }
        .col-print-1 {width:8%;  float:left;}
        .col-print-2 {width:16%; float:left;}
        .col-print-3 {width:25%; float:left;}
        .col-print-4 {width:33%; float:left;}
        .col-print-5 {width:42%; float:left;}
        .col-print-6 {width:50%; float:left;}
        .col-print-7 {width:58%; float:left;}
        .col-print-8 {width:66%; float:left;}
        .col-print-9 {width:75%; float:left;}
        .col-print-10{width:83%; float:left;}
        .col-print-11{width:92%; float:left;}
        .col-print-12{width:100%; float:left;}
    </style>
</head>
<body>
<div class="header">
    <h2>{{$details['department']}} Class Routine</h2>
    <h1>Faridpur Engineering College, Faridpur</h1>
    <h2>( {{$details['semester']}} Semester )</h2>
</div>
<div class="table-container">
    <table>
        <tr>
            <th>Day</th>
            <th>1<br />08:00-08:50</th>
            <th>2<br />08:50-09:40</th>
            <th>3<br />09:40-10:30</th>
            <th>4<br />10:30-11:20</th>
            <th>5<br />11:20-12:10</th>
            <th>6<br />12:10-13:00</th>
            <th>7<br />13:00-14:00</th>
            <th>8<br />14:00-17:00</th>
        </tr>
        @foreach($routines as $day => $routine)
            <tr>
                <td class="bold">{{ $day }}</td>
                @foreach($routine as $time => $course)
                    <td class="subject-cell {{$time=='14:00' ? 'last' : ''}}">
                        @foreach($course as $final_course)
                            <div class="routine-subject">
                                <span class="routine-subject-title">{{ $final_course['course_code']  }}</span>
                                <br/>
                                (<span class="routine-subject-teacher" style="font-weight: bold">{{ $final_course['teacher_name'] }}</span>)
                            </div>
                        @endforeach
                    </td>
                    @if($time=='12:10' && 'Sunday'== $day) <td class="lunch-break" rowspan="5">LUNCH BREAK</td> @endif
                @endforeach
            </tr>
        @endforeach
    </table>
</div>

<p style="font-size: 16px; "><strong>List of Courses</strong></p>
@foreach($courses as $chunk)
    <div class="col-print-4 course-list">
        @foreach($chunk as $course)
            <p>{{ $course['title'] }} <b>({{ $course['code'] }})</b></p>
        @endforeach
    </div>
@endforeach

<div class="col-print-4">
    <div class="signature">
        <p>_________________________</p>
        <p>Head</p>
        <p>Department of Computer Science and Engineering</p>
    </div>
    <div class="signature">
        <p>_________________________</p>
        <p>Principal</p>
        <p>Faridpur Engineering College, Faridpur</p>
    </div>
</div>
</body>
</html>
