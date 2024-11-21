<x-filament-panels::page>

    <x-filament-panels::form wire:submit="showRoutine">
        {{$this->form}}
        <x-filament-panels::form.actions
            :actions="$this->getFormActions()"/>
    </x-filament-panels::form>

    <!-- Loader --->
    <div wire:loading wire:target="showRoutine" class="mb-1">
        <x-filament::loading-indicator class="h-10 w-10" />
    </div>

    @if($showRoutineDetails)
        @include('filament.manage-routines.routine-form')
        <div class="flex justify-end">
            <button type="submit" class="bg-primary-600 px-3 py-2 text-white rounded-xl" wire:click="download"> Click Download Routine </button>
        </div>
        @include('filament.manage-routines.routine-table')
    @endif

</x-filament-panels::page>
