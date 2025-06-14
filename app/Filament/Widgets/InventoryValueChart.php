<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\CanPoll;
use Carbon\CarbonPeriod;
use App\Models\Product;
use Livewire\Attributes\On;

class InventoryValueChart extends ChartWidget
{
    use CanPoll;

    protected static ?string $heading = 'Inventory Value Distribution';

    public $startDate;
    public $endDate;

    public function mount(): void
    {
        $this->startDate = now()->subMonths(5)->startOfMonth()->toDateString();
        $this->endDate = now()->endOfMonth()->toDateString();
    }

    #[On('dateRangeUpdated')]
    public function updateDateRange($data)
    {
        $this->startDate = $data['start_date'] ?? $this->startDate;
        $this->endDate = $data['end_date'] ?? $this->endDate;
        $this->updateChartData();
    }

    protected function getData(): array
    {
        $from = $this->startDate;
        $to = $this->endDate;

        // For inventory value, we might want to show the value at the end of each month in the range
        $labels = [];
        $values = [];
        $period = CarbonPeriod::create($from, '1 month', $to);

        foreach ($period as $date) {
            $labels[] = $date->format('M Y');
            // Calculate inventory value at the end of the month
            // This is a simplified calculation and might need adjustment based on your exact inventory tracking
            $inventoryValue = collect();
                /* \App\Models\Product::whereHas('salesInvoiceItems', function ($query) use ($date) {
                    $query->whereHas('salesInvoice', function ($query) use ($date) {
                        $query->where('date', '<=', $date->endOfMonth());
                    });
                })
                ->orWhereDoesntHave('salesInvoiceItems') // Include products that haven't been sold yet
                ->get()
                ->sum(function ($product) use ($date) {
                    // This is a simplified approach. A more accurate method would track inventory changes over time.
                    // For this example, we'll just use the current quantity and price.
                    return $product->price * $product->quantity;
                }); */

            $values[] = $inventoryValue;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Inventory Value',
                    'data' => $values,
                    'backgroundColor' => [
                        'rgba(59,130,246,0.7)',
                        'rgba(251,191,36,0.7)',
                        'rgba(34,197,94,0.7)',
                        'rgba(239,68,68,0.7)',
                        'rgba(168,85,247,0.7)',
                        'rgba(16,185,129,0.7)',
                    ],
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
