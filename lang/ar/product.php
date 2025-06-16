<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المنتجات',
        'label' => 'منتج',
        'plural_label' => 'المنتجات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'معلومات المنتج',
        ],
        'pricing' => [
            'title' => 'معلومات التسعير'
        ],
        'inventory' => [
            'title' => 'إدارة المخزون'
        ],
        'media' => [
            'title' => 'الوسائط',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'اسم المنتج',
            'placeholder' => 'أدخل اسم المنتج',
        ],
        'slug' => [
            'label' => 'الرابط المختصر',
            'placeholder' => 'أدخل الرابط المختصر',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف المنتج',
        ],
        'short_description' => [
            'label' => 'وصف مختصر',
            'placeholder' => 'أدخل وصف مختصر',
        ],
        'category_id' => [
            'label' => 'الفئة',
            'placeholder' => 'اختر الفئة',
        ],
        'brand_id' => [
            'label' => 'العلامة التجارية',
            'placeholder' => 'اختر العلامة التجارية',
        ],
        'sku' => [
            'label' => 'رمز المنتج',
            'placeholder' => 'أدخل رمز المنتج',
        ],
        'price' => [
            'label' => 'السعر',
            'placeholder' => 'أدخل السعر',
        ],
        'sale_price' => [
            'label' => 'سعر البيع',
            'placeholder' => 'أدخل سعر البيع',
        ],
        'cost_price' => [
            'label' => 'سعر التكلفة',
            'placeholder' => 'أدخل سعر التكلفة',
        ],
        'stock_quantity' => [
            'label' => 'الكمية المتوفرة',
            'placeholder' => 'أدخل الكمية المتوفرة',
        ],
        'min_stock' => [
            'label' => 'الحد الأدنى للمخزون',
            'placeholder' => 'أدخل الحد الأدنى للمخزون',
        ],
        'weight' => [
            'label' => 'الوزن',
            'placeholder' => 'أدخل وزن المنتج',
        ],
        'dimensions' => [
            'label' => 'الأبعاد',
            'placeholder' => 'أدخل أبعاد المنتج',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
                'draft' => 'مسودة',
                'out_of_stock' => 'نفذ المخزون',
            ],
        ],
        'featured' => [
            'label' => 'مميز',
        ],
        'images' => [
            'label' => 'صور المنتج',
            'placeholder' => 'رفع صور المنتج',
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
                'label' => 'تعطيل',
                'message' => 'تعطيل المنتج'
            ],
            'draft' => [
                'label' => 'تعيين كمسودة',
                'message' => 'تعيين المنتج كمسودة'
            ],
            'featured' => [
                'label' => 'تمييز',
                'message' => 'تمييز المنتج'
            ],
        ]
    ],

    'relations' => [
        'variants' => [
            'label' => 'نسخة',
            'plural_label' => 'النسخ',
            'placeholder' => 'اختر النسخ',
        ],
        'reviews' => [
            'label' => 'تقييم',
            'plural_label' => 'التقييمات',
            'fields' => [
                'rating' => [
                    'label' => 'التقييم',
                    'placeholder' => 'أدخل التقييم',
                ],
                'comment' => [
                    'label' => 'التعليق',
                    'placeholder' => 'أدخل تعليق التقييم',
                ],
                'user_id' => [
                    'label' => 'المستخدم',
                    'placeholder' => 'اختر المستخدم',
                ],
            ],
        ],
        'orders' => [
            'label' => 'طلب',
            'plural_label' => 'الطلبات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء المنتج بنجاح',
            'updated' => 'تم تحديث المنتج بنجاح',
            'deleted' => 'تم حذف المنتج بنجاح',
            'not_found' => 'المنتج غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مصرح لك بتنفيذ هذا الإجراء',
            'out_of_stock' => 'المنتج نفذ من المخزون',
            'stock_updated' => 'تم تحديث كمية المخزون بنجاح',
            'featured_updated' => 'تم تحديث حالة التمييز بنجاح',
        ],
    ],
];
