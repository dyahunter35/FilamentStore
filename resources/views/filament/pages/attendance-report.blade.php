@extends('filament::page')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col md:flex-row md:items-end md:space-x-4 space-y-2 md:space-y-0">
        <div>
            <label class="block text-sm font-medium">Filter Type</label>
            <select wire:model="filterType" class="filament-forms-input">
                <option value="month">Month</option>
                <option value="week">Week</option>
            </select>
        </div>
        <div x-data="{}">
            <label class="block text-sm font-medium">Select Month</label>
            <input type="month" wire:model="selectedMonth" class="filament-forms-input" @if($filterType !== 'month') disabled @endif>
        </div>
        <div x-data="{}">
            <label class="block text-sm font-medium">Select Week (start date)</label>
            <input type="date" wire:model="selectedWeek" class="filament-forms-input" @if($filterType !== 'week') disabled @endif>
        </div>
        <div class="ml-auto">
            <button onclick="window.print()" class="filament-button filament-button--primary">Print</button>
        </div>
    </div>

    <div class="overflow-x-auto bg-white rounded shadow p-4 print:p-0 print:shadow-none">
        <h2 class="text-lg font-bold mb-4">Attendance Report</h2>
        <table class="min-w-full border">
            <thead>
                <tr>
                    <th class="border px-2 py-1">Employee</th>
                    <th class="border px-2 py-1">Date</th>
                    <th class="border px-2 py-1">Clock In</th>
                    <th class="border px-2 py-1">Clock Out</th>
                    <th class="border px-2 py-1">Branch</th>
                </tr>
            </thead>
            <tbody>
                @forelse($attendances as $attendance)
                    <tr>
                        <td class="border px-2 py-1">{{ $attendance->employee->name ?? '-' }}</td>
                        <td class="border px-2 py-1">{{ $attendance->date }}</td>
                        <td class="border px-2 py-1">{{ $attendance->clock_in }}</td>
                        <td class="border px-2 py-1">{{ $attendance->clock_out }}</td>
                        <td class="border px-2 py-1">{{ $attendance->branch->name ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-2">No attendance records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<style>
@media print {
    body * { visibility: hidden; }
    .print\:p-0, .print\:p-0 * { visibility: visible !important; }
    .print\:shadow-none { box-shadow: none !important; }
    .filament-button, .filament-forms-input, select, input { display: none !important; }
}
</style>
@endpush
