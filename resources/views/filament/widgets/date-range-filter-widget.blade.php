<x-filament::card >
    <form wire:submit.prevent="updateFilters">
        {{ $this->form }}
    </form>
</x-filament::card>

