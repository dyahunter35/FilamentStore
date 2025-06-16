<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المستخدمين',
        'label' => 'مستخدم',
        'plural_label' => 'المستخدمين',
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
            'placeholder' => 'أدخل البريد الإلكتروني',
        ],
        'phone' => [
            'label' => 'رقم الهاتف',
            'placeholder' => 'أدخل رقم الهاتف',
        ],
        'password' => [
            'label' => 'كلمة المرور',
            'placeholder' => 'أدخل كلمة المرور',
        ],
        'password_confirmation' => [
            'label' => 'تأكيد كلمة المرور',
            'placeholder' => 'تأكيد كلمة المرور',
        ],
        'role' => [
            'label' => 'الدور',
            'placeholder' => 'اختر الدور',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
                'suspended' => 'موقوف',
            ],
        ],
        'avatar' => [
            'label' => 'الصورة الشخصية',
            'placeholder' => 'رفع صورة شخصية',
        ],
        'email_verified_at' => [
            'label' => 'تاريخ تأكيد البريد',
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
                'message' => 'تفعيل المستخدم'
            ],
            'inactive' => [
                'label' => 'تعطيل',
                'message' => 'تعطيل المستخدم'
            ],
            'suspended' => [
                'label' => 'إيقاف',
                'message' => 'إيقاف المستخدم'
            ],
        ]
    ],

    'relations' => [
        'roles' => [
            'label' => 'دور',
            'plural_label' => 'الأدوار',
            'placeholder' => 'اختر الأدوار',
        ],
        'permissions' => [
            'label' => 'صلاحية',
            'plural_label' => 'الصلاحيات',
            'placeholder' => 'اختر الصلاحيات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء المستخدم بنجاح',
            'updated' => 'تم تحديث المستخدم بنجاح',
            'deleted' => 'تم حذف المستخدم بنجاح',
            'not_found' => 'المستخدم غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مصرح لك بتنفيذ هذا الإجراء',
            'email_already_exists' => 'البريد الإلكتروني مستخدم مسبقاً',
            'password_updated' => 'تم تحديث كلمة المرور بنجاح',
            'profile_updated' => 'تم تحديث الملف الشخصي بنجاح',
        ],
    ],
];
