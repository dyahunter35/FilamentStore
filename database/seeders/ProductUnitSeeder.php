<?php

namespace Database\Seeders;

use App\Models\ProductUnit;
use Illuminate\Database\Seeder;

class ProductUnitSeeder extends Seeder
{
    public function run(): void
    {
        $units = [
            // Quantity Units
            [
                'name' => [
                    'en' => 'Piece',
                    'ar' => 'قطعة'
                ],
                'symbol' => 'pcs',
                'abbreviation' => 'pc',
                'type' => 'quantity',
                'description' => 'Individual items or units',
                'base_unit' => true,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Dozen',
                    'ar' => 'دزينة'
                ],
                'symbol' => 'doz',
                'abbreviation' => 'dz',
                'type' => 'quantity',
                'description' => 'Group of 12 items',
                'base_unit' => false,
                'conversion_factor' => 12.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Gross',
                    'ar' => 'جروس'
                ],
                'symbol' => 'gr',
                'abbreviation' => 'grs',
                'type' => 'quantity',
                'description' => 'Group of 144 items (12 dozen)',
                'base_unit' => false,
                'conversion_factor' => 144.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Pair',
                    'ar' => 'زوج'
                ],
                'symbol' => 'pr',
                'abbreviation' => 'pair',
                'type' => 'quantity',
                'description' => 'Set of two items',
                'base_unit' => false,
                'conversion_factor' => 2.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Set',
                    'ar' => 'طقم'
                ],
                'symbol' => 'set',
                'abbreviation' => 'st',
                'type' => 'quantity',
                'description' => 'Collection of related items',
                'base_unit' => false,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],

            // Weight Units
            [
                'name' => [
                    'en' => 'Kilogram',
                    'ar' => 'كيلوجرام'
                ],
                'symbol' => 'kg',
                'abbreviation' => 'kg',
                'type' => 'weight',
                'description' => 'Standard unit of mass',
                'base_unit' => true,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Gram',
                    'ar' => 'جرام'
                ],
                'symbol' => 'g',
                'abbreviation' => 'gm',
                'type' => 'weight',
                'description' => 'Small unit of mass',
                'base_unit' => false,
                'conversion_factor' => 0.001,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Pound',
                    'ar' => 'باوند'
                ],
                'symbol' => 'lb',
                'abbreviation' => 'lbs',
                'type' => 'weight',
                'description' => 'Imperial unit of weight',
                'base_unit' => false,
                'conversion_factor' => 0.453592,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Ounce',
                    'ar' => 'أونصة'
                ],
                'symbol' => 'oz',
                'abbreviation' => 'oz',
                'type' => 'weight',
                'description' => 'Small imperial unit of weight',
                'base_unit' => false,
                'conversion_factor' => 0.0283495,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Ton',
                    'ar' => 'طن'
                ],
                'symbol' => 't',
                'abbreviation' => 'ton',
                'type' => 'weight',
                'description' => 'Large unit of mass (1000 kg)',
                'base_unit' => false,
                'conversion_factor' => 1000.0,
                'status' => 'active',
            ],

            // Volume Units
            [
                'name' => [
                    'en' => 'Liter',
                    'ar' => 'لتر'
                ],
                'symbol' => 'L',
                'abbreviation' => 'ltr',
                'type' => 'volume',
                'description' => 'Standard unit of volume',
                'base_unit' => true,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Milliliter',
                    'ar' => 'مليلتر'
                ],
                'symbol' => 'mL',
                'abbreviation' => 'ml',
                'type' => 'volume',
                'description' => 'Small unit of volume',
                'base_unit' => false,
                'conversion_factor' => 0.001,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Gallon',
                    'ar' => 'جالون'
                ],
                'symbol' => 'gal',
                'abbreviation' => 'gal',
                'type' => 'volume',
                'description' => 'Imperial unit of volume',
                'base_unit' => false,
                'conversion_factor' => 3.78541,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Cubic Meter',
                    'ar' => 'متر مكعب'
                ],
                'symbol' => 'm³',
                'abbreviation' => 'cbm',
                'type' => 'volume',
                'description' => 'Large unit of volume',
                'base_unit' => false,
                'conversion_factor' => 1000.0,
                'status' => 'active',
            ],

            // Length Units
            [
                'name' => [
                    'en' => 'Meter',
                    'ar' => 'متر'
                ],
                'symbol' => 'm',
                'abbreviation' => 'mtr',
                'type' => 'length',
                'description' => 'Standard unit of length',
                'base_unit' => true,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Centimeter',
                    'ar' => 'سنتيمتر'
                ],
                'symbol' => 'cm',
                'abbreviation' => 'cm',
                'type' => 'length',
                'description' => 'Small unit of length',
                'base_unit' => false,
                'conversion_factor' => 0.01,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Millimeter',
                    'ar' => 'مليمتر'
                ],
                'symbol' => 'mm',
                'abbreviation' => 'mm',
                'type' => 'length',
                'description' => 'Very small unit of length',
                'base_unit' => false,
                'conversion_factor' => 0.001,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Inch',
                    'ar' => 'بوصة'
                ],
                'symbol' => 'in',
                'abbreviation' => 'inch',
                'type' => 'length',
                'description' => 'Imperial unit of length',
                'base_unit' => false,
                'conversion_factor' => 0.0254,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Foot',
                    'ar' => 'قدم'
                ],
                'symbol' => 'ft',
                'abbreviation' => 'ft',
                'type' => 'length',
                'description' => 'Imperial unit of length (12 inches)',
                'base_unit' => false,
                'conversion_factor' => 0.3048,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Yard',
                    'ar' => 'ياردة'
                ],
                'symbol' => 'yd',
                'abbreviation' => 'yd',
                'type' => 'length',
                'description' => 'Imperial unit of length (3 feet)',
                'base_unit' => false,
                'conversion_factor' => 0.9144,
                'status' => 'active',
            ],

            // Area Units
            [
                'name' => [
                    'en' => 'Square Meter',
                    'ar' => 'متر مربع'
                ],
                'symbol' => 'm²',
                'abbreviation' => 'sqm',
                'type' => 'area',
                'description' => 'Standard unit of area',
                'base_unit' => true,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Square Foot',
                    'ar' => 'قدم مربع'
                ],
                'symbol' => 'ft²',
                'abbreviation' => 'sqft',
                'type' => 'area',
                'description' => 'Imperial unit of area',
                'base_unit' => false,
                'conversion_factor' => 0.092903,
                'status' => 'active',
            ],

            // Special Units
            [
                'name' => [
                    'en' => 'Box',
                    'ar' => 'صندوق'
                ],
                'symbol' => 'box',
                'abbreviation' => 'bx',
                'type' => 'container',
                'description' => 'Container unit for packaging',
                'base_unit' => false,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Carton',
                    'ar' => 'كرتون'
                ],
                'symbol' => 'ctn',
                'abbreviation' => 'carton',
                'type' => 'container',
                'description' => 'Large container unit',
                'base_unit' => false,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Pallet',
                    'ar' => 'منصة'
                ],
                'symbol' => 'plt',
                'abbreviation' => 'pallet',
                'type' => 'container',
                'description' => 'Shipping platform unit',
                'base_unit' => false,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Roll',
                    'ar' => 'لفة'
                ],
                'symbol' => 'roll',
                'abbreviation' => 'rl',
                'type' => 'special',
                'description' => 'Rolled material unit',
                'base_unit' => false,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Sheet',
                    'ar' => 'ورقة'
                ],
                'symbol' => 'sht',
                'abbreviation' => 'sheet',
                'type' => 'special',
                'description' => 'Flat material unit',
                'base_unit' => false,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Ream',
                    'ar' => 'رزمة'
                ],
                'symbol' => 'rm',
                'abbreviation' => 'ream',
                'type' => 'special',
                'description' => 'Paper unit (500 sheets)',
                'base_unit' => false,
                'conversion_factor' => 500.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Bundle',
                    'ar' => 'حزمة'
                ],
                'symbol' => 'bdl',
                'abbreviation' => 'bundle',
                'type' => 'special',
                'description' => 'Grouped items unit',
                'base_unit' => false,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
            [
                'name' => [
                    'en' => 'Pack',
                    'ar' => 'عبوة'
                ],
                'symbol' => 'pk',
                'abbreviation' => 'pack',
                'type' => 'container',
                'description' => 'Small package unit',
                'base_unit' => false,
                'conversion_factor' => 1.0,
                'status' => 'active',
            ],
        ];

        foreach ($units as $unit) {
            ProductUnit::create($unit);
        }
    }
}
