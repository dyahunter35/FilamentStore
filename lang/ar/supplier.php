<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الموردين',
        'label' => 'مورد',
        'plural_label' => 'الموردون',
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
            'placeholder' => 'أدخل اسم المورد',
        ],
        'email' => [
            'label' => 'البريد الإلكتروني',
            'placeholder' => 'أدخل عنوان البريد الإلكتروني',
        ],
        'phone' => [
            'label' => 'الهاتف',
            'placeholder' => 'أدخل رقم الهاتف',
        ],
        'company' => [
            'label' => 'الشركة',
            'placeholder' => 'أدخل اسم الشركة',
        ],
        'contact_person' => [
            'label' => 'الشخص المسؤول',
            'placeholder' => 'أدخل اسم الشخص المسؤول',
        ],
        'address' => [
            'label' => 'العنوان',
            'placeholder' => 'أدخل العنوان',
        ],
        'city' => [
            'label' => 'المدينة',
            'placeholder' => 'أدخل المدينة',
        ],
        
        'state' => [
            'label' => 'الولاية',
            'placeholder' => 'أدخل الولاية',
        ],
        'country' => [
            'label' => 'البلد',
            'placeholder' => 'أدخل البلد',
        ],
        'postal_code' => [
            'label' => 'الرمز البريدي',
            'placeholder' => 'أدخل الرمز البريدي',
        ],
        'tax_number' => [
            'label' => 'الرقم الضريبي',
            'placeholder' => 'أدخل الرقم الضريبي',
        ],
        'payment_terms' => [
            'label' => 'شروط الدفع',
            'placeholder' => 'أدخل شروط الدفع',
        ],
        'credit_limit' => [
            'label' => 'حد الائتمان',
            'placeholder' => 'أدخل حد الائتمان',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
            ],
        ],
        'website' => [
            'label' => 'الموقع الإلكتروني',
            'placeholder' => 'أدخل عنوان الموقع الإلكتروني',
        ],
        'bank_account' => [
            'label' => 'رقم الحساب البنكي',
            'placeholder' => 'أدخل رقم الحساب البنكي',
        ],
        'bank_name' => [
            'label' => 'اسم البنك',
            'placeholder' => 'أدخل اسم البنك',
        ],
        'vat_number' => [
            'label' => 'رقم ضريبة القيمة المضافة',
            'placeholder' => 'أدخل رقم ضريبة القيمة المضافة',
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
                'message' => 'تفعيل المورد'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل المورد'
            ],
        ]
    ],

    'relations' => [
        'purchase_invoices' => [
            'label' => 'فاتورة شراء',
            'plural_label' => 'فواتير الشراء',
            'placeholder' => 'اختر فواتير الشراء',
        ],
        'purchase_returns' => [
            'label' => 'مرتجع شراء',
            'plural_label' => 'مرتجعات الشراء',
            'placeholder' => 'اختر مرتجعات الشراء',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء المورد بنجاح',
            'updated' => 'تم تحديث المورد بنجاح',
            'deleted' => 'تم حذف المورد بنجاح',
            'not_found' => 'المورد غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'email_already_exists' => 'عنوان البريد الإلكتروني موجود بالفعل',
            'profile_updated' => 'تم تحديث ملف المورد بنجاح',
        ],
    ],
];
