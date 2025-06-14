<?php

namespace App\Notifications;

use App\Filament\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Filament\Notifications\Notification as NotificationsNotification;

class LowStockNotification extends Notification
{
    use Queueable;

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function via($notifiable): array
    {
        return ['database', 'mail', 'filament'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Low Stock Alert')
            ->line("Product {$this->product->name} is running low on stock.")
            ->line("Current quantity: {$this->product->quantity}")
            ->line("Reorder point: {$this->product->reorder_point}")
            ->action('View Product', url('/admin/products/' . $this->product->id));
    }

    /* public function toArray($notifiable): array
    {
        return [
            'product_id' => $this->product->id,
            'product_name' => $this->product->name,
            'quantity' => $this->product->quantity,
            'reorder_point' => $this->product->reorder_point,
        ];
    } */

    public function toDatabase($notifiable): array
    {
        return NotificationsNotification::make()
            ->title('Low Stock Alert')
            ->body("Product {$this->product->name} is running low on stock. Current quantity: {$this->product->quantity}, Reorder point: {$this->product->reorder_point}")
            ->url(ProductResource::getUrl('edit',['record' => $this->product->id]))
            ->toArray();

    }
}
