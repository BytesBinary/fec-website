<x-filament-panels::page>
    <x-filament-panels::form wire:submit="generate()">
        {{$this->form}}
        <x-filament-panels::form.actions
            :actions="$this->getFormActions()"/>
    </x-filament-panels::form>
    @if($showReport)
        @if( !empty( $routines ) )
            <div class="flex justify-end">
                <button type="submit" class="bg-primary-600 px-3 py-2 text-white rounded-xl" wire:click="downloadRoutine">
                    Download
                </button>
            </div>
            @include('filament.manage-routines.routine-table')
        @endif
        @if( !empty( $credit_history ) )
            <div class="flex justify-end">
                <button type="submit" class="bg-primary-600 px-3 py-2 text-white rounded-xl" wire:click="downloadCreditHistory">
                    Download
                </button>
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
        @endif
    @endif
</x-filament-panels::page>
