<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Purchase Management',
        'label' => 'Purchase Invoice',
        'plural_label' => 'Purchase Invoices',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'invoice_details' => [
            'title' => 'Invoice Details'
        ],
        'payment_information' => [
            'title' => 'Payment Information',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'invoice_number' => [
            'label' => 'Invoice Number',
            'placeholder' => 'Enter invoice number',
        ],
        'supplier_id' => [
            'label' => 'Supplier',
            'placeholder' => 'Select supplier',
        ],
        'invoice_date' => [
            'label' => 'Invoice Date',
            'placeholder' => 'Select invoice date',
        ],
        'due_date' => [
            'label' => 'Due Date',
            'placeholder' => 'Select due date',
        ],
        'reference_number' => [
            'label' => 'Reference Number',
            'placeholder' => 'Enter reference number',
        ],
        'subtotal' => [
            'label' => 'Subtotal',
            'placeholder' => 'Subtotal amount',
        ],
        'tax_amount' => [
            'label' => 'Tax Amount',
            'placeholder' => 'Tax amount',
        ],
        'discount_amount' => [
            'label' => 'Discount Amount',
            'placeholder' => 'Enter discount amount',
        ],
        'total_amount' => [
            'label' => 'Total Amount',
            'placeholder' => 'Total amount',
        ],
        'paid_amount' => [
            'label' => 'Paid Amount',
            'placeholder' => 'Enter paid amount',
        ],
        'remaining_amount' => [
            'label' => 'Remaining Amount',
            'placeholder' => 'Remaining amount',
        ],
        'payment_terms' => [
            'label' => 'Payment Terms',
            'placeholder' => 'Enter payment terms',
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
                'paid' => 'Paid',
                'overdue' => 'Overdue',
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
            'approve' => [
                'label' => 'Approve',
                'message' => 'Approve Invoice'
            ],
            'pay' => [
                'label' => 'Mark as Paid',
                'message' => 'Mark Invoice as Paid'
            ],
            'cancel' => [
                'label' => 'Cancel',
                'message' => 'Cancel Invoice'
            ],
        ]
    ],

    'relations' => [
        'supplier' => [
            'label' => 'Supplier',
            'plural_label' => 'Suppliers',
            'placeholder' => 'Select supplier',
        ],
        'items' => [
            'label' => 'Item',
            'plural_label' => 'Items',
            'placeholder' => 'Select items',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Purchase invoice created successfully',
            'updated' => 'Purchase invoice updated successfully',
            'deleted' => 'Purchase invoice deleted successfully',
            'not_found' => 'Purchase invoice not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'approved' => 'Invoice approved successfully',
            'paid' => 'Invoice marked as paid successfully',
            'cancelled' => 'Invoice cancelled successfully',
        ],
    ],
];
