<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Product;

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
        return ['mail', 'database'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Low Stock Alert')
            ->line("The product {$this->product->name} is running low on stock.")
            ->line("Current quantity: {$this->product->quantity}")
            ->line("Minimum quantity: {$this->product->min_quantity}")
            ->action('View Product', url("/admin/products/{$this->product->id}"))
            ->line('Please reorder soon to maintain adequate inventory levels.');
    }

    public function toArray($notifiable): array
    {
        return [
            'product_id' => $this->product->id,
            'product_name' => $this->product->name,
            'current_quantity' => $this->product->quantity,
            'min_quantity' => $this->product->min_quantity,
        ];
    }
}
