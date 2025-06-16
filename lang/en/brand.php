<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Product Management',
        'label' => 'Brand',
        'plural_label' => 'Brands',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'company_information' => [
            'title' => 'Company Information'
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Brand Name',
            'placeholder' => 'Enter brand name',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter brand description',
        ],
        'logo' => [
            'label' => 'Logo',
            'placeholder' => 'Upload brand logo',
        ],
        'website' => [
            'label' => 'Website',
            'placeholder' => 'Enter website URL',
        ],
        'country' => [
            'label' => 'Country',
            'placeholder' => 'Enter country of origin',
        ],
        'established_year' => [
            'label' => 'Established Year',
            'placeholder' => 'Enter establishment year',
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
                'message' => 'Activate Brand'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Brand'
            ],
        ]
    ],

    'relations' => [
        'products' => [
            'label' => 'Product',
            'plural_label' => 'Products',
            'placeholder' => 'Select products',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Brand created successfully',
            'updated' => 'Brand updated successfully',
            'deleted' => 'Brand deleted successfully',
            'not_found' => 'Brand not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'name_already_exists' => 'Brand name already exists',
        ],
    ],
];
