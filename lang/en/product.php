<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Product Management',
        'label' => 'Product',
        'plural_label' => 'Products',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'pricing' => [
            'title' => 'Pricing Information'
        ],
        'inventory' => [
            'title' => 'Inventory Management'
        ],
        'media' => [
            'title' => 'Media',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Product Name',
            'placeholder' => 'Enter the product name',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'Enter the product slug',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter the product description',
        ],
        'short_description' => [
            'label' => 'Short Description',
            'placeholder' => 'Enter a brief description',
        ],
        'category_id' => [
            'label' => 'Category',
            'placeholder' => 'Select a category',
        ],
        'brand_id' => [
            'label' => 'Brand',
            'placeholder' => 'Select a brand',
        ],
        'sku' => [
            'label' => 'SKU',
            'placeholder' => 'Enter product SKU',
        ],
        'price' => [
            'label' => 'Price',
            'placeholder' => 'Enter the price',
        ],
        'sale_price' => [
            'label' => 'Sale Price',
            'placeholder' => 'Enter the sale price',
        ],
        'cost_price' => [
            'label' => 'Cost Price',
            'placeholder' => 'Enter the cost price',
        ],
        'stock_quantity' => [
            'label' => 'Stock Quantity',
            'placeholder' => 'Enter stock quantity',
        ],
        'min_stock' => [
            'label' => 'Minimum Stock',
            'placeholder' => 'Enter minimum stock level',
        ],
        'weight' => [
            'label' => 'Weight',
            'placeholder' => 'Enter product weight',
        ],
        'dimensions' => [
            'label' => 'Dimensions',
            'placeholder' => 'Enter product dimensions',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'draft' => 'Draft',
                'out_of_stock' => 'Out of Stock',
            ],
        ],
        'featured' => [
            'label' => 'Featured',
        ],
        'images' => [
            'label' => 'Product Images',
            'placeholder' => 'Upload product images',
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
            'draft' => [
                'label' => 'Set as Draft',
                'message' => 'Set Product as Draft'
            ],
            'featured' => [
                'label' => 'Feature',
                'message' => 'Feature Product'
            ],
        ]
    ],

    'relations' => [
        'variants' => [
            'label' => 'Variant',
            'plural_label' => 'Variants',
            'placeholder' => 'Select variants',
        ],
        'reviews' => [
            'label' => 'Review',
            'plural_label' => 'Reviews',
            'fields' => [
                'rating' => [
                    'label' => 'Rating',
                    'placeholder' => 'Enter rating',
                ],
                'comment' => [
                    'label' => 'Comment',
                    'placeholder' => 'Enter review comment',
                ],
                'user_id' => [
                    'label' => 'User',
                    'placeholder' => 'Select user',
                ],
            ],
        ],
        'orders' => [
            'label' => 'Order',
            'plural_label' => 'Orders',
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
            'out_of_stock' => 'Product is out of stock',
            'stock_updated' => 'Stock quantity updated successfully',
            'featured_updated' => 'Featured status updated successfully',
        ],
    ],
];
