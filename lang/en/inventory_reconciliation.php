<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Inventory Management',
        'label' => 'Inventory Reconciliation',
        'plural_label' => 'Inventory Reconciliations',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'reconciliation_details' => [
            'title' => 'Reconciliation Details'
        ],
        'adjustments' => [
            'title' => 'Adjustments',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'reference_number' => [
            'label' => 'Reference Number',
            'placeholder' => 'Enter reference number',
        ],
        'reconciliation_date' => [
            'label' => 'Reconciliation Date',
            'placeholder' => 'Select reconciliation date',
        ],
        'warehouse_id' => [
            'label' => 'Warehouse',
            'placeholder' => 'Select warehouse',
        ],
        'product_id' => [
            'label' => 'Product',
            'placeholder' => 'Select product',
        ],
        'system_quantity' => [
            'label' => 'System Quantity',
            'placeholder' => 'System quantity',
        ],
        'physical_quantity' => [
            'label' => 'Physical Quantity',
            'placeholder' => 'Enter physical quantity',
        ],
        'difference' => [
            'label' => 'Difference',
            'placeholder' => 'Quantity difference',
        ],
        'adjustment_type' => [
            'label' => 'Adjustment Type',
            'options' => [
                'increase' => 'Increase',
                'decrease' => 'Decrease',
            ],
        ],
        'reason' => [
            'label' => 'Reason',
            'placeholder' => 'Enter reason for adjustment',
        ],
        'notes' => [
            'label' => 'Notes',
            'placeholder' => 'Enter notes',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'draft' => 'Draft',
                'pending' => 'Pending',
                'approved' => 'Approved',
                'completed' => 'Completed',
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
            'approve' => [
                'label' => 'Approve',
                'message' => 'Approve Reconciliation'
            ],
            'complete' => [
                'label' => 'Complete',
                'message' => 'Complete Reconciliation'
            ],
        ]
    ],

    'relations' => [
        'warehouse' => [
            'label' => 'Warehouse',
            'plural_label' => 'Warehouses',
            'placeholder' => 'Select warehouse',
        ],
        'product' => [
            'label' => 'Product',
            'plural_label' => 'Products',
            'placeholder' => 'Select product',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Inventory reconciliation created successfully',
            'updated' => 'Inventory reconciliation updated successfully',
            'deleted' => 'Inventory reconciliation deleted successfully',
            'not_found' => 'Inventory reconciliation not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'approved' => 'Reconciliation approved successfully',
            'completed' => 'Reconciliation completed successfully',
        ],
    ],
];
