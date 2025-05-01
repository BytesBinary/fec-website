<x-filament-panels::page>
    <x-filament-panels::form>
        {{ $this->form }}
        @if(empty($record))
            <x-filament-panels::form.actions :actions="$this->getFormActions()" />
        @else
            <x-filament-panels::form.actions :actions="$this->getFormActions('update')" />
        @endif
    </x-filament-panels::form>
</x-filament-panels::page>
