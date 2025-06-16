<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Supplier Management',
        'label' => 'Supplier',
        'plural_label' => 'Suppliers',
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
            'placeholder' => 'Enter supplier name',
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
        'contact_person' => [
            'label' => 'Contact Person',
            'placeholder' => 'Enter contact person name',
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
        'website' => [
            'label' => 'Website',
            'placeholder' => 'Enter website URL',
        ],
        'bank_account' => [
            'label' => 'Bank Account',
            'placeholder' => 'Enter bank account number',
        ],
        'bank_name' => [
            'label' => 'Bank Name',
            'placeholder' => 'Enter bank name',
        ],
        'vat_number' => [
            'label' => 'VAT Number',
            'placeholder' => 'Enter VAT number',
        ],
        'payment_terms' => [
            'label' => 'Payment Terms',
            'placeholder' => 'Enter payment terms',
        ],
        'credit_limit' => [
            'label' => 'Credit Limit',
            'placeholder' => 'Enter credit limit',
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
                'message' => 'Activate Supplier'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Supplier'
            ],
        ]
    ],

    'relations' => [
        'purchase_invoices' => [
            'label' => 'Purchase Invoice',
            'plural_label' => 'Purchase Invoices',
            'placeholder' => 'Select purchase invoices',
        ],
        'purchase_returns' => [
            'label' => 'Purchase Return',
            'plural_label' => 'Purchase Returns',
            'placeholder' => 'Select purchase returns',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Supplier created successfully',
            'updated' => 'Supplier updated successfully',
            'deleted' => 'Supplier deleted successfully',
            'not_found' => 'Supplier not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'email_already_exists' => 'Email address already exists',
            'profile_updated' => 'Supplier profile updated successfully',
        ],
    ],
];
