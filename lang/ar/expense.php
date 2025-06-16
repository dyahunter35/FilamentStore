<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المصروفات',
        'label' => 'مصروف',
        'plural_label' => 'المصروفات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'expense_details' => [
            'title' => 'تفاصيل المصروف'
        ],
        'attachments' => [
            'title' => 'المرفقات',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'title' => [
            'label' => 'العنوان',
            'placeholder' => 'أدخل عنوان المصروف',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف المصروف',
        ],
        'amount' => [
            'label' => 'المبلغ',
            'placeholder' => 'أدخل مبلغ المصروف',
        ],
        'category_id' => [
            'label' => 'الفئة',
            'placeholder' => 'اختر فئة المصروف',
        ],
        'expense_date' => [
            'label' => 'تاريخ المصروف',
            'placeholder' => 'اختر تاريخ المصروف',
        ],
        'payment_method' => [
            'label' => 'طريقة الدفع',
            'options' => [
                'cash' => 'نقدي',
                'bank_transfer' => 'تحويل بنكي',
                'credit_card' => 'بطاقة ائتمان',
                'check' => 'شيك',
            ],
        ],
        'reference_number' => [
            'label' => 'رقم المرجع',
            'placeholder' => 'أدخل رقم المرجع',
        ],
        'vendor' => [
            'label' => 'المورد',
            'placeholder' => 'أدخل اسم المورد',
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
                'approved' => 'موافق عليه',
                'paid' => 'مدفوع',
                'rejected' => 'مرفوض',
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
                'message' => 'الموافقة على المصروف'
            ],
            'reject' => [
                'label' => 'رفض',
                'message' => 'رفض المصروف'
            ],
            'pay' => [
                'label' => 'تحديد كمدفوع',
                'message' => 'تحديد المصروف كمدفوع'
            ],
        ]
    ],

    'relations' => [
        'category' => [
            'label' => 'الفئة',
            'plural_label' => 'الفئات',
            'placeholder' => 'اختر الفئة',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء المصروف بنجاح',
            'updated' => 'تم تحديث المصروف بنجاح',
            'deleted' => 'تم حذف المصروف بنجاح',
            'not_found' => 'المصروف غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'approved' => 'تم الموافقة على المصروف بنجاح',
            'rejected' => 'تم رفض المصروف بنجاح',
            'paid' => 'تم تحديد المصروف كمدفوع بنجاح',
        ],
    ],
];
