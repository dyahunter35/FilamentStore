<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Employee Management',
        'label' => 'Employee Loan',
        'plural_label' => 'Employee Loans',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'loan_details' => [
            'title' => 'Loan Details'
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
        'employee_id' => [
            'label' => 'Employee',
            'placeholder' => 'Select employee',
        ],
        'loan_amount' => [
            'label' => 'Loan Amount',
            'placeholder' => 'Enter loan amount',
        ],
        'interest_rate' => [
            'label' => 'Interest Rate',
            'placeholder' => 'Enter interest rate',
        ],
        'loan_term' => [
            'label' => 'Loan Term (Months)',
            'placeholder' => 'Enter loan term in months',
        ],
        'monthly_payment' => [
            'label' => 'Monthly Payment',
            'placeholder' => 'Monthly payment amount',
        ],
        'remaining_balance' => [
            'label' => 'Remaining Balance',
            'placeholder' => 'Remaining balance',
        ],
        'start_date' => [
            'label' => 'Start Date',
            'placeholder' => 'Select start date',
        ],
        'end_date' => [
            'label' => 'End Date',
            'placeholder' => 'Select end date',
        ],
        'purpose' => [
            'label' => 'Purpose',
            'placeholder' => 'Enter loan purpose',
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
                'active' => 'Active',
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
            'approve' => [
                'label' => 'Approve',
                'message' => 'Approve Loan'
            ],
            'activate' => [
                'label' => 'Activate',
                'message' => 'Activate Loan'
            ],
            'complete' => [
                'label' => 'Complete',
                'message' => 'Complete Loan'
            ],
            'cancel' => [
                'label' => 'Cancel',
                'message' => 'Cancel Loan'
            ],
        ]
    ],

    'relations' => [
        'employee' => [
            'label' => 'Employee',
            'plural_label' => 'Employees',
            'placeholder' => 'Select employee',
        ],
        'payments' => [
            'label' => 'Payment',
            'plural_label' => 'Payments',
            'placeholder' => 'Select payments',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Employee loan created successfully',
            'updated' => 'Employee loan updated successfully',
            'deleted' => 'Employee loan deleted successfully',
            'not_found' => 'Employee loan not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'approved' => 'Loan approved successfully',
            'payment_recorded' => 'Payment recorded successfully',
        ],
    ],
];
