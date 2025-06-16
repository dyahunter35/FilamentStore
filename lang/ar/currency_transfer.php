<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة العملات',
        'label' => 'تحويل العملة',
        'plural_label' => 'تحويلات العملات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'transfer_details' => [
            'title' => 'تفاصيل التحويل'
        ],
        'amounts' => [
            'title' => 'المبالغ',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'from_currency' => [
            'label' => 'من العملة',
            'placeholder' => 'اختر العملة المصدر',
        ],
        'to_currency' => [
            'label' => 'إلى العملة',
            'placeholder' => 'اختر العملة الهدف',
        ],
        'amount' => [
            'label' => 'المبلغ',
            'placeholder' => 'أدخل المبلغ',
        ],
        'exchange_rate' => [
            'label' => 'سعر الصرف',
            'placeholder' => 'أدخل سعر الصرف',
        ],
        'converted_amount' => [
            'label' => 'المبلغ المحول',
            'placeholder' => 'المبلغ المحول',
        ],
        'reference' => [
            'label' => 'المرجع',
            'placeholder' => 'أدخل رقم المرجع',
        ],
        'notes' => [
            'label' => 'الملاحظات',
            'placeholder' => 'أدخل الملاحظات',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'pending' => 'معلق',
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
        'from_currency' => [
            'label' => 'من العملة',
            'plural_label' => 'من العملات',
            'placeholder' => 'اختر العملة المصدر',
        ],
        'to_currency' => [
            'label' => 'إلى العملة',
            'plural_label' => 'إلى العملات',
            'placeholder' => 'اختر العملة الهدف',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء تحويل العملة بنجاح',
            'updated' => 'تم تحديث تحويل العملة بنجاح',
            'deleted' => 'تم حذف تحويل العملة بنجاح',
            'not_found' => 'تحويل العملة غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'completed' => 'تم إكمال التحويل بنجاح',
            'cancelled' => 'تم إلغاء التحويل بنجاح',
        ],
    ],
];
