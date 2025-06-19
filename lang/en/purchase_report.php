<?php

return [
    'title' => 'Purchase Report',
    'description' => 'View and analyze purchase transactions',

    'filters' => [
        'date_range' => [
            'label' => 'Date Range',
            'start_date' => [
                'label' => 'Start Date',
                'placeholder' => 'Select start date',
            ],
            'end_date' => [
                'label' => 'End Date',
                'placeholder' => 'Select end date',
            ],
        ],
        'branch' => [
            'label' => 'Branch',
            'placeholder' => 'Select branch',
        ],
        'product' => [
            'label' => 'Product',
            'placeholder' => 'Select product',
        ],
        'supplier' => [
            'label' => 'Supplier',
            'placeholder' => 'Select supplier',
        ],
    ],

    'table' => [
        'columns' => [
            'invoice_number' => 'Invoice Number',
            'date' => 'Date',
            'supplier' => 'Supplier',
            'branch' => 'Branch',
            'total_amount' => 'Total Amount',
            'paid_amount' => 'Paid Amount',
            'remaining_amount' => 'Remaining Amount',
            'status' => 'Status',
        ],
    ],

    'totals' => [
        'total_purchases' => 'Total Purchases',
        'total_paid' => 'Total Paid',
        'total_remaining' => 'Total Remaining',
    ],

    'buttons' => [
        'generate' => 'Generate Report',
        'export' => 'Export Report',
        'print' => 'Print Report',
    ],

    'empty_message' => 'No purchase records found for the selected criteria.',
];
