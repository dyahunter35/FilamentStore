<?php

return [
    'navigation' => [
        'group' => 'Warehouse Management',
        'label' => 'Branches',
        'plural_label' => 'Branches',
        'model_label' => 'Branch',
    ],

    'breadcrumbs' => [
        'index' => 'Branches',
        'create' => 'Create Branch',
        'edit' => 'Edit Branch',
    ],

    'fields' => [
        'name' => [
            'label' => 'Branch Name',
            'placeholder' => 'Enter branch name',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'Enter branch slug',
        ],
        'location' => [
            'label' => 'Location',
            'placeholder' => 'Enter branch location',
        ],
        'members' => [
            'label' => 'Members',
            'placeholder' => 'Choose members',
        ],
    ]
];

