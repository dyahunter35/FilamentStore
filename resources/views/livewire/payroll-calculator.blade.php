<div>
    <form wire:submit.prevent="calculatePayroll" class="space-y-4 mb-6">
        <div class="flex gap-4">
            <div>
                <label>Month</label>
                <input type="number" min="1" max="12" wire:model="month" class="filament-forms-input" />
            </div>
            <div>
                <label>Year</label>
                <input type="number" min="2000" max="2100" wire:model="year" class="filament-forms-input" />
            </div>
            <div>
                <label>Branch</label>
                <select wire:model="branch_id" class="filament-forms-input">
                    @foreach($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="filament-button filament-button--primary">Calculate Payroll</button>
            </div>
        </div>
    </form>

    @if($showTable)
        <form wire:submit.prevent="savePayroll">
            <div class="overflow-x-auto bg-white rounded shadow p-4">
                <h2 class="text-lg font-bold mb-4">Payroll for {{ $month }}/{{ $year }}</h2>
                <table class="min-w-full border">
                    <thead>
                        <tr>
                            <th class="border px-2 py-1">Employee</th>
                            <th class="border px-2 py-1">Base Salary</th>
                            <th class="border px-2 py-1">Salary Deduction</th>
                            <th class="border px-2 py-1">Loan Deduction</th>
                            <th class="border px-2 py-1">Bonus</th>
                            <th class="border px-2 py-1">Net Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payrollRows as $row)
                            <tr>
                                <td class="border px-2 py-1">{{ $row['employee']->name }}</td>
                                <td class="border px-2 py-1">{{ number_format($row['baseSalary'], 2) }}</td>
                                <td class="border px-2 py-1">{{ number_format($row['salaryDeduction'], 2) }}</td>
                                <td class="border px-2 py-1">{{ number_format($row['loanDeduction'], 2) }}</td>
                                <td class="border px-2 py-1">
                                    <input type="number" step="0.01" wire:model.defer="bonuses.{{ $row['employee']->id }}" class="filament-forms-input w-24" />
                                </td>
                                <td class="border px-2 py-1">{{ number_format($row['netPay'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4 text-right font-bold">
                    Total Payroll: {{ number_format($totalPayroll, 2) }}
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="filament-button filament-button--success">Save Payroll</button>
                </div>
            </div>
        </form>
    @endif

    @if(session()->has('success'))
        <div class="mt-4 p-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif
</div>
