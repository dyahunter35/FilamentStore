<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المنتجات',
        'label' => 'العلامة التجارية',
        'plural_label' => 'العلامات التجارية',
        'model_label'=>'علامة تجارية'
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'company_information' => [
            'title' => 'معلومات الشركة'
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'اسم العلامة التجارية',
            'placeholder' => 'أدخل اسم العلامة التجارية',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف العلامة التجارية',
        ],
        'logo' => [
            'label' => 'الشعار',
            'placeholder' => 'رفع شعار العلامة التجارية',
        ],
        'website' => [
            'label' => 'الموقع الإلكتروني',
            'placeholder' => 'أدخل رابط الموقع الإلكتروني',
        ],
        'country' => [
            'label' => 'البلد',
            'placeholder' => 'أدخل بلد المنشأ',
        ],
        'established_year' => [
            'label' => 'سنة التأسيس',
            'placeholder' => 'أدخل سنة التأسيس',
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
                'message' => 'تفعيل العلامة التجارية'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل العلامة التجارية'
            ],
        ]
    ],

    'relations' => [
        'products' => [
            'label' => 'منتج',
            'plural_label' => 'المنتجات',
            'placeholder' => 'اختر المنتجات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء العلامة التجارية بنجاح',
            'updated' => 'تم تحديث العلامة التجارية بنجاح',
            'deleted' => 'تم حذف العلامة التجارية بنجاح',
            'not_found' => 'العلامة التجارية غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'name_already_exists' => 'اسم العلامة التجارية موجود بالفعل',
        ],
    ],
];
