<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المنتجات',
        'label' => 'وحدة المنتج',
        'plural_label' => 'وحدات المنتجات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'conversion_settings' => [
            'title' => 'إعدادات التحويل'
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'اسم الوحدة',
            'placeholder' => 'أدخل اسم الوحدة',
        ],
        'symbol' => [
            'label' => 'الرمز',
            'placeholder' => 'أدخل رمز الوحدة',
        ],
        'abbreviation' => [
            'label' => 'الاختصار',
            'placeholder' => 'أدخل الاختصار',
        ],
        'type' => [
            'label' => 'النوع',
            'options' => [
                'quantity' => 'كمية',
                'weight' => 'وزن',
                'volume' => 'حجم',
                'length' => 'طول',
                'area' => 'مساحة',
                'container' => 'حاوية',
                'special' => 'خاص',
            ],
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف الوحدة',
        ],
        'base_unit' => [
            'label' => 'الوحدة الأساسية',
            'helper' => 'حدد إذا كانت هذه هي الوحدة الأساسية لنوعها',
        ],
        'conversion_factor' => [
            'label' => 'معامل التحويل',
            'placeholder' => 'أدخل معامل التحويل',
            'helper' => 'المعامل للتحويل إلى الوحدة الأساسية (مثل: 1000 للكيلو إلى جرام)',
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

    'filters' => [
        'base_unit' => [
            'all' => 'جميع الوحدات',
            'base_only' => 'الوحدات الأساسية فقط',
            'derived_only' => 'الوحدات المشتقة فقط',
        ],
    ],

    'actions' => [
        'status' => [
            'active' => [
                'label' => 'تفعيل',
                'message' => 'تفعيل الوحدة'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل الوحدة'
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
            'created' => 'تم إنشاء وحدة المنتج بنجاح',
            'updated' => 'تم تحديث وحدة المنتج بنجاح',
            'deleted' => 'تم حذف وحدة المنتج بنجاح',
            'not_found' => 'وحدة المنتج غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'symbol_already_exists' => 'رمز الوحدة موجود بالفعل',
        ],
    ],
];
