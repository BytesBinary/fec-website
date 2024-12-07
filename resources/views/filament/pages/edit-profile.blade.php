<x-filament-panels::page>
    <x-filament-panels::form>
        {{$this->defaultDetails}}
        <x-filament-panels::form.actions
            :actions="$this->getFormActions('updateDefaultDetails')"/>
    </x-filament-panels::form>
</x-filament-panels::page>
