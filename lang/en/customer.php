<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Customer Management',
        'label' => 'Customer',
        'plural_label' => 'Customers',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'contact_information' => [
            'title' => 'Contact Information'
        ],
        'address_information' => [
            'title' => 'Address Information',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter customer name',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter email address',
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => 'Enter phone number',
        ],
        'company' => [
            'label' => 'Company',
            'placeholder' => 'Enter company name',
        ],
        'address' => [
            'label' => 'Address',
            'placeholder' => 'Enter address',
        ],
        'city' => [
            'label' => 'City',
            'placeholder' => 'Enter city',
        ],
        'state' => [
            'label' => 'State',
            'placeholder' => 'Enter state',
        ],
        'country' => [
            'label' => 'Country',
            'placeholder' => 'Enter country',
        ],
        'postal_code' => [
            'label' => 'Postal Code',
            'placeholder' => 'Enter postal code',
        ],
        'tax_number' => [
            'label' => 'Tax Number',
            'placeholder' => 'Enter tax number',
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
                'message' => 'Activate Customer'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Customer'
            ],
        ]
    ],

    'relations' => [
        'sales_invoices' => [
            'label' => 'Sales Invoice',
            'plural_label' => 'Sales Invoices',
            'placeholder' => 'Select sales invoices',
        ],
        'sales_returns' => [
            'label' => 'Sales Return',
            'plural_label' => 'Sales Returns',
            'placeholder' => 'Select sales returns',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Customer created successfully',
            'updated' => 'Customer updated successfully',
            'deleted' => 'Customer deleted successfully',
            'not_found' => 'Customer not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'email_already_exists' => 'Email address already exists',
            'profile_updated' => 'Customer profile updated successfully',
        ],
    ],
];
