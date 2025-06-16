<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المستودعات',
        'label' => 'تحويل مستودع',
        'plural_label' => 'تحويلات المستودعات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'transfer_details' => [
            'title' => 'تفاصيل التحويل'
        ],
        'items' => [
            'title' => 'العناصر',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'transfer_number' => [
            'label' => 'رقم التحويل',
            'placeholder' => 'أدخل رقم التحويل',
        ],
        'from_warehouse_id' => [
            'label' => 'من المستودع',
            'placeholder' => 'اختر المستودع المصدر',
        ],
        'to_warehouse_id' => [
            'label' => 'إلى المستودع',
            'placeholder' => 'اختر المستودع الهدف',
        ],
        'transfer_date' => [
            'label' => 'تاريخ التحويل',
            'placeholder' => 'اختر تاريخ التحويل',
        ],
        'expected_date' => [
            'label' => 'التاريخ المتوقع',
            'placeholder' => 'اختر التاريخ المتوقع',
        ],
        'actual_date' => [
            'label' => 'التاريخ الفعلي',
            'placeholder' => 'اختر التاريخ الفعلي',
        ],
        'reason' => [
            'label' => 'السبب',
            'placeholder' => 'أدخل سبب التحويل',
        ],
        'reference_number' => [
            'label' => 'رقم المرجع',
            'placeholder' => 'أدخل رقم المرجع',
        ],
        'shipping_cost' => [
            'label' => 'تكلفة الشحن',
            'placeholder' => 'أدخل تكلفة الشحن',
        ],
        'total_items' => [
            'label' => 'إجمالي العناصر',
            'placeholder' => 'إجمالي عدد العناصر',
        ],
        'total_quantity' => [
            'label' => 'إجمالي الكمية',
            'placeholder' => 'إجمالي الكمية',
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
                'in_transit' => 'في الطريق',
                'completed' => 'مكتمل',
                'cancelled' => 'ملغي',
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
            'send' => [
                'label' => 'إرسال',
                'message' => 'إرسال التحويل'
            ],
            'receive' => [
                'label' => 'استلام',
                'message' => 'استلام التحويل'
            ],
            'complete' => [
                'label' => 'إكمال',
                'message' => 'إكمال التحويل'
            ],
            'cancel' => [
                'label' => 'إلغاء',
                'message' => 'إلغاء التحويل'
            ],
        ]
    ],

    'relations' => [
        'from_warehouse' => [
            'label' => 'من المستودع',
            'plural_label' => 'من المستودعات',
            'placeholder' => 'اختر المستودع المصدر',
        ],
        'to_warehouse' => [
            'label' => 'إلى المستودع',
            'plural_label' => 'إلى المستودعات',
            'placeholder' => 'اختر المستودع الهدف',
        ],
        'items' => [
            'label' => 'عنصر',
            'plural_label' => 'العناصر',
            'placeholder' => 'اختر العناصر',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء تحويل المستودع بنجاح',
            'updated' => 'تم تحديث تحويل المستودع بنجاح',
            'deleted' => 'تم حذف تحويل المستودع بنجاح',
            'not_found' => 'تحويل المستودع غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'sent' => 'تم إرسال التحويل بنجاح',
            'received' => 'تم استلام التحويل بنجاح',
            'completed' => 'تم إكمال التحويل بنجاح',
            'cancelled' => 'تم إلغاء التحويل بنجاح',
        ],
    ],
];
