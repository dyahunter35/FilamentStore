<?php

namespace App\Notifications;

use App\Models\SalesInvoice;
use App\Filament\Resources\SalesInvoiceResource;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Filament\Notifications\Notification as NotificationsNotification;

class InvoiceDueNotification extends Notification
{
    use Queueable;

    protected $invoice;
    protected $daysUntilDue;

    public function __construct(SalesInvoice $invoice, int $daysUntilDue)
    {
        $this->invoice = $invoice;
        $this->daysUntilDue = $daysUntilDue;
    }

    public function via($notifiable): array
    {
        return ['database', 'mail', 'filament'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Invoice Due Soon')
            ->line("Invoice #{$this->invoice->id} is due in {$this->daysUntilDue} days.")
            ->line("Due Amount: {$this->invoice->due_amount}")
            ->line("Due Date: {$this->invoice->due_date}")
            ->action('View Invoice', url('/admin/sales-invoices/' . $this->invoice->id));
    }

    public function toDatabase($notifiable): array
    {
        return NotificationsNotification::make()
            ->title('Invoice Due Soon')
            ->body("Invoice #{$this->invoice->id} for {$this->invoice->due_amount} is due in {$this->daysUntilDue} days")
            ->url(SalesInvoiceResource::getUrl('edit', ['record' => $this->invoice->id]))
            ->toArray();
    }
}
