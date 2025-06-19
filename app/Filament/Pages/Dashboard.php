<?php
namespace App\Filament\Pages;

use App\Filament\Traits\HasDashboardFilters;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Forms\Components\DatePicker;
use App\Filament\Widgets\DateRangeFilterWidget;
use Filament\Widgets\Widget;
use App\Filament\Widgets\ProfitLossChart;
use App\Filament\Widgets\SalesChart;
use App\Filament\Widgets\PurchasesChart;
use App\Filament\Widgets\ExpensesChart;
use App\Filament\Widgets\InventoryValueChart;

class Dashboard extends BaseDashboard
{
    use HasDashboardFilters;

    protected $queryString = [
        'filters' => ['except' => []],
    ];

    public $filters = [
        'start_date' => null,
        'end_date' => null,
    ];


    protected function getHeaderWidgets(): array
    {
        return [
            //DateRangeFilterWidget::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            //
        ];
    }

    public function getWidgets(): array
    {
        return [
            ProfitLossChart::class,
            SalesChart::class,
            PurchasesChart::class,
            ExpensesChart::class,
            InventoryValueChart::class,
        ];
    }

    protected function getListeners(): array
    {
        return [
            'dateRangeUpdated' => 'handleFilterUpdate',
        ];
    }

    public function handleFilterUpdate(array $filters): void
    {
        $this->filters = array_merge($this->filters, $filters);
        $this->resetPage();
    }

    public function resetFilters(): void
    {
        $this->reset('filters');
    }

}
