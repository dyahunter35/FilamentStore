<x-filament::card class="w-full">
    <form wire:submit.prevent="updateFilters">
        {{ $this->form }}
    </form>
</x-filament::card>

