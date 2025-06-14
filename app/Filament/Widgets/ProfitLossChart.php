<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\SalesInvoice;
use App\Models\Expense;
use App\Models\OtherRevenue;
use Carbon\Carbon;
use Filament\Widgets\Concerns\CanPoll;
use Carbon\CarbonPeriod;
use Livewire\Attributes\On;

class ProfitLossChart extends ChartWidget
{
    use CanPoll;

    protected static ?string $heading = 'Profit & Loss Overview';

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
        $labels = [];
        $sales = [];
        $expenses = [];
        $otherRevenues = [];
        $period = CarbonPeriod::create($this->startDate, '1 month', $this->endDate);

        foreach ($period as $date) {
            $labels[] = $date->format('M Y');
            $sales[] = SalesInvoice::whereBetween('date', [$date->startOfMonth(), $date->endOfMonth()])->sum('final_amount');
            $expenses[] = Expense::whereBetween('date', [$date->startOfMonth(), $date->endOfMonth()])->sum('amount');
            $otherRevenues[] = OtherRevenue::whereBetween('date', [$date->startOfMonth(), $date->endOfMonth()])->sum('amount');
        }

        $profit = collect($sales)->map(function($sale, $i) use ($expenses, $otherRevenues) {
            return $sale + $otherRevenues[$i] - $expenses[$i];
        });

        return [
            'datasets' => [
                [
                    'label' => 'Profit',
                    'data' => $profit,
                    'backgroundColor' => 'rgba(34,197,94,0.7)',
                ],
                [
                    'label' => 'Sales',
                    'data' => $sales,
                    'backgroundColor' => 'rgba(59,130,246,0.7)',
                ],
                [
                    'label' => 'Expenses',
                    'data' => $expenses,
                    'backgroundColor' => 'rgba(239,68,68,0.7)',
                ],
                [
                    'label' => 'Other Revenue',
                    'data' => $otherRevenues,
                    'backgroundColor' => 'rgba(251,191,36,0.7)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
