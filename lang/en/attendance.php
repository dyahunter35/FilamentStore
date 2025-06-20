<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Employee Management',
        'label' => 'Attendance',
        'plural_label' => 'Attendances',
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
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter the email address',
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => 'Enter the phone number',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Enter the password',
        ],
        'password_confirmation' => [
            'label' => 'Confirm Password',
            'placeholder' => 'Confirm the password',
        ],
        'role' => [
            'label' => 'Role',
            'placeholder' => 'Select a role',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'suspended' => 'Suspended',
            ],
        ],
        'avatar' => [
            'label' => 'Avatar',
            'placeholder' => 'Upload avatar image',
        ],
        'email_verified_at' => [
            'label' => 'Email Verified At',
            'placeholder' => ''
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
                'message' => 'Activate Attendance'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Attendance'
            ],
            'suspended' => [
                'label' => 'Suspend',
                'message' => 'Suspend Attendance'
            ],
        ]
    ],

    'relations' => [
        'roles' => [
            'label' => 'Role',
            'plural_label' => 'Roles',
            'placeholder' => 'Select roles',
        ],
        'permissions' => [
            'label' => 'Permission',
            'plural_label' => 'Permissions',
            'placeholder' => 'Select permissions',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Attendance created successfully',
            'updated' => 'Attendance updated successfully',
            'deleted' => 'Attendance deleted successfully',
            'not_found' => 'Attendance not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'email_already_exists' => 'Email address already exists',
            'password_updated' => 'Password updated successfully',
            'profile_updated' => 'Profile updated successfully',
        ],
    ],
];
