<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Access Control',
        'label' => 'Permission',
        'plural_label' => 'Permissions',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Permission Information',
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Permission Name',
            'placeholder' => 'Enter permission name',
        ],
        'guard_name' => [
            'label' => 'Guard Name',
            'placeholder' => 'Enter guard name',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter permission description',
        ],
        'group' => [
            'label' => 'Group',
            'placeholder' => 'Enter permission group',
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

    'relations' => [
        'roles' => [
            'label' => 'Role',
            'plural_label' => 'Roles',
            'placeholder' => 'Select roles',
        ],
        'users' => [
            'label' => 'User',
            'plural_label' => 'Users',
            'placeholder' => 'Select users',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Permission created successfully',
            'updated' => 'Permission updated successfully',
            'deleted' => 'Permission deleted successfully',
            'not_found' => 'Permission not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'cannot_delete_system_permission' => 'Cannot delete system permission',
        ],
    ],
];
