<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Employee Management',
        'label' => 'Employee',
        'plural_label' => 'Employees',
        'model_label' => 'Employee',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'contact_information' => [
            'title' => 'Contact Information'
        ],
        'employment_details' => [
            'title' => 'Employment Details',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'employee_id' => [
            'label' => 'Employee ID',
            'placeholder' => 'Enter employee ID',
        ],
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter employee name',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter email address',
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => 'Enter phone number',
        ],
        'employee_id' => [
            'label' => 'Employee ID',
            'placeholder' => 'Enter employee ID',
        ],
        'department' => [
            'label' => 'Department',
            'placeholder' => 'Enter department',
        ],
        'position' => [
            'label' => 'Position',
            'placeholder' => 'Enter position',
        ],
        'salary' => [
            'label' => 'Salary',
            'placeholder' => 'Enter salary',
        ],
        'hire_date' => [
            'label' => 'Hire Date',
            'placeholder' => 'Select hire date',
        ],
        'address' => [
            'label' => 'Address',
            'placeholder' => 'Enter address',
        ],
        'emergency_contact' => [
            'label' => 'Emergency Contact',
            'placeholder' => 'Enter emergency contact',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'terminated' => 'Terminated',
            ],
        ],
        'avatar' => [
            'label' => 'Avatar',
            'placeholder' => 'Upload avatar image',
            'help_text' => 'Recommended size: 300x300 pixels',
        ],
        'notes' => [
            'label' => 'Notes',
            'placeholder' => 'Enter any additional notes',
            'helper_text' => 'This field can be used to store additional information about the employee such as skills, achievements, or any other relevant details.',

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
                'message' => 'Activate Employee'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Employee'
            ],
            'terminated' => [
                'label' => 'Terminate',
                'message' => 'Terminate Employee'
            ],
        ]
    ],

    'relations' => [
        'attendances' => [
            'label' => 'Attendance',
            'plural_label' => 'Attendances',
            'placeholder' => 'Select attendances',
        ],
        'loans' => [
            'label' => 'Loan',
            'plural_label' => 'Loans',
            'placeholder' => 'Select loans',
        ],
        'payrolls' => [
            'label' => 'Payroll',
            'plural_label' => 'Payrolls',
            'placeholder' => 'Select payrolls',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Employee created successfully',
            'updated' => 'Employee updated successfully',
            'deleted' => 'Employee deleted successfully',
            'not_found' => 'Employee not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'email_already_exists' => 'Email address already exists',
            'employee_id_exists' => 'Employee ID already exists',
            'profile_updated' => 'Employee profile updated successfully',
        ],
    ],
];
