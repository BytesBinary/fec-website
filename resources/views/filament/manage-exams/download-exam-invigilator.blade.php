<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Class Routine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px !important;
        }
        @page {
            size: portrait;
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
<div style="text-align: center;display: block; font-size: 20px; font-weight: bolder; line-height: 10px !important;">
    <p>
        {{ $examDuty['exam_name'] }}
    </p>
    <p>
        Faridpur Engineering College, Faridpur
    </p>
    <p>
        Schedule Of Invigilation
    </p>
    <p>
    </p>
</div>
<table style="width: 100%; border-collapse: collapse; border: 1px solid black; text-align: left;">
    <thead>
    <tr style="background-color: #f4f4f4;">
        <th style="padding: 8px; border: 1px solid black;">Date</th>
        <th style="padding: 8px; border: 1px solid black;">Name</th>
        <th style="padding-right: 40px; padding-left: 40px; border: 1px solid black;">Signature</th>
        <th style="padding: 8px; border: 1px solid black;">Course</th>
        <th style="padding: 8px; border: 1px solid black;">Exam Hall</th>
        <th style="padding: 8px; border: 1px solid black;">Exam Hall Supervisor</th>
        <th style="padding: 8px; border: 1px solid black;">Signature</th>
    </tr>
    </thead>
    <tbody>

    @foreach($examDuty['duty_details'] as $details)
        @php
            $rowspan = count($details['invigilator']);
        @endphp
        @foreach($details['invigilator'] as $index => $invigilator)
            <tr>
                @if($index === 0)
                    <td style="padding: 8px; border: 1px solid black;" rowspan="{{ $rowspan }}">
                        {{ $details['date'] }}
                    </td>
                @endif
                <td style="padding: 8px; border: 1px solid black;">{{ $invigilator }}</td>
                <td style="padding: 8px; border: 1px solid black;"></td>
                @if($index === 0)
                    <td style="padding: 8px; border: 1px solid black;" rowspan="{{ $rowspan }}">
                        @foreach($details['course'] as $course)
                            <span style="display: block; padding: 5px;">{{ $course }}</span>
                        @endforeach
                    </td>
                    <td style="padding: 8px; border: 1px solid black;" rowspan="{{ $rowspan }}">
                        @foreach($details['exam_hall'] as $hall)
                            <span style="display: block; padding: 5px;">{{ $hall }}</span>
                        @endforeach
                    </td>
                    <td style="padding: 8px; border: 1px solid black;" rowspan="{{ $rowspan }}">
                        @foreach($details['supervisor'] as $supervisor)
                            <span style="display: block; padding: 5px;">{{ $supervisor }}</span>
                        @endforeach
                    </td>
                    <td style="padding: 8px; border: 1px solid black;" rowspan="{{ $rowspan }}"></td>
                @endif
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
</body>
</html>
