<x-filament::widget>
    <x-filament::section>
        <div class="flex items-center gap-x-3">
            <div class="flex-1">
                <h2 class="text-lg sm:text-xl font-bold tracking-tight">
                    {{ __('Recent Notifications') }}
                </h2>
            </div>
        </div>

        <div class="mt-4 divide-y">
            @forelse($this->getNotifications() as $notification)
                <div class="py-4" wire:key="{{ $notification->id }}">
                    <div class="flex items-start justify-between gap-x-3">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                {{ $notification->data['title'] ?? 'Notification' }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                {{ $notification->data['message'] ?? '' }}
                            </p>
                            <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">
                                {{ $notification->created_at->diffForHumans() }}
                            </p>
                        </div>

                        <div class="flex-shrink-0">
                            <button
                                wire:click="markAsRead('{{ $notification->id }}')"
                                class="text-sm text-primary-600 hover:text-primary-500 dark:text-primary-500 dark:hover:text-primary-400"
                            >
                                {{ __('Mark as read') }}
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="px-4 py-8 text-center">
                    <div class="text-sm text-gray-500 dark:text-gray-400">
                        {{ __('No new notifications') }}
                    </div>
                </div>
            @endforelse
        </div>
    </x-filament::section>
</x-filament::widget>
