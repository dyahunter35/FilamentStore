<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Sales Management',
        'label' => 'Sales Invoice',
        'plural_label' => 'Sales Invoices',
    ],

    // Section headers
    'sections' => [
        'items' => [
            'title' => 'Invoice Items',
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
        'customer_id' => [
            'label' => 'Customer',
            'placeholder' => 'Select customer',
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
                'sent' => 'Sent',
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
            'send' => [
                'label' => 'Send',
                'message' => 'Send Invoice'
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
            'created' => 'Sales invoice created successfully',
            'updated' => 'Sales invoice updated successfully',
            'deleted' => 'Sales invoice deleted successfully',
            'not_found' => 'Sales invoice not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'sent' => 'Invoice sent successfully',
            'paid' => 'Invoice marked as paid successfully',
            'cancelled' => 'Invoice cancelled successfully',
        ],
    ],
];
