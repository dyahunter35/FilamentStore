<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Currency Management',
        'label' => 'Currency Transfer',
        'plural_label' => 'Currency Transfers',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'transfer_details' => [
            'title' => 'Transfer Details'
        ],
        'amounts' => [
            'title' => 'Amounts',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'from_currency' => [
            'label' => 'From Currency',
            'placeholder' => 'Select source currency',
        ],
        'to_currency' => [
            'label' => 'To Currency',
            'placeholder' => 'Select target currency',
        ],
        'amount' => [
            'label' => 'Amount',
            'placeholder' => 'Enter the amount',
        ],
        'exchange_rate' => [
            'label' => 'Exchange Rate',
            'placeholder' => 'Enter the exchange rate',
        ],
        'converted_amount' => [
            'label' => 'Converted Amount',
            'placeholder' => 'Converted amount',
        ],
        'reference' => [
            'label' => 'Reference',
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
        'from_currency' => [
            'label' => 'From Currency',
            'plural_label' => 'From Currencies',
            'placeholder' => 'Select source currency',
        ],
        'to_currency' => [
            'label' => 'To Currency',
            'plural_label' => 'To Currencies',
            'placeholder' => 'Select target currency',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Currency transfer created successfully',
            'updated' => 'Currency transfer updated successfully',
            'deleted' => 'Currency transfer deleted successfully',
            'not_found' => 'Currency transfer not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'completed' => 'Transfer completed successfully',
            'cancelled' => 'Transfer cancelled successfully',
        ],
    ],
];
