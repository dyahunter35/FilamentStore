<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Revenue Management',
        'label' => 'Other Revenue',
        'plural_label' => 'Other Revenues',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'revenue_details' => [
            'title' => 'Revenue Details'
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
        'title' => [
            'label' => 'Title',
            'placeholder' => 'Enter revenue title',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter revenue description',
        ],
        'amount' => [
            'label' => 'Amount',
            'placeholder' => 'Enter revenue amount',
        ],
        'revenue_date' => [
            'label' => 'Revenue Date',
            'placeholder' => 'Select revenue date',
        ],
        'source' => [
            'label' => 'Source',
            'placeholder' => 'Enter revenue source',
        ],
        'category' => [
            'label' => 'Category',
            'options' => [
                'interest' => 'Interest',
                'commission' => 'Commission',
                'rental' => 'Rental',
                'investment' => 'Investment',
                'other' => 'Other',
            ],
        ],
        'payment_method' => [
            'label' => 'Payment Method',
            'options' => [
                'cash' => 'Cash',
                'bank_transfer' => 'Bank Transfer',
                'check' => 'Check',
                'online' => 'Online',
            ],
        ],
        'reference_number' => [
            'label' => 'Reference Number',
            'placeholder' => 'Enter reference number',
        ],
        'receipt' => [
            'label' => 'Receipt',
            'placeholder' => 'Upload receipt',
        ],
        'notes' => [
            'label' => 'Notes',
            'placeholder' => 'Enter notes',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'pending' => 'Pending',
                'received' => 'Received',
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
            'receive' => [
                'label' => 'Mark as Received',
                'message' => 'Mark Revenue as Received'
            ],
            'cancel' => [
                'label' => 'Cancel',
                'message' => 'Cancel Revenue'
            ],
        ]
    ],

    'relations' => [
        'attachments' => [
            'label' => 'Attachment',
            'plural_label' => 'Attachments',
            'placeholder' => 'Select attachments',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Other revenue created successfully',
            'updated' => 'Other revenue updated successfully',
            'deleted' => 'Other revenue deleted successfully',
            'not_found' => 'Other revenue not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'received' => 'Revenue marked as received successfully',
            'cancelled' => 'Revenue cancelled successfully',
        ],
    ],
];
