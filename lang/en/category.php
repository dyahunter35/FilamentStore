<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Category Management',
        'label' => 'Category',
        'plural_label' => 'Categories',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter the category name',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'Enter the category slug',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter the category description',
        ],
        'parent_id' => [
            'label' => 'Parent Category',
            'placeholder' => 'Select parent category',
        ],
        'icon' => [
            'label' => 'Icon',
            'placeholder' => 'Select an icon',
        ],
        'image' => [
            'label' => 'Image',
            'placeholder' => 'Upload category image',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
            ],
        ],
        'order' => [
            'label' => 'Order',
            'placeholder' => 'Enter display order',
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
                'message' => 'Activate Category'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Category'
            ],
        ]
    ],

    'relations' => [
        'subcategories' => [
            'label' => 'Subcategory',
            'plural_label' => 'Subcategories',
            'placeholder' => 'Select subcategories',
        ],
        'products' => [
            'label' => 'Product',
            'plural_label' => 'Products',
            'placeholder' => 'Select products',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Category created successfully',
            'updated' => 'Category updated successfully',
            'deleted' => 'Category deleted successfully',
            'not_found' => 'Category not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'has_subcategories' => 'Cannot delete category with subcategories',
            'has_products' => 'Cannot delete category with associated products',
        ],
    ],
];
