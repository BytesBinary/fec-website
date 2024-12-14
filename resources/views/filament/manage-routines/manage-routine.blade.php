<x-filament-panels::page>
    @if($showRoutineDetails)
        @include('filament.manage-routines.routine-form')
        <div class="flex justify-end">
            <button type="submit" class="bg-primary-600 px-3 py-2 text-white rounded-xl" wire:click="download"> Click Download Routine </button>
        </div>
        @include('filament.manage-routines.routine-table')
    @endif
</x-filament-panels::page>
