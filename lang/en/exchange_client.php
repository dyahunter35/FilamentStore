<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Exchange Management',
        'label' => 'Exchange Client',
        'plural_label' => 'Exchange Clients',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'contact_information' => [
            'title' => 'Contact Information'
        ],
        'verification' => [
            'title' => 'Verification',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter client name',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter email address',
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => 'Enter phone number',
        ],
        'identity_number' => [
            'label' => 'Identity Number',
            'placeholder' => 'Enter identity number',
        ],
        'address' => [
            'label' => 'Address',
            'placeholder' => 'Enter address',
        ],
        'nationality' => [
            'label' => 'Nationality',
            'placeholder' => 'Enter nationality',
        ],
        'occupation' => [
            'label' => 'Occupation',
            'placeholder' => 'Enter occupation',
        ],
        'verification_status' => [
            'label' => 'Verification Status',
            'options' => [
                'pending' => 'Pending',
                'verified' => 'Verified',
                'rejected' => 'Rejected',
            ],
        ],
        'kyc_documents' => [
            'label' => 'KYC Documents',
            'placeholder' => 'Upload KYC documents',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'suspended' => 'Suspended',
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
            'verify' => [
                'label' => 'Verify',
                'message' => 'Verify Client'
            ],
            'reject' => [
                'label' => 'Reject',
                'message' => 'Reject Client'
            ],
            'suspend' => [
                'label' => 'Suspend',
                'message' => 'Suspend Client'
            ],
            'activate' => [
                'label' => 'Activate',
                'message' => 'Activate Client'
            ],
        ]
    ],

    'relations' => [
        'transactions' => [
            'label' => 'Transaction',
            'plural_label' => 'Transactions',
            'placeholder' => 'Select transactions',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Exchange client created successfully',
            'updated' => 'Exchange client updated successfully',
            'deleted' => 'Exchange client deleted successfully',
            'not_found' => 'Exchange client not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'verified' => 'Client verified successfully',
            'rejected' => 'Client verification rejected',
            'suspended' => 'Client suspended successfully',
        ],
    ],
];
