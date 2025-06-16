<div>
    <form wire:submit.prevent="generateReport" class="space-y-4 mb-6">
        <div class="flex gap-4">
            <div>
                <label for="startDate">From Date</label>
                <input type="date" wire:model="startDate" id="startDate" class="filament-forms-input" />
            </div>
            <div>
                <label for="endDate">To Date</label>
                <input type="date" wire:model="endDate" id="endDate" class="filament-forms-input" />
            </div>
            <div>
                <label for="branchId">Select Branch</label>
                <select wire:model="branchId" id="branchId" class="filament-forms-input">
                    <option value="">-- All Branches --</option>
                    @foreach($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="productId">Select Product</label>
                <select wire:model="productId" id="productId" class="filament-forms-input">
                    <option value="">-- All Products --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="supplierId">Select Supplier</label>
                <select wire:model="supplierId" id="supplierId" class="filament-forms-input">
                    <option value="">-- All Suppliers --</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="filament-button filament-button--primary">Generate Report</button>
            </div>
        </div>
    </form>

    @if(!empty($purchaseInvoices))
        <div class="overflow-x-auto bg-white rounded shadow p-4">
            <h2 class="text-lg font-bold mb-4">Purchase Report</h2>
            <table class="min-w-full border">
                <thead>
                    <tr>
                        <th class="border px-2 py-1">Invoice #</th>
                        <th class="border px-2 py-1">Date</th>
                        <th class="border px-2 py-1">Supplier</th>
                        <th class="border px-2 py-1">Branch</th>
                        <th class="border px-2 py-1">Total Amount</th>
                        <th class="border px-2 py-1">Discount</th>
                        <th class="border px-2 py-1">Final Amount</th>
                        <th class="border px-2 py-1">Status</th>
                        <th class="border px-2 py-1">Items</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($purchaseInvoices as $invoice)
                        <tr>
                            <td class="border px-2 py-1">{{ $invoice->id }}</td>
                            <td class="border px-2 py-1">{{ \Carbon\Carbon::parse($invoice->date)->format('Y-m-d') }}</td>
                            <td class="border px-2 py-1">{{ $invoice->supplier->name ?? 'N/A' }}</td>
                            <td class="border px-2 py-1">{{ $invoice->branch->name ?? 'N/A' }}</td>
                            <td class="border px-2 py-1">{{ number_format($invoice->total_amount, 2) }}</td>
                            <td class="border px-2 py-1">{{ number_format($invoice->discount, 2) }}</td>
                            <td class="border px-2 py-1">{{ number_format($invoice->final_amount, 2) }}</td>
                            <td class="border px-2 py-1">{{ $invoice->status }}</td>
                            <td class="border px-2 py-1">
                                <ul>
                                    @foreach($invoice->items as $item)
                                        <li>{{ $item->product->name ?? 'N/A' }} ({{ $item->quantity }} @ {{ number_format($item->unit_price, 2) }})</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @elseif($startDate || $endDate || $branchId || $productId || $supplierId)
        <div class="mt-4 p-2 bg-yellow-100 text-yellow-800 rounded">
            No purchase data found for the selected criteria.
        </div>
    @endif
</div>
