<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الفئات',
        'label' => 'فئة',
        'plural_label' => 'الفئات',
        
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'اسم الفئة',
            'placeholder' => 'أدخل اسم الفئة',
        ],
        'slug' => [
            'label' => 'الرابط المختصر',
            'placeholder' => 'أدخل الرابط المختصر',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف الفئة',
        ],
        'parent_id' => [
            'label' => 'الفئة الأم',
            'placeholder' => 'اختر الفئة الأم',
        ],
        'icon' => [
            'label' => 'الأيقونة',
            'placeholder' => 'اختر الأيقونة',
        ],
        'image' => [
            'label' => 'الصورة',
            'placeholder' => 'رفع صورة الفئة',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
            ],
        ],
        'order' => [
            'label' => 'الترتيب',
            'placeholder' => 'أدخل ترتيب العرض',
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
                'message' => 'تفعيل الفئة'
            ],
            'inactive' => [
                'label' => 'تعطيل',
                'message' => 'تعطيل الفئة'
            ],
        ]
    ],

    'relations' => [
        'subcategories' => [
            'label' => 'فئة فرعية',
            'plural_label' => 'الفئات الفرعية',
            'placeholder' => 'اختر الفئات الفرعية',
        ],
        'products' => [
            'label' => 'منتج',
            'plural_label' => 'المنتجات',
            'placeholder' => 'اختر المنتجات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء الفئة بنجاح',
            'updated' => 'تم تحديث الفئة بنجاح',
            'deleted' => 'تم حذف الفئة بنجاح',
            'not_found' => 'الفئة غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مصرح لك بتنفيذ هذا الإجراء',
            'has_subcategories' => 'لا يمكن حذف الفئة التي تحتوي على فئات فرعية',
            'has_products' => 'لا يمكن حذف الفئة المرتبطة بمنتجات',
        ],
    ],
];
