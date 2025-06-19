<?php

return [
    'navigation' => [
        'group' => 'إدارة المستودعات',
        'label' => 'الفروع',
        'plural_label' => 'الفروع',
        'model_label' => 'فرع',
    ],

    'breadcrumbs' => [
        'index' => 'الفروع',
        'create' => 'إنشاء فرع',
        'edit' => 'تعديل فرع',
    ],

    'fields' => [
        'name' => [
            'label' => 'اسم الفرع',
            'placeholder' => 'أدخل اسم الفرع',
        ],
        'slug' => [
            'label' => 'الاسم المختصر',
            'placeholder' => 'أدخل الاسم المختصر للفرع',
        ],
        'location' => [
            'label' => 'الموقع',
            'placeholder' => 'أدخل موقع الفرع',
        ],
        'members' => [
            'label' => 'الأعضاء',
            'placeholder' => 'اختر أعضاء',
        ],
    ]
];
