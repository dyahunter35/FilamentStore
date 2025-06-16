<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة العملات',
        'label' => 'عملة',
        'plural_label' => 'العملات',
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
        'code' => [
            'label' => 'الرمز',
            'placeholder' => 'أدخل رمز العملة',
        ],
        'symbol' => [
            'label' => 'الرمز المختصر',
            'placeholder' => 'أدخل رمز العملة المختصر',
        ],
        'exchange_rate' => [
            'label' => 'سعر الصرف',
            'placeholder' => 'أدخل سعر الصرف',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
            ],
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
                'message' => 'تفعيل العملة'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل العملة'
            ],
        ]
    ],

    'relations' => [
        'transfers' => [
            'label' => 'تحويل',
            'plural_label' => 'التحويلات',
            'placeholder' => 'اختر التحويلات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء العملة بنجاح',
            'updated' => 'تم تحديث العملة بنجاح',
            'deleted' => 'تم حذف العملة بنجاح',
            'not_found' => 'العملة غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'code_already_exists' => 'رمز العملة موجود بالفعل',
            'rate_updated' => 'تم تحديث سعر الصرف بنجاح',
        ],
    ],
];
