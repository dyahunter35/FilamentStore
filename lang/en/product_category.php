<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Product Management',
        'label' => 'Product Category',
        'plural_label' => 'Product Categories',
        'model_label' => 'Product Category',
    ],

    'bradcrumbs' => [
        'index' => 'Product Categories',
        'list_project' => 'Product Category List',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'media' => [
            'title' => 'Media',
        ],
        'settings' => [
            'title' => 'Settings',
        ],
        'seo' => [
            'title' => 'SEO Information',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Category Name',
            'placeholder' => 'Enter category name',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'URL-friendly name',
        ],
        'parent_id' => [
            'label' => 'Parent Category',
            'placeholder' => 'Select parent category',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter category description',
        ],
        'image' => [
            'label' => 'Category Image',
            'placeholder' => 'Upload category image',
        ],
        'icon' => [
            'label' => 'Icon',
            'placeholder' => 'Enter icon class or name',
            'helper' => 'You can use Heroicon names or custom icon classes',
        ],
        'sort_order' => [
            'label' => 'Sort Order',
            'placeholder' => 'Enter sort order number',
        ],
        'is_active' => [
            'label' => 'Active Status',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
            ],
        ],
        'meta_title' => [
            'label' => 'Meta Title',
            'placeholder' => 'Enter SEO meta title',
        ],
        'meta_description' => [
            'label' => 'Meta Description',
            'placeholder' => 'Enter SEO meta description',
        ],
        'products_count' => [
            'label' => 'Products',
        ],
        'children_count' => [
            'label' => 'Subcategories',
        ],
        'created_at' => [
            'label' => 'Created At',
        ],
        'updated_at' => [
            'label' => 'Updated At',
        ],
    ],

    // Filters
    'filters' => [
        'is_active' => [
            'all' => 'All Categories',
            'active_only' => 'Active Categories Only',
            'inactive_only' => 'Inactive Categories Only',
        ],
        'parent_categories' => 'Parent Categories Only',
        'child_categories' => 'Child Categories Only',
    ],

    // Actions
    'actions' => [
        'status' => [
            'active' => [
                'label' => 'Activate',
                'message' => 'Activate Category',
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Category',
            ],
        ],
    ],

    // Messages
    'messages' => [
        'created' => 'Category created successfully',
        'updated' => 'Category updated successfully',
        'deleted' => 'Category deleted successfully',
        'cannot_delete_has_children' => 'Cannot delete category with subcategories',
        'cannot_delete_has_products' => 'Cannot delete category with associated products',
    ],
];
