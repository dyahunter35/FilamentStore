<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop Computer',
                'description' => 'High-performance laptop for business use',
                'sku' => 'LAP001',
                'barcode' => '1234567890123',
                'brand' => 'TechBrand',
                'unit' => 'pcs',
                'cost' => 800.00,
                'price' => 1200.00,
                'reorder_point' => 10,
                'current_stock' => 25,
                'weight' => 2.5,
                'dimensions' => '35x25x2 cm',
                'status' => 'active',
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with USB receiver',
                'sku' => 'MOU001',
                'barcode' => '2345678901234',
                'brand' => 'TechBrand',
                'unit' => 'pcs',
                'cost' => 15.00,
                'price' => 25.00,
                'reorder_point' => 50,
                'current_stock' => 120,
                'weight' => 0.1,
                'dimensions' => '10x6x3 cm',
                'status' => 'active',
            ],
            [
                'name' => 'Office Chair',
                'description' => 'Comfortable ergonomic office chair',
                'sku' => 'CHA001',
                'barcode' => '3456789012345',
                'brand' => 'ComfortSeating',
                'unit' => 'pcs',
                'cost' => 150.00,
                'price' => 250.00,
                'reorder_point' => 5,
                'current_stock' => 15,
                'weight' => 18.0,
                'dimensions' => '60x60x120 cm',
                'status' => 'active',
            ],
            [
                'name' => 'Printer Paper A4',
                'description' => 'High-quality A4 printing paper, 500 sheets',
                'sku' => 'PAP001',
                'barcode' => '4567890123456',
                'brand' => 'PaperPro',
                'unit' => 'ream',
                'cost' => 3.50,
                'price' => 6.00,
                'reorder_point' => 100,
                'current_stock' => 250,
                'weight' => 2.5,
                'dimensions' => '21x29.7x5 cm',
                'status' => 'active',
            ],
            [
                'name' => 'USB Flash Drive 32GB',
                'description' => '32GB USB 3.0 flash drive',
                'sku' => 'USB001',
                'barcode' => '5678901234567',
                'brand' => 'DataStore',
                'unit' => 'pcs',
                'cost' => 8.00,
                'price' => 15.00,
                'reorder_point' => 30,
                'current_stock' => 75,
                'weight' => 0.02,
                'dimensions' => '5x2x1 cm',
                'status' => 'active',
            ],
            [
                'name' => 'Monitor 24 inch',
                'description' => '24-inch LED monitor with HDMI',
                'sku' => 'MON001',
                'barcode' => '6789012345678',
                'brand' => 'ViewTech',
                'unit' => 'pcs',
                'cost' => 180.00,
                'price' => 280.00,
                'reorder_point' => 8,
                'current_stock' => 20,
                'weight' => 4.5,
                'dimensions' => '54x32x18 cm',
                'status' => 'active',
            ],
            [
                'name' => 'Keyboard Mechanical',
                'description' => 'Mechanical gaming keyboard with RGB lighting',
                'sku' => 'KEY001',
                'barcode' => '7890123456789',
                'brand' => 'GameTech',
                'unit' => 'pcs',
                'cost' => 60.00,
                'price' => 100.00,
                'reorder_point' => 15,
                'current_stock' => 35,
                'weight' => 1.2,
                'dimensions' => '44x13x4 cm',
                'status' => 'active',
            ],
            [
                'name' => 'Desk Lamp LED',
                'description' => 'Adjustable LED desk lamp with touch control',
                'sku' => 'LAM001',
                'barcode' => '8901234567890',
                'brand' => 'LightPro',
                'unit' => 'pcs',
                'cost' => 25.00,
                'price' => 45.00,
                'reorder_point' => 20,
                'current_stock' => 40,
                'weight' => 1.8,
                'dimensions' => '20x20x50 cm',
                'status' => 'inactive',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
