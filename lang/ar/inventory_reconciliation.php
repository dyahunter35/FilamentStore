<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المستودعات',
        'label' => 'تسوية المخزون',
        'plural_label' => 'تسويات المخزون',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'reconciliation_details' => [
            'title' => 'تفاصيل التسوية'
        ],
        'adjustments' => [
            'title' => 'التعديلات',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'reference_number' => [
            'label' => 'رقم المرجع',
            'placeholder' => 'أدخل رقم المرجع',
        ],
        'reconciliation_date' => [
            'label' => 'تاريخ التسوية',
            'placeholder' => 'اختر تاريخ التسوية',
        ],
        'warehouse_id' => [
            'label' => 'المستودع',
            'placeholder' => 'اختر المستودع',
        ],
        'product_id' => [
            'label' => 'المنتج',
            'placeholder' => 'اختر المنتج',
        ],
        'system_quantity' => [
            'label' => 'الكمية في النظام',
            'placeholder' => 'الكمية في النظام',
        ],
        'physical_quantity' => [
            'label' => 'الكمية الفعلية',
            'placeholder' => 'أدخل الكمية الفعلية',
        ],
        'difference' => [
            'label' => 'الفرق',
            'placeholder' => 'فرق الكمية',
        ],
        'adjustment_type' => [
            'label' => 'نوع التعديل',
            'options' => [
                'increase' => 'زيادة',
                'decrease' => 'نقصان',
            ],
        ],
        'reason' => [
            'label' => 'السبب',
            'placeholder' => 'أدخل سبب التعديل',
        ],
        'notes' => [
            'label' => 'الملاحظات',
            'placeholder' => 'أدخل الملاحظات',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'draft' => 'مسودة',
                'pending' => 'معلق',
                'approved' => 'موافق عليه',
                'completed' => 'مكتمل',
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
            'approve' => [
                'label' => 'موافقة',
                'message' => 'الموافقة على التسوية'
            ],
            'complete' => [
                'label' => 'إكمال',
                'message' => 'إكمال التسوية'
            ],
        ]
    ],

    'relations' => [
        'warehouse' => [
            'label' => 'المستودع',
            'plural_label' => 'المستودعات',
            'placeholder' => 'اختر المستودع',
        ],
        'product' => [
            'label' => 'المنتج',
            'plural_label' => 'المنتجات',
            'placeholder' => 'اختر المنتج',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء تسوية المخزون بنجاح',
            'updated' => 'تم تحديث تسوية المخزون بنجاح',
            'deleted' => 'تم حذف تسوية المخزون بنجاح',
            'not_found' => 'تسوية المخزون غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'approved' => 'تم الموافقة على التسوية بنجاح',
            'completed' => 'تم إكمال التسوية بنجاح',
        ],
    ],
];
