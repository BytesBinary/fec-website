
<div class="text-center">
    <h1>Duty Details</h1>
    {{-- <h3>Department : {{$department}}</h3> --}}
    {{-- <h3>Semester : {{$semester}}</h3> --}}
</div>
<table style="width: 100%; border-collapse: collapse; border: 1px solid black; text-align: left;">
    <thead>
    <tr style="background-color: #f4f4f4;">
        <th style="padding: 8px; border: 1px solid black;"class="dark:text-gray-800 text-center">Name</th>
        <th style="padding: 8px; border: 1px solid black;"class="dark:text-gray-800 text-center">Number Of {{ ($report_type == 'invigilator') ? 'Invigilation' : 'Supervision' }}</th>
    </tr>
    </thead>
    <tbody>
        @foreach($details as $detail)
            <tr>
                <td style="padding: 8px; border: 1px solid black;" class="text-center">{{ $detail['name'] }}</td>
                <td style="padding: 8px; border: 1px solid black;" class="text-center">{{ $detail['duties'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
