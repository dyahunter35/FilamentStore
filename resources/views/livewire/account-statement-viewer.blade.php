<div>
    <form wire:submit.prevent="generateStatement" class="space-y-4 mb-6">
        <div class="flex gap-4">
            <div>
                <label for="entityType">Select Type</label>
                <select wire:model="entityType" id="entityType" class="filament-forms-input">
                    <option value="customer">Customer</option>
                    <option value="supplier">Supplier</option>
                </select>
            </div>
            <div>
                <label for="entityId">Select {{ ucfirst($entityType) }}</label>
                <select wire:model="entityId" id="entityId" class="filament-forms-input">
                    <option value="">-- Select {{ ucfirst($entityType) }} --</option>
                    @if($entityType === 'customer')
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    @elseif($entityType === 'supplier')
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div>
                <label for="startDate">From Date</label>
                <input type="date" wire:model="startDate" id="startDate" class="filament-forms-input" />
            </div>
            <div>
                <label for="endDate">To Date</label>
                <input type="date" wire:model="endDate" id="endDate" class="filament-forms-input" />
            </div>
            <div class="flex items-end">
                <button type="submit" class="filament-button filament-button--primary">Generate Statement</button>
            </div>
        </div>
    </form>

    @if(!empty($transactions))
        <div class="overflow-x-auto bg-white rounded shadow p-4">
            <h2 class="text-lg font-bold mb-4">Account Statement</h2>
            <table class="min-w-full border">
                <thead>
                    <tr>
                        <th class="border px-2 py-1">Date</th>
                        <th class="border px-2 py-1">Type</th>
                        <th class="border px-2 py-1">Number</th>
                        <th class="border px-2 py-1">Amount</th>
                        <th class="border px-2 py-1">Balance</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td class="border px-2 py-1">{{ \Carbon\Carbon::parse($transaction['date'])->format('Y-m-d') }}</td>
                            <td class="border px-2 py-1">{{ $transaction['type'] }}</td>
                            <td class="border px-2 py-1">{{ $transaction['number'] }}</td>
                            <td class="border px-2 py-1">{{ number_format($transaction['amount'], 2) }}</td>
                            <td class="border px-2 py-1">{{ number_format($transaction['balance'], 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @elseif($entityId)
        <div class="mt-4 p-2 bg-yellow-100 text-yellow-800 rounded">
            No transactions found for the selected {{ $entityType }} in the specified date range.
        </div>
    @endif
</div>
