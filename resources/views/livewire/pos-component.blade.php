<div>
    <form wire:submit.prevent="addToCart({{ $products[0]->id ?? '' }})" class="mb-4">
        <div class="flex gap-2">
            <input type="text" wire:model.debounce.300ms="search" placeholder="Search product or scan barcode..." class="filament-forms-input w-1/2" />
            <input type="number" min="1" wire:model="quantity" class="filament-forms-input w-24" />
            <button type="submit" class="filament-button filament-button--primary">Add</button>
        </div>
        @if($products && $search)
            <div class="bg-white border rounded mt-2 max-h-40 overflow-y-auto">
                @foreach($products as $product)
                    <div class="p-2 hover:bg-gray-100 cursor-pointer" wire:click="addToCart({{ $product->id }})">
                        {{ $product->name }} ({{ $product->barcode }}) - {{ number_format($product->price, 2) }}
                    </div>
                @endforeach
            </div>
        @endif
    </form>

    <div class="mb-4">
        <label>Customer</label>
        <select wire:model="customer_id" class="filament-forms-input">
            <option value="">Walk-in</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="overflow-x-auto bg-white rounded shadow p-4 mb-4">
        <h2 class="text-lg font-bold mb-4">Cart</h2>
        <table class="min-w-full border">
            <thead>
                <tr>
                    <th class="border px-2 py-1">Product</th>
                    <th class="border px-2 py-1">Price</th>
                    <th class="border px-2 py-1">Quantity</th>
                    <th class="border px-2 py-1">Subtotal</th>
                    <th class="border px-2 py-1">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $index => $item)
                    <tr>
                        <td class="border px-2 py-1">{{ $item['name'] }}</td>
                        <td class="border px-2 py-1">{{ number_format($item['price'], 2) }}</td>
                        <td class="border px-2 py-1">
                            <input type="number" min="1" wire:change="updateQuantity({{ $index }}, $event.target.value)" value="{{ $item['quantity'] }}" class="filament-forms-input w-16" />
                        </td>
                        <td class="border px-2 py-1">{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        <td class="border px-2 py-1">
                            <button type="button" wire:click="removeFromCart({{ $index }})" class="filament-button filament-button--danger">Remove</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4 text-right font-bold">
            Total: {{ number_format($total, 2) }}
        </div>
    </div>

    <div class="flex justify-end">
        <button wire:click="processPayment" class="filament-button filament-button--success">Complete Sale</button>
    </div>

    @if(session()->has('success'))
        <div class="mt-4 p-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif
</div>
