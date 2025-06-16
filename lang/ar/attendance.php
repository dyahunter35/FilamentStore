<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الحضور',
        'label' => 'حضور',
        'plural_label' => 'الحضور',
        'model_'
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'contact_information' => [
            'title' => 'معلومات الاتصال'
        ],
        'security' => [
            'title' => 'الأمان',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'الاسم',
            'placeholder' => 'أدخل الاسم',
        ],
        'email' => [
            'label' => 'البريد الإلكتروني',
            'placeholder' => 'أدخل عنوان البريد الإلكتروني',
        ],
        'phone' => [
            'label' => 'الهاتف',
            'placeholder' => 'أدخل رقم الهاتف',
        ],
        'password' => [
            'label' => 'كلمة المرور',
            'placeholder' => 'أدخل كلمة المرور',
        ],
        'password_confirmation' => [
            'label' => 'تأكيد كلمة المرور',
            'placeholder' => 'أكد كلمة المرور',
        ],
        'role' => [
            'label' => 'الدور',
            'placeholder' => 'اختر دور',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
                'suspended' => 'معلق',
            ],
        ],
        'avatar' => [
            'label' => 'الصورة الشخصية',
            'placeholder' => 'رفع صورة شخصية',
        ],
        'email_verified_at' => [
            'label' => 'تاريخ تأكيد البريد الإلكتروني',
            'placeholder' => ''
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
        'status' => [
            'active' => [
                'label' => 'تفعيل',
                'message' => 'تفعيل الحضور'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل الحضور'
            ],
            'suspended' => [
                'label' => 'تعليق',
                'message' => 'تعليق الحضور'
            ],
        ]
    ],

    'relations' => [
        'roles' => [
            'label' => 'الدور',
            'plural_label' => 'الأدوار',
            'placeholder' => 'اختر الأدوار',
        ],
        'permissions' => [
            'label' => 'الصلاحية',
            'plural_label' => 'الصلاحيات',
            'placeholder' => 'اختر الصلاحيات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء الحضور بنجاح',
            'updated' => 'تم تحديث الحضور بنجاح',
            'deleted' => 'تم حذف الحضور بنجاح',
            'not_found' => 'الحضور غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'email_already_exists' => 'عنوان البريد الإلكتروني موجود بالفعل',
            'password_updated' => 'تم تحديث كلمة المرور بنجاح',
            'profile_updated' => 'تم تحديث الملف الشخصي بنجاح',
        ],
    ],
];
