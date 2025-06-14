<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Illuminate\Support\Carbon;
use App\Models\Attendance;
use App\Models\Employee;

class AttendanceReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static string $view = 'filament.pages.attendance-report';
    protected static ?string $title = 'Attendance Report';

    public $filterType = 'month';
    public $selectedMonth;
    public $selectedWeek;
    public $attendances = [];

    public function mount()
    {
        $this->selectedMonth = now()->format('Y-m');
        $this->selectedWeek = now()->startOfWeek()->format('Y-m-d');
        $this->loadAttendances();
    }

    public function updated($property)
    {
        if (in_array($property, ['filterType', 'selectedMonth', 'selectedWeek'])) {
            $this->loadAttendances();
        }
    }

    public function loadAttendances()
    {
        $query = Attendance::with('employee');
        if ($this->filterType === 'month') {
            $query->whereMonth('date', Carbon::parse($this->selectedMonth)->month)
                  ->whereYear('date', Carbon::parse($this->selectedMonth)->year);
        } else {
            $start = Carbon::parse($this->selectedWeek);
            $end = $start->copy()->endOfWeek();
            $query->whereBetween('date', [$start, $end]);
        }
        $this->attendances = $query->get();
    }

    public function printReport()
    {
        // This can trigger a JS print in the view
    }
}
