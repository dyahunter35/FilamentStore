<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المشتريات',
        'label' => 'مرتجع شراء',
        'plural_label' => 'مرتجعات الشراء',
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
        'purchase_invoice_id' => [
            'label' => 'فاتورة الشراء',
            'placeholder' => 'اختر فاتورة الشراء',
        ],
        'supplier_id' => [
            'label' => 'المورد',
            'placeholder' => 'اختر المورد',
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
        'purchase_invoice' => [
            'label' => 'فاتورة الشراء',
            'plural_label' => 'فواتير الشراء',
            'placeholder' => 'اختر فاتورة الشراء',
        ],
        'supplier' => [
            'label' => 'المورد',
            'plural_label' => 'الموردون',
            'placeholder' => 'اختر المورد',
        ],
        'items' => [
            'label' => 'عنصر',
            'plural_label' => 'العناصر',
            'placeholder' => 'اختر العناصر',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء مرتجع الشراء بنجاح',
            'updated' => 'تم تحديث مرتجع الشراء بنجاح',
            'deleted' => 'تم حذف مرتجع الشراء بنجاح',
            'not_found' => 'مرتجع الشراء غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'approved' => 'تم الموافقة على المرتجع بنجاح',
            'completed' => 'تم إكمال المرتجع بنجاح',
            'rejected' => 'تم رفض المرتجع بنجاح',
        ],
    ],
];
