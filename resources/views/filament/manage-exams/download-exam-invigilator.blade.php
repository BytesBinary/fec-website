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

        tr {
            page-break-inside: avoid;
        }

        thead {
            display: table-header-group;
        }

        tfoot {
            display: table-footer-group;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        th,
        td {
            padding: 6px;
            border: 1px solid black;
            text-align: left;
            vertical-align: top;
        }

        .header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            line-height: 1.4;
        }

        .footer {
            text-align: center;
            margin-top: 100px !important;
            line-height: 1.4;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <div class="header" style="line-height: 0.3">
        <img src="{{ public_path('images/FEClogo.png') }}" alt="Working on it" height="72px" width="72px" style="align: center">
        <p>{{ $examDuty['exam_name'] }}</p>
        <p>Faridpur Engineering College, Faridpur</p>
        <p>Schedule for Invigilation</p>
        <p style="font-size: 12px !important">Exam Time : {{ $examDuty['start_time'] .'-'. $examDuty['end_time'] }}</p>
    </div>

    <table>
        <thead>
            <tr style="background-color: #f4f4f4;">
                <th style="width: 12%;">Date</th>
                <th style="width: 22%;">Invigilator Name</th>
                <th style="width: 10%;">Signature</th>
                <th style="width: 18%;">Course Code/Name</th>
                <th style="width: 12%;">Exam Hall</th>
                <th style="width: 18%;">Exam Hall Supervisor</th>
                <th style="width: 8%;">Signature</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($examDuty['duty_details'] as $details)
                @php
                    $rowspan = count($details['invigilator']);
                @endphp
                @foreach ($details['invigilator'] as $index => $invigilator)
                    <tr>
                        @if ($index === 0)
                            <td rowspan="{{ $rowspan }}">{{ $details['date'] }}</td>
                        @endif

                        <td>{{ $invigilator }}</td>
                        <td></td>

                        @if ($index === 0)
                            <td rowspan="{{ $rowspan }}">
                                @foreach ($details['course'] as $course)
                                    <div style="margin-bottom: 4px;">{{ $course }}</div>
                                @endforeach
                            </td>
                            <td rowspan="{{ $rowspan }}">
                                @foreach ($details['exam_hall'] as $hall)
                                    <div style="margin-bottom: 4px;">{{ $hall }}</div>
                                @endforeach
                            </td>
                            <td rowspan="{{ $rowspan }}">
                                @foreach ($details['supervisor'] as $supervisor)
                                    <div style="margin-bottom: 4px;">{{ $supervisor }}</div>
                                @endforeach
                            </td>
                            <td rowspan="{{ $rowspan }}"></td>
                        @endif
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>

    <div class="footer" style="line-height: 0.3">
        <p><b>Prof. Md. Alamgir Hossain</b></p>
        <p>Principal</p>
        <p>Faridpur Engineering College, Faridpur</p>
    </div>

</body>

</html>
