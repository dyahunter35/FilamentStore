<div>
    <h2 class="text-2xl font-bold mb-4">{{ __('purchase_report.title') }}</h2>
    <p class="mb-4 text-gray-600">{{ __('purchase_report.description') }}</p>

    <form wire:submit.prevent="generateReport" class="space-y-4 mb-6">
        <div class="flex gap-4">
            <div>
                <label for="startDate">{{ __('purchase_report.filters.date_range.start_date.label') }}</label>
                <input type="date" 
                    wire:model="startDate" 
                    id="startDate" 
                    class="filament-forms-input"
                    placeholder="{{ __('purchase_report.filters.date_range.start_date.placeholder') }}" />
            </div>
            <div>
                <label for="endDate">{{ __('purchase_report.filters.date_range.end_date.label') }}</label>
                <input type="date" 
                    wire:model="endDate" 
                    id="endDate" 
                    class="filament-forms-input"
                    placeholder="{{ __('purchase_report.filters.date_range.end_date.placeholder') }}" />
            </div>
            <div>
                <label for="branchId">{{ __('purchase_report.filters.branch.label') }}</label>
                <select wire:model="branchId" id="branchId" class="filament-forms-input">
                    <option value="">{{ __('purchase_report.filters.branch.placeholder') }}</option>
                    @foreach($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="productId">{{ __('purchase_report.filters.product.label') }}</label>
                <select wire:model="productId" id="productId" class="filament-forms-input">
                    <option value="">{{ __('purchase_report.filters.product.placeholder') }}</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="supplierId">{{ __('purchase_report.filters.supplier.label') }}</label>
                <select wire:model="supplierId" id="supplierId" class="filament-forms-input">
                    <option value="">{{ __('purchase_report.filters.supplier.placeholder') }}</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="filament-button filament-button--primary">
                    {{ __('purchase_report.buttons.generate') }}
                </button>
            </div>
        </div>
    </form>

    @if(!empty($purchaseInvoices))
        <div class="overflow-x-auto bg-white rounded shadow p-4">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">{{ __('purchase_report.title') }}</h2>
                <div class="space-x-2">
                    <button class="filament-button filament-button--secondary" onclick="window.print()">
                        {{ __('purchase_report.buttons.print') }}
                    </button>
                    <button class="filament-button filament-button--secondary">
                        {{ __('purchase_report.buttons.export') }}
                    </button>
                </div>
            </div>

            <table class="min-w-full border">
                <thead>
                    <tr>
                        <th class="border px-2 py-1">{{ __('purchase_report.table.columns.invoice_number') }}</th>
                        <th class="border px-2 py-1">{{ __('purchase_report.table.columns.date') }}</th>
                        <th class="border px-2 py-1">{{ __('purchase_report.table.columns.supplier') }}</th>
                        <th class="border px-2 py-1">{{ __('purchase_report.table.columns.branch') }}</th>
                        <th class="border px-2 py-1">{{ __('purchase_report.table.columns.total_amount') }}</th>
                        <th class="border px-2 py-1">{{ __('purchase_report.table.columns.paid_amount') }}</th>
                        <th class="border px-2 py-1">{{ __('purchase_report.table.columns.remaining_amount') }}</th>
                        <th class="border px-2 py-1">{{ __('purchase_report.table.columns.status') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($purchaseInvoices as $invoice)
                        <tr>
                            <td class="border px-2 py-1">{{ $invoice->invoice_number }}</td>
                            <td class="border px-2 py-1">{{ $invoice->date?->format('Y-m-d') }}</td>
                            <td class="border px-2 py-1">{{ $invoice->supplier->name ?? 'N/A' }}</td>
                            <td class="border px-2 py-1">{{ $invoice->branch->name ?? 'N/A' }}</td>
                            <td class="border px-2 py-1">{{ number_format($invoice->total_amount, 2) }}</td>
                            <td class="border px-2 py-1">{{ number_format($invoice->paid_amount, 2) }}</td>
                            <td class="border px-2 py-1">{{ number_format($invoice->remaining_amount, 2) }}</td>
                            <td class="border px-2 py-1">{{ $invoice->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="font-bold">
                        <td colspan="4" class="border px-2 py-1 text-right">{{ __('purchase_report.totals.total_purchases') }}</td>
                        <td class="border px-2 py-1">{{ number_format($purchaseInvoices->sum('total_amount'), 2) }}</td>
                        <td class="border px-2 py-1">{{ number_format($purchaseInvoices->sum('paid_amount'), 2) }}</td>
                        <td class="border px-2 py-1">{{ number_format($purchaseInvoices->sum('remaining_amount'), 2) }}</td>
                        <td class="border px-2 py-1"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    @elseif($startDate || $endDate || $branchId || $productId || $supplierId)
        <div class="mt-4 p-2 bg-yellow-100 text-yellow-800 rounded">
            {{ __('purchase_report.empty_message') }}
        </div>
    @endif
</div>
