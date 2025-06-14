<div class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <label class="block text-sm font-medium">Branch</label>
            <select wire:model="branchId" class="w-full rounded border-gray-300">
                <option value="">All Branches</option>
                @foreach($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium">Category</label>
            <select wire:model="categoryId" class="w-full rounded border-gray-300">
                <option value="">All Categories</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium">Date From</label>
            <input type="date" wire:model="dateFrom" class="w-full rounded border-gray-300" />
        </div>
        <div>
            <label class="block text-sm font-medium">Date To</label>
            <input type="date" wire:model="dateTo" class="w-full rounded border-gray-300" />
        </div>
    </div>

    <div class="bg-white rounded shadow p-4">
        <h2 class="text-lg font-bold mb-2">Total Expenses</h2>
        <div class="text-2xl font-semibold">{{ number_format($total, 2) }}</div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white rounded shadow p-4">
            <h3 class="font-bold mb-2">By Category</h3>
            <ul>
                @foreach($byCategory as $row)
                    <li>
                        {{ $row->category?->name ?? 'Uncategorized' }}: <span class="font-semibold">{{ number_format($row->total, 2) }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="bg-white rounded shadow p-4">
            <h3 class="font-bold mb-2">By Branch</h3>
            <ul>
                @foreach($byBranch as $row)
                    <li>
                        {{ $row->branch?->name ?? 'Unknown Branch' }}: <span class="font-semibold">{{ number_format($row->total, 2) }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
