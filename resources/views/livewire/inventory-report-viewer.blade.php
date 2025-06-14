<div>
    <form wire:submit.prevent="generateReport" class="space-y-4 mb-6">
        <div class="flex gap-4">
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
            <div class="flex items-end">
                <button type="submit" class="filament-button filament-button--primary">Generate Report</button>
            </div>
        </div>
    </form>

    @if(!empty($inventoryData))
        <div class="overflow-x-auto bg-white rounded shadow p-4">
            <h2 class="text-lg font-bold mb-4">Inventory Report</h2>
            <table class="min-w-full border">
                <thead>
                    <tr>
                        <th class="border px-2 py-1">Product</th>
                        <th class="border px-2 py-1">Branch</th>
                        <th class="border px-2 py-1">Current Stock</th>
                        <th class="border px-2 py-1">Inventory Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventoryData as $item)
                        <tr>
                            <td class="border px-2 py-1">{{ $item['product']->name }}</td>
                            <td class="border px-2 py-1">{{ $item['product']->branch->name ?? 'N/A' }}</td>
                            <td class="border px-2 py-1">{{ $item['current_stock'] }}</td>
                            <td class="border px-2 py-1">{{ number_format($item['inventory_value'], 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @elseif($branchId || $productId)
        <div class="mt-4 p-2 bg-yellow-100 text-yellow-800 rounded">
            No inventory data found for the selected criteria.
        </div>
    @endif
</div>
