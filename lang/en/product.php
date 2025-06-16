<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Product Management',
        'label' => 'Products',
        'plural_label' => 'Products',
        'model_label' => 'Product',
    ],
    'bradcrumbs' => [
        'index' => 'Products',
        'list_project' => 'Product List',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'pricing' => [
            'title' => 'Pricing'
        ],
        'inventory' => [
            'title' => 'Inventory',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter product name',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter product description',
        ],
        'sku' => [
            'label' => 'SKU',
            'placeholder' => 'Enter SKU',
        ],
        'barcode' => [
            'label' => 'Barcode',
            'placeholder' => 'Enter barcode',
        ],
        'category_id' => [
            'label' => 'Category',
            'placeholder' => 'Select category',
        ],
        'brand_id' => [
            'label' => 'Brand',
            'placeholder' => 'Enter brand',
        ],
        'unit_id' => [
            'label' => 'Unit',
            'placeholder' => 'Enter unit (e.g., pcs, kg)',
        ],
        'cost' => [
            'label' => 'Cost Price',
            'placeholder' => 'Enter cost price',
        ],
        'price' => [
            'label' => 'Selling Price',
            'placeholder' => 'Enter selling price',
        ],
        'minimum_stock' => [
            'label' => 'Minimum Stock',
            'placeholder' => 'Enter minimum stock level',
        ],
        'current_stock' => [
            'label' => 'Current Stock',
            'placeholder' => 'Current stock quantity',
        ],
        'weight' => [
            'label' => 'Weight',
            'placeholder' => 'Enter weight',
        ],
        'dimensions' => [
            'label' => 'Dimensions',
            'placeholder' => 'Enter dimensions',
        ],
        'image' => [
            'label' => 'Image',
            'placeholder' => 'Upload product image',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'discontinued' => 'Discontinued',
            ],
        ],
        'created_at' => [
            'label' => 'Created At',
            'placeholder' => ''
        ],
        'updated_at' => [
            'label' => 'Updated At',
            'placeholder' => ''
        ],
    ],

    'actions' => [
        'status' => [
            'active' => [
                'label' => 'Activate',
                'message' => 'Activate Product'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Product'
            ],
            'discontinue' => [
                'label' => 'Discontinue',
                'message' => 'Discontinue Product'
            ],
        ]
    ],

    'relations' => [
        'category' => [
            'label' => 'Category',
            'plural_label' => 'Categories',
            'placeholder' => 'Select category',
        ],
        'purchase_items' => [
            'label' => 'Purchase Item',
            'plural_label' => 'Purchase Items',
            'placeholder' => 'Select purchase items',
        ],
        'sales_items' => [
            'label' => 'Sales Item',
            'plural_label' => 'Sales Items',
            'placeholder' => 'Select sales items',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Product created successfully',
            'updated' => 'Product updated successfully',
            'deleted' => 'Product deleted successfully',
            'not_found' => 'Product not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'sku_already_exists' => 'SKU already exists',
            'stock_updated' => 'Stock updated successfully',
        ],
    ],
];
