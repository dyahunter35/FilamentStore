<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Warehouse Management',
        'label' => 'Warehouse Transfer',
        'plural_label' => 'Warehouse Transfers',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'transfer_details' => [
            'title' => 'Transfer Details'
        ],
        'items' => [
            'title' => 'Items',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'transfer_number' => [
            'label' => 'Transfer Number',
            'placeholder' => 'Enter transfer number',
        ],
        'from_warehouse_id' => [
            'label' => 'From Warehouse',
            'placeholder' => 'Select source warehouse',
        ],
        'to_warehouse_id' => [
            'label' => 'To Warehouse',
            'placeholder' => 'Select destination warehouse',
        ],
        'transfer_date' => [
            'label' => 'Transfer Date',
            'placeholder' => 'Select transfer date',
        ],
        'expected_date' => [
            'label' => 'Expected Date',
            'placeholder' => 'Select expected date',
        ],
        'actual_date' => [
            'label' => 'Actual Date',
            'placeholder' => 'Select actual date',
        ],
        'reason' => [
            'label' => 'Reason',
            'placeholder' => 'Enter transfer reason',
        ],
        'reference_number' => [
            'label' => 'Reference Number',
            'placeholder' => 'Enter reference number',
        ],
        'shipping_cost' => [
            'label' => 'Shipping Cost',
            'placeholder' => 'Enter shipping cost',
        ],
        'total_items' => [
            'label' => 'Total Items',
            'placeholder' => 'Total number of items',
        ],
        'total_quantity' => [
            'label' => 'Total Quantity',
            'placeholder' => 'Total quantity',
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
                'in_transit' => 'In Transit',
                'completed' => 'Completed',
                'cancelled' => 'Cancelled',
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
            'send' => [
                'label' => 'Send',
                'message' => 'Send Transfer'
            ],
            'receive' => [
                'label' => 'Receive',
                'message' => 'Receive Transfer'
            ],
            'complete' => [
                'label' => 'Complete',
                'message' => 'Complete Transfer'
            ],
            'cancel' => [
                'label' => 'Cancel',
                'message' => 'Cancel Transfer'
            ],
        ]
    ],

    'relations' => [
        'from_warehouse' => [
            'label' => 'From Warehouse',
            'plural_label' => 'From Warehouses',
            'placeholder' => 'Select source warehouse',
        ],
        'to_warehouse' => [
            'label' => 'To Warehouse',
            'plural_label' => 'To Warehouses',
            'placeholder' => 'Select destination warehouse',
        ],
        'items' => [
            'label' => 'Item',
            'plural_label' => 'Items',
            'placeholder' => 'Select items',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Warehouse transfer created successfully',
            'updated' => 'Warehouse transfer updated successfully',
            'deleted' => 'Warehouse transfer deleted successfully',
            'not_found' => 'Warehouse transfer not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'sent' => 'Transfer sent successfully',
            'received' => 'Transfer received successfully',
            'completed' => 'Transfer completed successfully',
            'cancelled' => 'Transfer cancelled successfully',
        ],
    ],
];
