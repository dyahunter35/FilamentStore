<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Payroll Management',
        'label' => 'Payroll',
        'plural_label' => 'Payrolls',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'salary_details' => [
            'title' => 'Salary Details'
        ],
        'deductions' => [
            'title' => 'Deductions',
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
        'pay_period_start' => [
            'label' => 'Pay Period Start',
            'placeholder' => 'Select start date',
        ],
        'pay_period_end' => [
            'label' => 'Pay Period End',
            'placeholder' => 'Select end date',
        ],
        'basic_salary' => [
            'label' => 'Basic Salary',
            'placeholder' => 'Enter basic salary',
        ],
        'overtime_hours' => [
            'label' => 'Overtime Hours',
            'placeholder' => 'Enter overtime hours',
        ],
        'overtime_rate' => [
            'label' => 'Overtime Rate',
            'placeholder' => 'Enter overtime rate',
        ],
        'overtime_amount' => [
            'label' => 'Overtime Amount',
            'placeholder' => 'Overtime amount',
        ],
        'allowances' => [
            'label' => 'Allowances',
            'placeholder' => 'Enter allowances',
        ],
        'bonuses' => [
            'label' => 'Bonuses',
            'placeholder' => 'Enter bonuses',
        ],
        'gross_salary' => [
            'label' => 'Gross Salary',
            'placeholder' => 'Gross salary',
        ],
        'tax_deduction' => [
            'label' => 'Tax Deduction',
            'placeholder' => 'Enter tax deduction',
        ],
        'insurance_deduction' => [
            'label' => 'Insurance Deduction',
            'placeholder' => 'Enter insurance deduction',
        ],
        'loan_deduction' => [
            'label' => 'Loan Deduction',
            'placeholder' => 'Enter loan deduction',
        ],
        'other_deductions' => [
            'label' => 'Other Deductions',
            'placeholder' => 'Enter other deductions',
        ],
        'total_deductions' => [
            'label' => 'Total Deductions',
            'placeholder' => 'Total deductions',
        ],
        'net_salary' => [
            'label' => 'Net Salary',
            'placeholder' => 'Net salary',
        ],
        'payment_date' => [
            'label' => 'Payment Date',
            'placeholder' => 'Select payment date',
        ],
        'notes' => [
            'label' => 'Notes',
            'placeholder' => 'Enter notes',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'draft' => 'Draft',
                'pending' => 'Pending',
                'approved' => 'Approved',
                'paid' => 'Paid',
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
                'message' => 'Approve Payroll'
            ],
            'pay' => [
                'label' => 'Mark as Paid',
                'message' => 'Mark Payroll as Paid'
            ],
        ]
    ],

    'relations' => [
        'employee' => [
            'label' => 'Employee',
            'plural_label' => 'Employees',
            'placeholder' => 'Select employee',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Payroll created successfully',
            'updated' => 'Payroll updated successfully',
            'deleted' => 'Payroll deleted successfully',
            'not_found' => 'Payroll not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'approved' => 'Payroll approved successfully',
            'paid' => 'Payroll marked as paid successfully',
        ],
    ],
];
