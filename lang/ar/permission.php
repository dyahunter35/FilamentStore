<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الصلاحيات',
        'label' => 'صلاحية',
        'plural_label' => 'الصلاحيات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'معلومات الصلاحية',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'اسم الصلاحية',
            'placeholder' => 'أدخل اسم الصلاحية',
        ],
        'guard_name' => [
            'label' => 'اسم الحارس',
            'placeholder' => 'أدخل اسم الحارس',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف الصلاحية',
        ],
        'group' => [
            'label' => 'المجموعة',
            'placeholder' => 'أدخل مجموعة الصلاحية',
        ],
        'created_at' => [
            'label' => 'تاريخ الإنشاء',
            'placeholder' => ''
        ],
        'updated_at' => [
            'label' => 'تاريخ التحديث',
            'placeholder' => ''
        ],
    ],

    'relations' => [
        'roles' => [
            'label' => 'دور',
            'plural_label' => 'الأدوار',
            'placeholder' => 'اختر الأدوار',
        ],
        'users' => [
            'label' => 'مستخدم',
            'plural_label' => 'المستخدمين',
            'placeholder' => 'اختر المستخدمين',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء الصلاحية بنجاح',
            'updated' => 'تم تحديث الصلاحية بنجاح',
            'deleted' => 'تم حذف الصلاحية بنجاح',
            'not_found' => 'الصلاحية غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مصرح لك بتنفيذ هذا الإجراء',
            'cannot_delete_system_permission' => 'لا يمكن حذف صلاحية النظام',
        ],
    ],
];
