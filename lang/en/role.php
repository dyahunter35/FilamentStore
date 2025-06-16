<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Access Control',
        'label' => 'Role',
        'plural_label' => 'Roles',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Role Information',
        ],
        'permissions' => [
            'title' => 'Permissions'
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'Role Name',
            'placeholder' => 'Enter role name',
        ],
        'guard_name' => [
            'label' => 'Guard Name',
            'placeholder' => 'Enter guard name',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter role description',
        ],
        'permissions' => [
            'label' => 'Permissions',
            'placeholder' => 'Select permissions',
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
        'assign_permissions' => [
            'label' => 'Assign Permissions',
            'message' => 'Assign Permissions to Role'
        ],
    ],

    'relations' => [
        'permissions' => [
            'label' => 'Permission',
            'plural_label' => 'Permissions',
            'placeholder' => 'Select permissions',
        ],
        'users' => [
            'label' => 'User',
            'plural_label' => 'Users',
            'placeholder' => 'Select users',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Role created successfully',
            'updated' => 'Role updated successfully',
            'deleted' => 'Role deleted successfully',
            'not_found' => 'Role not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'permissions_assigned' => 'Permissions assigned successfully',
            'cannot_delete_system_role' => 'Cannot delete system role',
        ],
    ],
];
