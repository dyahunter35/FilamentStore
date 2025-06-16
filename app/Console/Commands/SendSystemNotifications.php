<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\SalesInvoice;
use App\Models\EmployeeLoan;
use App\Notifications\LowStockNotification;
use App\Notifications\InvoiceDueNotification;
use App\Notifications\LoanDeductionNotification;

class SendSystemNotifications extends Command
{
    protected $signature = 'app:send-system-notifications';
    protected $description = 'Send system notifications for low stock, due invoices, and loan deductions';

    public function handle()
    {
        $this->checkLowStock();
        $this->checkDueInvoices();
        $this->checkLoanDeductions();

        $this->info('All system notifications have been processed.');
    }

    protected function checkLowStock()
    {
        $products = Product::where('quantity', '<=', 'min_quantity')->get();
        foreach ($products as $product) {
            $product->notify(new LowStockNotification($product));
        }
        $this->info("Low stock notifications sent for {$products->count()} products.");
    }

    protected function checkDueInvoices()
    {
        $dueInvoices = SalesInvoice::where('due_date', '>', Carbon::now())
            ->where('due_date', '<=', Carbon::now()->addDays(7))
            ->where('status', '!=', 'paid')
            ->get();

        foreach ($dueInvoices as $invoice) {
            $daysUntilDue = Carbon::now()->diffInDays($invoice->due_date);
            $invoice->customer->notify(new InvoiceDueNotification($invoice, $daysUntilDue));
        }
        $this->info("Due invoice notifications sent for {$dueInvoices->count()} invoices.");
    }

    protected function checkLoanDeductions()
    {
        $activeLoans = EmployeeLoan::where('status', 'active')
            ->where('remaining_amount', '>', 0)
            ->get();

        foreach ($activeLoans as $loan) {
            if ($loan->next_deduction_date <= Carbon::now()) {
                $loan->employee->notify(new LoanDeductionNotification($loan, $loan->monthly_deduction));
            }
        }
        $this->info("Loan deduction notifications checked for {$activeLoans->count()} active loans.");
    }
}
