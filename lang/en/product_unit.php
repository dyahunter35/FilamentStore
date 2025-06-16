<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Product Management',
        'label' => 'Product Unit',
        'plural_label' => 'Product Units',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],
        'conversion_settings' => [
            'title' => 'Conversion Settings'
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Unit Name',
            'placeholder' => 'Enter unit name',
        ],
        'symbol' => [
            'label' => 'Symbol',
            'placeholder' => 'Enter unit symbol',
        ],
        'abbreviation' => [
            'label' => 'Abbreviation',
            'placeholder' => 'Enter abbreviation',
        ],
        'type' => [
            'label' => 'Type',
            'options' => [
                'quantity' => 'Quantity',
                'weight' => 'Weight',
                'volume' => 'Volume',
                'length' => 'Length',
                'area' => 'Area',
                'container' => 'Container',
                'special' => 'Special',
            ],
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter unit description',
        ],
        'base_unit' => [
            'label' => 'Base Unit',
            'helper' => 'Check if this is the base unit for its type',
        ],
        'conversion_factor' => [
            'label' => 'Conversion Factor',
            'placeholder' => 'Enter conversion factor',
            'helper' => 'Factor to convert to base unit (e.g., 1000 for kg to g)',
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

    'filters' => [
        'base_unit' => [
            'all' => 'All Units',
            'base_only' => 'Base Units Only',
            'derived_only' => 'Derived Units Only',
        ],
    ],

    'actions' => [
        'status' => [
            'active' => [
                'label' => 'Activate',
                'message' => 'Activate Unit'
            ],
            'inactive' => [
                'label' => 'Deactivate',
                'message' => 'Deactivate Unit'
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
            'created' => 'Product unit created successfully',
            'updated' => 'Product unit updated successfully',
            'deleted' => 'Product unit deleted successfully',
            'not_found' => 'Product unit not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'symbol_already_exists' => 'Unit symbol already exists',
        ],
    ],
];
