<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Exchange Management',
        'label' => 'Exchange Transaction',
        'plural_label' => 'Exchange Transactions',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'transaction_details' => [
            'title' => 'Transaction Details'
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
        'client_id' => [
            'label' => 'Client',
            'placeholder' => 'Select client',
        ],
        'transaction_type' => [
            'label' => 'Transaction Type',
            'options' => [
                'buy' => 'Buy',
                'sell' => 'Sell',
            ],
        ],
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
            'placeholder' => 'Enter amount',
        ],
        'exchange_rate' => [
            'label' => 'Exchange Rate',
            'placeholder' => 'Enter exchange rate',
        ],
        'converted_amount' => [
            'label' => 'Converted Amount',
            'placeholder' => 'Converted amount',
        ],
        'commission' => [
            'label' => 'Commission',
            'placeholder' => 'Enter commission',
        ],
        'net_amount' => [
            'label' => 'Net Amount',
            'placeholder' => 'Net amount',
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
                'message' => 'Complete Transaction'
            ],
            'cancel' => [
                'label' => 'Cancel',
                'message' => 'Cancel Transaction'
            ],
        ]
    ],

    'relations' => [
        'client' => [
            'label' => 'Client',
            'plural_label' => 'Clients',
            'placeholder' => 'Select client',
        ],
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
            'created' => 'Exchange transaction created successfully',
            'updated' => 'Exchange transaction updated successfully',
            'deleted' => 'Exchange transaction deleted successfully',
            'not_found' => 'Exchange transaction not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'completed' => 'Transaction completed successfully',
            'cancelled' => 'Transaction cancelled successfully',
        ],
    ],
];
