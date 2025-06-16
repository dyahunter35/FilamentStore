<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الصلاحيات',
        'label' => 'دور',
        'plural_label' => 'الأدوار',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'معلومات الدور',
        ],
        'permissions' => [
            'title' => 'الصلاحيات'
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'اسم الدور',
            'placeholder' => 'أدخل اسم الدور',
        ],
        'guard_name' => [
            'label' => 'اسم الحارس',
            'placeholder' => 'أدخل اسم الحارس',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف الدور',
        ],
        'permissions' => [
            'label' => 'الصلاحيات',
            'placeholder' => 'اختر الصلاحيات',
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

    'actions' => [
        'assign_permissions' => [
            'label' => 'تعيين الصلاحيات',
            'message' => 'تعيين الصلاحيات للدور'
        ],
    ],

    'relations' => [
        'permissions' => [
            'label' => 'صلاحية',
            'plural_label' => 'الصلاحيات',
            'placeholder' => 'اختر الصلاحيات',
        ],
        'users' => [
            'label' => 'مستخدم',
            'plural_label' => 'المستخدمين',
            'placeholder' => 'اختر المستخدمين',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء الدور بنجاح',
            'updated' => 'تم تحديث الدور بنجاح',
            'deleted' => 'تم حذف الدور بنجاح',
            'not_found' => 'الدور غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مصرح لك بتنفيذ هذا الإجراء',
            'permissions_assigned' => 'تم تعيين الصلاحيات بنجاح',
            'cannot_delete_system_role' => 'لا يمكن حذف دور النظام',
        ],
    ],
];
