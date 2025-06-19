<?php

return [

    'navigation' => [
        'group' => 'إدارة المنتجات',
        'label' => 'المنتجات',
        'plural_label' => 'المنتجات',
        'model_label' => 'منتج',
    ],

    'bradcrumbs' => [
        'index' => 'المنتجات',
        'list_project' => 'قائمة المنتجات',
    ],
    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'pricing' => [
            'title' => 'التسعير'
        ],
        'inventory' => [
            'title' => 'المخزون',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'الاسم',
            'placeholder' => 'أدخل اسم المنتج',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف المنتج',
        ],
        'sku' => [
            'label' => 'رمز المنتج',
            'placeholder' => 'أدخل رمز المنتج',
        ],
        'barcode' => [
            'label' => 'الباركود',
            'placeholder' => 'أدخل الباركود',
        ],
        'category_id' => [
            'label' => 'الفئة',
            'placeholder' => 'اختر الفئة',
        ],
        'brand_id' => [
            'label' => 'العلامة التجارية',
            'placeholder' => 'أدخل العلامة التجارية',
        ],
        'unit_id' => [
            'label' => 'الوحدة',
            'placeholder' => 'أدخل الوحدة (مثل: قطعة، كيلو)',
        ],
        'cost' => [
            'label' => 'سعر التكلفة',
            'placeholder' => 'أدخل سعر التكلفة',
        ],
        'price' => [
            'label' => 'سعر البيع',
            'placeholder' => 'أدخل سعر البيع',
        ],
        'reorder_point' => [
            'label' => 'الحد الأدنى للمخزون',
            'placeholder' => 'أدخل الحد الأدنى للمخزون',
        ],
        'quantity' => [
            'label' => 'المخزون الحالي',
            'placeholder' => 'كمية المخزون الحالي',
        ],
        'weight' => [
            'label' => 'الوزن',
            'placeholder' => 'أدخل الوزن',
        ],
        'dimensions' => [
            'label' => 'الأبعاد',
            'placeholder' => 'أدخل الأبعاد',
        ],
        'image' => [
            'label' => 'الصورة',
            'placeholder' => 'رفع صورة المنتج',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
                'discontinued' => 'متوقف',
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
                'message' => 'تفعيل المنتج'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل المنتج'
            ],
            'discontinue' => [
                'label' => 'إيقاف',
                'message' => 'إيقاف المنتج'
            ],
        ]
    ],

    'relations' => [
        'category' => [
            'label' => 'الفئة',
            'plural_label' => 'الفئات',
            'placeholder' => 'اختر الفئة',
        ],
        'purchase_items' => [
            'label' => 'عنصر شراء',
            'plural_label' => 'عناصر الشراء',
            'placeholder' => 'اختر عناصر الشراء',
        ],
        'sales_items' => [
            'label' => 'عنصر بيع',
            'plural_label' => 'عناصر البيع',
            'placeholder' => 'اختر عناصر البيع',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء المنتج بنجاح',
            'updated' => 'تم تحديث المنتج بنجاح',
            'deleted' => 'تم حذف المنتج بنجاح',
            'not_found' => 'المنتج غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'sku_already_exists' => 'رمز المنتج موجود بالفعل',
            'stock_updated' => 'تم تحديث المخزون بنجاح',
        ],
    ],
];
