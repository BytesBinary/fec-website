<x-filament-panels::page>
    <div class="flex justify-end">
        <button type="submit" class="bg-primary-600 px-3 py-2 text-white rounded-xl" wire:click="download"> Download </button>
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
</x-filament-panels::page>
