<x-filament-panels::page>
    <x-filament-panels::form wire:submit="saveDetails">
        {{$this->form}}
        <x-filament-panels::form.actions
            :actions="$this->getFormActions()"
        />
    </x-filament-panels::form>
    <div class="flex flex-row justify-end">
        <button type="button" style="
        background-color: #f44336;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;"
                wire:click="download">
            Download Routine
        </button>
    </div>
    @include('filament.resources.routine-resource.pages.partials.routine-table')
</x-filament-panels::page>
