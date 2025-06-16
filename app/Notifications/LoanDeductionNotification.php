<?php

namespace App\Notifications;

use App\Models\EmployeeLoan;
use App\Filament\Resources\EmployeeLoanResource;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Filament\Notifications\Notification as NotificationsNotification;

class LoanDeductionNotification extends Notification
{
    use Queueable;

    protected $employeeLoan;
    protected $deductionAmount;

    public function __construct(EmployeeLoan $employeeLoan, float $deductionAmount)
    {
        $this->employeeLoan = $employeeLoan;
        $this->deductionAmount = $deductionAmount;
    }

    public function via($notifiable): array
    {
        return ['database', 'mail', 'filament'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Loan Deduction Applied')
            ->line("A loan deduction has been applied to your payroll.")
            ->line("Deduction Amount: {$this->deductionAmount}")
            ->line("Remaining Balance: {$this->employeeLoan->remaining_amount}")
            ->action('View Loan Details', url('/admin/employee-loans/' . $this->employeeLoan->id));
    }

    public function toDatabase($notifiable): array
    {
        return NotificationsNotification::make()
            ->title('Loan Deduction Applied')
            ->body("Loan deduction of {$this->deductionAmount} applied. Remaining balance: {$this->employeeLoan->remaining_amount}")
            ->url(EmployeeLoanResource::getUrl('edit', ['record' => $this->employeeLoan->id]))
            ->toArray();
    }
}
