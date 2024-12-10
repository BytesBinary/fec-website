<div class="text-center">
    <h1>Credit History</h1>
    <h3>Department : {{$department}}</h3>
    <h3>Semester : {{$semester}}</h3>
</div>
<table style="width: 100%; border-collapse: collapse; border: 1px solid black; text-align: left;">
    <thead>
    <tr style="background-color: #f4f4f4;">
        <th style="padding: 8px; border: 1px solid black;"class="dark:text-gray-800 text-center">Name</th>
        <th style="padding: 8px; border: 1px solid black;"class="dark:text-gray-800 text-center">Total Credit</th>
    </tr>
    </thead>
    <tbody>
        @foreach($credit_history as $credit)
            <tr>
                <td style="padding: 8px; border: 1px solid black;" class="text-center">{{ $credit['teacher_name'] }}</td>
                <td style="padding: 8px; border: 1px solid black;" class="text-center">{{ $credit['total_credit'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
