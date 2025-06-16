<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الصرافة',
        'label' => 'معاملة الصرافة',
        'plural_label' => 'معاملات الصرافة',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'transaction_details' => [
            'title' => 'تفاصيل المعاملة'
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
        'client_id' => [
            'label' => 'العميل',
            'placeholder' => 'اختر العميل',
        ],
        'transaction_type' => [
            'label' => 'نوع المعاملة',
            'options' => [
                'buy' => 'شراء',
                'sell' => 'بيع',
            ],
        ],
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
        'commission' => [
            'label' => 'العمولة',
            'placeholder' => 'أدخل العمولة',
        ],
        'net_amount' => [
            'label' => 'المبلغ الصافي',
            'placeholder' => 'المبلغ الصافي',
        ],
        'reference_number' => [
            'label' => 'رقم المرجع',
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
                'message' => 'إكمال المعاملة'
            ],
            'cancel' => [
                'label' => 'إلغاء',
                'message' => 'إلغاء المعاملة'
            ],
        ]
    ],

    'relations' => [
        'client' => [
            'label' => 'العميل',
            'plural_label' => 'العملاء',
            'placeholder' => 'اختر العميل',
        ],
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
            'created' => 'تم إنشاء معاملة الصرافة بنجاح',
            'updated' => 'تم تحديث معاملة الصرافة بنجاح',
            'deleted' => 'تم حذف معاملة الصرافة بنجاح',
            'not_found' => 'معاملة الصرافة غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'completed' => 'تم إكمال المعاملة بنجاح',
            'cancelled' => 'تم إلغاء المعاملة بنجاح',
        ],
    ],
];
