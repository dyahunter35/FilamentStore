<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Currency Management',
        'label' => 'Currency',
        'plural_label' => 'Currencies',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'contact_information' => [
            'title' => 'Contact Information'
        ],
        'security' => [
            'title' => 'Security',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter the name',
        ],
        'code' => [
            'label' => 'Code',
            'placeholder' => 'Enter the currency code',
        ],
        'symbol' => [
            'label' => 'Symbol',
            'placeholder' => 'Enter the currency symbol',
        ],
        'exchange_rate' => [
            'label' => 'Exchange Rate',
            'placeholder' => 'Enter the exchange rate',
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
                'message' => 'Activate Currency'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Currency'
            ],
        ]
    ],

    'relations' => [
        'transfers' => [
            'label' => 'Transfer',
            'plural_label' => 'Transfers',
            'placeholder' => 'Select transfers',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Currency created successfully',
            'updated' => 'Currency updated successfully',
            'deleted' => 'Currency deleted successfully',
            'not_found' => 'Currency not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'code_already_exists' => 'Currency code already exists',
            'rate_updated' => 'Exchange rate updated successfully',
        ],
    ],
];
