<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الإيرادات',
        'label' => 'إيراد آخر',
        'plural_label' => 'الإيرادات الأخرى',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'revenue_details' => [
            'title' => 'تفاصيل الإيراد'
        ],
        'payment_information' => [
            'title' => 'معلومات الدفع',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'title' => [
            'label' => 'العنوان',
            'placeholder' => 'أدخل عنوان الإيراد',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف الإيراد',
        ],
        'amount' => [
            'label' => 'المبلغ',
            'placeholder' => 'أدخل مبلغ الإيراد',
        ],
        'revenue_date' => [
            'label' => 'تاريخ الإيراد',
            'placeholder' => 'اختر تاريخ الإيراد',
        ],
        'source' => [
            'label' => 'المصدر',
            'placeholder' => 'أدخل مصدر الإيراد',
        ],
        'category' => [
            'label' => 'الفئة',
            'options' => [
                'interest' => 'فوائد',
                'commission' => 'عمولة',
                'rental' => 'إيجار',
                'investment' => 'استثمار',
                'other' => 'أخرى',
            ],
        ],
        'payment_method' => [
            'label' => 'طريقة الدفع',
            'options' => [
                'cash' => 'نقدي',
                'bank_transfer' => 'تحويل بنكي',
                'check' => 'شيك',
                'online' => 'إلكتروني',
            ],
        ],
        'reference_number' => [
            'label' => 'رقم المرجع',
            'placeholder' => 'أدخل رقم المرجع',
        ],
        'receipt' => [
            'label' => 'الإيصال',
            'placeholder' => 'رفع الإيصال',
        ],
        'notes' => [
            'label' => 'الملاحظات',
            'placeholder' => 'أدخل الملاحظات',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'pending' => 'معلق',
                'received' => 'مستلم',
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
            'receive' => [
                'label' => 'تحديد كمستلم',
                'message' => 'تحديد الإيراد كمستلم'
            ],
            'cancel' => [
                'label' => 'إلغاء',
                'message' => 'إلغاء الإيراد'
            ],
        ]
    ],

    'relations' => [
        'attachments' => [
            'label' => 'مرفق',
            'plural_label' => 'المرفقات',
            'placeholder' => 'اختر المرفقات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء الإيراد الآخر بنجاح',
            'updated' => 'تم تحديث الإيراد الآخر بنجاح',
            'deleted' => 'تم حذف الإيراد الآخر بنجاح',
            'not_found' => 'الإيراد الآخر غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'received' => 'تم تحديد الإيراد كمستلم بنجاح',
            'cancelled' => 'تم إلغاء الإيراد بنجاح',
        ],
    ],
];
