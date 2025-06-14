<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Expense;
use Carbon\Carbon;
use Filament\Widgets\Concerns\CanPoll;
use Carbon\CarbonPeriod;
use Livewire\Attributes\On;

class ExpensesChart extends ChartWidget
{
    use CanPoll;

    protected static ?string $heading = 'Expenses Overview';

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
        $expenses = [];
        $period = CarbonPeriod::create($this->startDate, '1 month', $this->endDate);

        foreach ($period as $date) {
            $labels[] = $date->format('M Y');
            $expenses[] = Expense::whereBetween('date', [$date->startOfMonth(), $date->endOfMonth()])->sum('amount');
        }

        return [
            'datasets' => [
                [
                    'label' => 'Expenses',
                    'data' => $expenses,
                    'backgroundColor' => 'rgba(239,68,68,0.7)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bubble';
    }
}
