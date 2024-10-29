<x-filament-panels::page>
    <x-filament-panels::form wire:submit="saveDetails">
        {{$this->form}}
        <x-filament-panels::form.actions
            :actions="$this->getFormActions()"
            />
    </x-filament-panels::form>




    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Day
                </th>
                <th scope="col" class="px-6 py-3">
                    8:00-8:50
                </th>
                <th scope="col" class="px-6 py-3">
                    8:50-9 : 40
                </th>
                <th scope="col" class="px-6 py-3">
                    9:40-10:30
                </th>
                <th scope="col" class="px-6 py-3">
                    10:30-11:20
                </th>
                <th scope="col" class="px-6 py-3">
                    11:20-12:10
                </th>
                <th scope="col" class="px-6 py-3">
                    12:10-1 :00
                </th>
                <th scope="col" class="px-6 py-3">
                    1:00- 2:00
                </th>
                <th scope="col" class="px-6 py-3">
                    2:00- 5:00
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($routines as $key=>$routine)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$key}}
                    </th>
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

</x-filament-panels::page>
