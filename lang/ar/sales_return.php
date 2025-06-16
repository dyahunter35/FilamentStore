<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المبيعات',
        'label' => 'مرتجع مبيعات',
        'plural_label' => 'مرتجعات المبيعات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'return_details' => [
            'title' => 'تفاصيل المرتجع'
        ],
        'refund_information' => [
            'title' => 'معلومات الاسترداد',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'return_number' => [
            'label' => 'رقم المرتجع',
            'placeholder' => 'أدخل رقم المرتجع',
        ],
        'sales_invoice_id' => [
            'label' => 'فاتورة المبيعات',
            'placeholder' => 'اختر فاتورة المبيعات',
        ],
        'customer_id' => [
            'label' => 'العميل',
            'placeholder' => 'اختر العميل',
        ],
        'return_date' => [
            'label' => 'تاريخ المرتجع',
            'placeholder' => 'اختر تاريخ المرتجع',
        ],
        'reason' => [
            'label' => 'السبب',
            'placeholder' => 'أدخل سبب المرتجع',
        ],
        'subtotal' => [
            'label' => 'المجموع الفرعي',
            'placeholder' => 'مبلغ المجموع الفرعي',
        ],
        'tax_amount' => [
            'label' => 'مبلغ الضريبة',
            'placeholder' => 'مبلغ الضريبة',
        ],
        'total_amount' => [
            'label' => 'المبلغ الإجمالي',
            'placeholder' => 'المبلغ الإجمالي',
        ],
        'refund_amount' => [
            'label' => 'مبلغ الاسترداد',
            'placeholder' => 'أدخل مبلغ الاسترداد',
        ],
        'refund_method' => [
            'label' => 'طريقة الاسترداد',
            'options' => [
                'cash' => 'نقدي',
                'bank_transfer' => 'تحويل بنكي',
                'credit_note' => 'إشعار دائن',
                'store_credit' => 'رصيد المتجر',
            ],
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
                'approved' => 'موافق عليه',
                'completed' => 'مكتمل',
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
                'message' => 'الموافقة على المرتجع'
            ],
            'complete' => [
                'label' => 'إكمال',
                'message' => 'إكمال المرتجع'
            ],
            'reject' => [
                'label' => 'رفض',
                'message' => 'رفض المرتجع'
            ],
        ]
    ],

    'relations' => [
        'sales_invoice' => [
            'label' => 'فاتورة المبيعات',
            'plural_label' => 'فواتير المبيعات',
            'placeholder' => 'اختر فاتورة المبيعات',
        ],
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
            'created' => 'تم إنشاء مرتجع المبيعات بنجاح',
            'updated' => 'تم تحديث مرتجع المبيعات بنجاح',
            'deleted' => 'تم حذف مرتجع المبيعات بنجاح',
            'not_found' => 'مرتجع المبيعات غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'approved' => 'تم الموافقة على المرتجع بنجاح',
            'completed' => 'تم إكمال المرتجع بنجاح',
            'rejected' => 'تم رفض المرتجع بنجاح',
        ],
    ],
];
