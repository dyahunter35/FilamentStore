<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductCategory;
use App\Models\ProductUnit;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $defaultBranch =  Branch::inRandomOrder()->first()->id; // Assuming we have at least one branch
        $defaultBrand = Brand::inRandomOrder()->first();
        $pieceUnit = ProductUnit::first()->id;
        $reemUnit = ProductUnit::first()->id;


        $products = [
            [
                'name' => 'Laptop Computer',
                'description' => 'High-performance laptop for business use',
                'branch_id' => $defaultBranch,
                'brand_id' =>  Brand::inRandomOrder()->first()?->id,
                'unit_id' =>  ProductUnit::inRandomOrder()->first()?->id,
                'category_id' =>  ProductCategory::inRandomOrder()->first()?->id,
                'sku' => 'LAP001',
                'price' => 1200.00,
                'cost' => 800.00,
                'quantity' => 25,
                'reorder_point' => 10,
                'serial_numbers' => ['LAP001-001', 'LAP001-002', 'LAP001-003'],
                'status' => 'active',
            ],
            [
                'name' => 'Office Chair',
                'description' => 'Comfortable ergonomic office chair',
                'branch_id' => $defaultBranch,
                'brand_id' =>  Brand::inRandomOrder()->first()?->id,
                'unit_id' =>  ProductUnit::inRandomOrder()->first()?->id,
                'category_id' =>  ProductCategory::inRandomOrder()->first()?->id,
                'sku' => 'CHA001',
                'price' => 250.00,
                'cost' => 150.00,
                'quantity' => 15,
                'reorder_point' => 5,
                'serial_numbers' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Printer Paper A4',
                'description' => 'High-quality A4 printing paper, 500 sheets',
                'branch_id' => $defaultBranch,
                'brand_id' =>  Brand::inRandomOrder()->first()?->id,
                'unit_id' =>  ProductUnit::inRandomOrder()->first()?->id,
                'category_id' =>  ProductCategory::inRandomOrder()->first()?->id,
                'sku' => 'PAP001',
                'price' => 6.00,
                'cost' => 3.50,
                'quantity' => 250,
                'reorder_point' => 100,
                'serial_numbers' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with USB receiver',
                'branch_id' => $defaultBranch,
                'brand_id' =>  Brand::inRandomOrder()->first()?->id,
                'unit_id' =>  ProductUnit::inRandomOrder()->first()?->id,
                'category_id' =>  ProductCategory::inRandomOrder()->first()?->id,
                'sku' => 'MOU001',
                'price' => 25.00,
                'cost' => 15.00,
                'quantity' => 120,
                'reorder_point' => 50,
                'serial_numbers' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Monitor 24 inch',
                'description' => '24-inch LED monitor with HDMI',
                'branch_id' => $defaultBranch,
                'brand_id' =>  Brand::inRandomOrder()->first()?->id,
                'unit_id' =>  ProductUnit::inRandomOrder()->first()?->id,
                'category_id' =>  ProductCategory::inRandomOrder()->first()?->id,
                'sku' => 'MON001',
                'price' => 280.00,
                'cost' => 180.00,
                'quantity' => 20,
                'reorder_point' => 8,
                'serial_numbers' => ['MON001-001', 'MON001-002', 'MON001-003'],
                'status' => 'active',
            ],
            [
                'name' => 'Mechanical Keyboard',
                'description' => 'Mechanical gaming keyboard with RGB lighting',
                'branch_id' => $defaultBranch,
                'brand_id' =>  Brand::inRandomOrder()->first()?->id,
                'unit_id' =>  ProductUnit::inRandomOrder()->first()?->id,
                'category_id' =>  ProductCategory::inRandomOrder()->first()?->id,
                'sku' => 'KEY001',
                'price' => 100.00,
                'cost' => 60.00,
                'quantity' => 35,
                'reorder_point' => 15,
                'serial_numbers' => null,
                'status' => 'active',
            ],
            [
                'name' => 'LED Desk Lamp',
                'description' => 'Adjustable LED desk lamp with touch control',
                'branch_id' => $defaultBranch,
                'brand_id' =>  Brand::inRandomOrder()->first()?->id,
                'unit_id' =>  ProductUnit::inRandomOrder()->first()?->id,
                'category_id' =>  ProductCategory::inRandomOrder()->first()?->id,
                'sku' => 'LAM001',
                'price' => 45.00,
                'cost' => 25.00,
                'quantity' => 40,
                'reorder_point' => 20,
                'serial_numbers' => null,
                'status' => 'inactive',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
