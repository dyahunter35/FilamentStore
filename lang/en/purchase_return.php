<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Purchase Management',
        'label' => 'Purchase Return',
        'plural_label' => 'Purchase Returns',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'return_details' => [
            'title' => 'Return Details'
        ],
        'refund_information' => [
            'title' => 'Refund Information',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'return_number' => [
            'label' => 'Return Number',
            'placeholder' => 'Enter return number',
        ],
        'purchase_invoice_id' => [
            'label' => 'Purchase Invoice',
            'placeholder' => 'Select purchase invoice',
        ],
        'supplier_id' => [
            'label' => 'Supplier',
            'placeholder' => 'Select supplier',
        ],
        'return_date' => [
            'label' => 'Return Date',
            'placeholder' => 'Select return date',
        ],
        'reason' => [
            'label' => 'Reason',
            'placeholder' => 'Enter return reason',
        ],
        'subtotal' => [
            'label' => 'Subtotal',
            'placeholder' => 'Subtotal amount',
        ],
        'tax_amount' => [
            'label' => 'Tax Amount',
            'placeholder' => 'Tax amount',
        ],
        'total_amount' => [
            'label' => 'Total Amount',
            'placeholder' => 'Total amount',
        ],
        'refund_amount' => [
            'label' => 'Refund Amount',
            'placeholder' => 'Enter refund amount',
        ],
        'refund_method' => [
            'label' => 'Refund Method',
            'options' => [
                'cash' => 'Cash',
                'bank_transfer' => 'Bank Transfer',
                'credit_note' => 'Credit Note',
                'store_credit' => 'Store Credit',
            ],
        ],
        'reference_number' => [
            'label' => 'Reference Number',
            'placeholder' => 'Enter reference number',
        ],
        'notes' => [
            'label' => 'Notes',
            'placeholder' => 'Enter notes',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'pending' => 'Pending',
                'approved' => 'Approved',
                'completed' => 'Completed',
                'rejected' => 'Rejected',
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
                'message' => 'Approve Return'
            ],
            'complete' => [
                'label' => 'Complete',
                'message' => 'Complete Return'
            ],
            'reject' => [
                'label' => 'Reject',
                'message' => 'Reject Return'
            ],
        ]
    ],

    'relations' => [
        'purchase_invoice' => [
            'label' => 'Purchase Invoice',
            'plural_label' => 'Purchase Invoices',
            'placeholder' => 'Select purchase invoice',
        ],
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
            'created' => 'Purchase return created successfully',
            'updated' => 'Purchase return updated successfully',
            'deleted' => 'Purchase return deleted successfully',
            'not_found' => 'Purchase return not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'approved' => 'Return approved successfully',
            'completed' => 'Return completed successfully',
            'rejected' => 'Return rejected successfully',
        ],
    ],
];
