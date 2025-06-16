<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            // Electronics
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and accessories',
                'children' => [
                    [
                        'name' => 'Computers',
                        'description' => 'Desktop computers and laptops',
                        'children' => [
                            [
                                'name' => 'Laptops',
                                'description' => 'Portable computers',
                            ],
                            [
                                'name' => 'Desktop PCs',
                                'description' => 'Desktop computers and workstations',
                            ],
                            [
                                'name' => 'Computer Parts',
                                'description' => 'Computer components and hardware',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Mobile Phones',
                        'description' => 'Smartphones and mobile devices',
                        'children' => [
                            [
                                'name' => 'Smartphones',
                                'description' => 'Smart mobile phones',
                            ],
                            [
                                'name' => 'Phone Accessories',
                                'description' => 'Mobile phone accessories',
                            ],
                        ],
                    ],
                ],
            ],

            // Office Supplies
            [
                'name' => 'Office Supplies',
                'description' => 'Office stationery and supplies',
                'children' => [
                    [
                        'name' => 'Paper Products',
                        'description' => 'Paper and printing supplies',
                        'children' => [
                            [
                                'name' => 'Printer Paper',
                                'description' => 'Various types of printer paper',
                            ],
                            [
                                'name' => 'Notebooks',
                                'description' => 'Notebooks and notepads',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Writing Supplies',
                        'description' => 'Pens, pencils, and markers',
                        'children' => [
                            [
                                'name' => 'Pens',
                                'description' => 'All types of pens',
                            ],
                            [
                                'name' => 'Markers',
                                'description' => 'Markers and highlighters',
                            ],
                        ],
                    ],
                ],
            ],

            // Furniture
            [
                'name' => 'Furniture',
                'description' => 'Office furniture and accessories',
                'children' => [
                    [
                        'name' => 'Seating',
                        'description' => 'Chairs and seating solutions',
                        'children' => [
                            [
                                'name' => 'Office Chairs',
                                'description' => 'Ergonomic office chairs',
                            ],
                            [
                                'name' => 'Guest Chairs',
                                'description' => 'Visitor and guest seating',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Desks',
                        'description' => 'Office desks and workstations',
                        'children' => [
                            [
                                'name' => 'Computer Desks',
                                'description' => 'Desks for computer workstations',
                            ],
                            [
                                'name' => 'Standing Desks',
                                'description' => 'Height-adjustable standing desks',
                            ],
                        ],
                    ],
                ],
            ],

            // Storage Solutions
            [
                'name' => 'Storage Solutions',
                'description' => 'Storage and organization products',
                'children' => [
                    [
                        'name' => 'Filing Systems',
                        'description' => 'Document filing and storage',
                        'children' => [
                            [
                                'name' => 'File Cabinets',
                                'description' => 'Filing cabinets and drawers',
                            ],
                            [
                                'name' => 'File Folders',
                                'description' => 'Folders and filing accessories',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Storage Boxes',
                        'description' => 'Storage boxes and containers',
                        'children' => [
                            [
                                'name' => 'Archive Boxes',
                                'description' => 'Document archive storage boxes',
                            ],
                            [
                                'name' => 'Plastic Containers',
                                'description' => 'Plastic storage containers',
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $this->createCategories($categories);
    }

    private function createCategories(array $categories, ?ProductCategory $parent = null, int $order = 0)
    {
        foreach ($categories as $index => $categoryData) {
            $category = ProductCategory::create([
                'name' => $categoryData['name'],
                'description' => $categoryData['description'],
                'slug' => Str::slug($categoryData['name']),
                'parent_id' => $parent?->id,
                'sort_order' => $order + $index,
                'is_active' => true,
                'status' => 'active',
                'meta_title' => $categoryData['name'],
                'meta_description' => $categoryData['description'],
            ]);

            if (isset($categoryData['children'])) {
                $this->createCategories($categoryData['children'], $category, ($order + $index) * 10);
            }
        }
    }
}
