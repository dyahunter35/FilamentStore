<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use Filament\Notifications\Notification;
use Illuminate\Notifications\DatabaseNotification;

class DashboardNotifications extends Widget
{
    protected static string $view = 'filament.widgets.dashboard-notifications';

    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 2;

    protected $listeners = ['notification-marked-as-read' => '$refresh'];

    public function getNotifications(): Collection
    {
        $user = Auth::user();
        return $user ? $user->unreadNotifications : collect();
    }

    public function markAsRead(string $notificationId): void
    {
        $notification = DatabaseNotification::find($notificationId);

        if ($notification) {
            $notification->markAsRead();
            $this->dispatch('notification-marked-as-read');

            // Send a Filament notification for feedback
            Notification::make()
                ->success()
                ->title('Notification marked as read')
                ->send();
        }
    }
}
