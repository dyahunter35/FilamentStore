<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المبيعات',
        'label' => 'فاتورة مبيعات',
        'plural_label' => 'فواتير المبيعات',
    ],

    'bradcrumbs' => [
        'index' => 'فواتير المبيعات',
        'list_project' => 'قائمة فواتير المبيعات',
    ],

    // Section headers
    'sections' => [
        'items' => [
            'title' => 'عناصر الفاتورة',
        ],

        'invoice_details' => [
            'title' => 'تفاصيل الفاتورة'
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
        'invoice_number' => [
            'label' => 'رقم الفاتورة',
            'placeholder' => 'أدخل رقم الفاتورة',
        ],
        'customer_id' => [
            'label' => 'العميل',
            'placeholder' => 'اختر العميل',
        ],
        'invoice_date' => [
            'label' => 'تاريخ الفاتورة',
            'placeholder' => 'اختر تاريخ الفاتورة',
        ],
        'due_date' => [
            'label' => 'تاريخ الاستحقاق',
            'placeholder' => 'اختر تاريخ الاستحقاق',
        ],
        'reference_number' => [
            'label' => 'رقم المرجع',
            'placeholder' => 'أدخل رقم المرجع',
        ],
        'subtotal' => [
            'label' => 'المجموع الفرعي',
            'placeholder' => 'مبلغ المجموع الفرعي',
        ],
        'tax_amount' => [
            'label' => 'مبلغ الضريبة',
            'placeholder' => 'مبلغ الضريبة',
        ],
        'discount_amount' => [
            'label' => 'مبلغ الخصم',
            'placeholder' => 'أدخل مبلغ الخصم',
        ],
        'total_amount' => [
            'label' => 'المبلغ الإجمالي',
            'placeholder' => 'المبلغ الإجمالي',
        ],
        'paid_amount' => [
            'label' => 'المبلغ المدفوع',
            'placeholder' => 'أدخل المبلغ المدفوع',
        ],
        'remaining_amount' => [
            'label' => 'المبلغ المتبقي',
            'placeholder' => 'المبلغ المتبقي',
        ],
        'payment_terms' => [
            'label' => 'شروط الدفع',
            'placeholder' => 'أدخل شروط الدفع',
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
                'sent' => 'مرسل',
                'paid' => 'مدفوع',
                'overdue' => 'متأخر',
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
                'message' => 'إرسال الفاتورة'
            ],
            'pay' => [
                'label' => 'تحديد كمدفوع',
                'message' => 'تحديد الفاتورة كمدفوعة'
            ],
            'cancel' => [
                'label' => 'إلغاء',
                'message' => 'إلغاء الفاتورة'
            ],
        ]
    ],

    'relations' => [
        'customer' => [
            'label' => 'العميل',
            'plural_label' => 'العملاء',
            'placeholder' => 'اختر العميل',
        ],
        'items' => [
            'label' => 'عنصر',
            'plural_label' => 'العناصر',
            'placeholder' => 'اختر العناصر',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء فاتورة المبيعات بنجاح',
            'updated' => 'تم تحديث فاتورة المبيعات بنجاح',
            'deleted' => 'تم حذف فاتورة المبيعات بنجاح',
            'not_found' => 'فاتورة المبيعات غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'sent' => 'تم إرسال الفاتورة بنجاح',
            'paid' => 'تم تحديد الفاتورة كمدفوعة بنجاح',
            'cancelled' => 'تم إلغاء الفاتورة بنجاح',
        ],
    ],
];
