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
    @endif
</x-filament-panels::page>
