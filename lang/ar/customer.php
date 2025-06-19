<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة العملاء',
        'label' => 'عميل',
        'plural_label' => 'العملاء',
        'model_label' => 'عميل',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'contact_information' => [
            'title' => 'معلومات الاتصال'
        ],
        'address_information' => [
            'title' => 'معلومات العنوان',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'الاسم',
            'placeholder' => 'أدخل اسم العميل',
        ],
        'email' => [
            'label' => 'البريد الإلكتروني',
            'placeholder' => 'أدخل عنوان البريد الإلكتروني',
        ],
        'phone' => [
            'label' => 'الهاتف',
            'placeholder' => 'أدخل رقم الهاتف',
        ],

        'address' => [
            'label' => 'العنوان',
            'placeholder' => 'أدخل العنوان',
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
                'message' => 'تفعيل العميل'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل العميل'
            ],
        ]
    ],

    'relations' => [
        'sales_invoices' => [
            'label' => 'فاتورة مبيعات',
            'plural_label' => 'فواتير المبيعات',
            'placeholder' => 'اختر فواتير المبيعات',
        ],
        'sales_returns' => [
            'label' => 'مرتجع مبيعات',
            'plural_label' => 'مرتجعات المبيعات',
            'placeholder' => 'اختر مرتجعات المبيعات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء العميل بنجاح',
            'updated' => 'تم تحديث العميل بنجاح',
            'deleted' => 'تم حذف العميل بنجاح',
            'not_found' => 'العميل غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'email_already_exists' => 'عنوان البريد الإلكتروني موجود بالفعل',
            'profile_updated' => 'تم تحديث ملف العميل بنجاح',
        ],
    ],
];
