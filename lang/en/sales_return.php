<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Sales Management',
        'label' => 'Sales Return',
        'plural_label' => 'Sales Returns',
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
        'sales_invoice_id' => [
            'label' => 'Sales Invoice',
            'placeholder' => 'Select sales invoice',
        ],
        'customer_id' => [
            'label' => 'Customer',
            'placeholder' => 'Select customer',
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
        'sales_invoice' => [
            'label' => 'Sales Invoice',
            'plural_label' => 'Sales Invoices',
            'placeholder' => 'Select sales invoice',
        ],
        'customer' => [
            'label' => 'Customer',
            'plural_label' => 'Customers',
            'placeholder' => 'Select customer',
        ],
        'items' => [
            'label' => 'Item',
            'plural_label' => 'Items',
            'placeholder' => 'Select items',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Sales return created successfully',
            'updated' => 'Sales return updated successfully',
            'deleted' => 'Sales return deleted successfully',
            'not_found' => 'Sales return not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'approved' => 'Return approved successfully',
            'completed' => 'Return completed successfully',
            'rejected' => 'Return rejected successfully',
        ],
    ],
];
