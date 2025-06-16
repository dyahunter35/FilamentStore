<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Expense Management',
        'label' => 'Expense',
        'plural_label' => 'Expenses',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'expense_details' => [
            'title' => 'Expense Details'
        ],
        'attachments' => [
            'title' => 'Attachments',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'title' => [
            'label' => 'Title',
            'placeholder' => 'Enter expense title',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter expense description',
        ],
        'amount' => [
            'label' => 'Amount',
            'placeholder' => 'Enter expense amount',
        ],
        'category_id' => [
            'label' => 'Category',
            'placeholder' => 'Select expense category',
        ],
        'expense_date' => [
            'label' => 'Expense Date',
            'placeholder' => 'Select expense date',
        ],
        'payment_method' => [
            'label' => 'Payment Method',
            'options' => [
                'cash' => 'Cash',
                'bank_transfer' => 'Bank Transfer',
                'credit_card' => 'Credit Card',
                'check' => 'Check',
            ],
        ],
        'reference_number' => [
            'label' => 'Reference Number',
            'placeholder' => 'Enter reference number',
        ],
        'vendor' => [
            'label' => 'Vendor',
            'placeholder' => 'Enter vendor name',
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
                'approved' => 'Approved',
                'paid' => 'Paid',
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
                'message' => 'Approve Expense'
            ],
            'reject' => [
                'label' => 'Reject',
                'message' => 'Reject Expense'
            ],
            'pay' => [
                'label' => 'Mark as Paid',
                'message' => 'Mark Expense as Paid'
            ],
        ]
    ],

    'relations' => [
        'category' => [
            'label' => 'Category',
            'plural_label' => 'Categories',
            'placeholder' => 'Select category',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Expense created successfully',
            'updated' => 'Expense updated successfully',
            'deleted' => 'Expense deleted successfully',
            'not_found' => 'Expense not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'approved' => 'Expense approved successfully',
            'rejected' => 'Expense rejected successfully',
            'paid' => 'Expense marked as paid successfully',
        ],
    ],
];
