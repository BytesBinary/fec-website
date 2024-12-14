<x-filament-panels::page>
    <x-filament-panels::form wire:submit="generateReport()">
        {{$this->form}}
        <x-filament-panels::form.actions
            :actions="$this->getFormActions()"/>
    </x-filament-panels::form>
    @if( $isgenerated )
        <div class="flex justify-end">
            <button type="submit" class="bg-primary-600 px-3 py-2 text-white rounded-xl" wire:click="downloadExamReport">
                Download
            </button>
        </div>
        @include('filament.exam-duty-reports.download-exam-report')
    @endif
</x-filament-panels::page>
