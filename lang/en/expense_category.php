<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Expense Management',
        'label' => 'Expense Category',
        'plural_label' => 'Expense Categories',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'category_details' => [
            'title' => 'Category Details'
        ],
        'settings' => [
            'title' => 'Settings',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter category name',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter category description',
        ],
        'code' => [
            'label' => 'Code',
            'placeholder' => 'Enter category code',
        ],
        'parent_id' => [
            'label' => 'Parent Category',
            'placeholder' => 'Select parent category',
        ],
        'budget_limit' => [
            'label' => 'Budget Limit',
            'placeholder' => 'Enter budget limit',
        ],
        'is_active' => [
            'label' => 'Is Active',
            'options' => [
                true => 'Yes',
                false => 'No',
            ],
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
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
                'message' => 'Activate Category'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Category'
            ],
        ]
    ],

    'relations' => [
        'parent' => [
            'label' => 'Parent Category',
            'plural_label' => 'Parent Categories',
            'placeholder' => 'Select parent category',
        ],
        'children' => [
            'label' => 'Child Category',
            'plural_label' => 'Child Categories',
            'placeholder' => 'Select child categories',
        ],
        'expenses' => [
            'label' => 'Expense',
            'plural_label' => 'Expenses',
            'placeholder' => 'Select expenses',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Expense category created successfully',
            'updated' => 'Expense category updated successfully',
            'deleted' => 'Expense category deleted successfully',
            'not_found' => 'Expense category not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'code_already_exists' => 'Category code already exists',
            'has_children' => 'Cannot delete category with child categories',
        ],
    ],
];
