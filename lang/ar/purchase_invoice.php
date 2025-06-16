<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المشتريات',
        'label' => 'فاتورة شراء',
        'plural_label' => 'فواتير الشراء',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
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
        'supplier_id' => [
            'label' => 'المورد',
            'placeholder' => 'اختر المورد',
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
                'approved' => 'موافق عليه',
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
            'approve' => [
                'label' => 'موافقة',
                'message' => 'الموافقة على الفاتورة'
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
            'created' => 'تم إنشاء فاتورة الشراء بنجاح',
            'updated' => 'تم تحديث فاتورة الشراء بنجاح',
            'deleted' => 'تم حذف فاتورة الشراء بنجاح',
            'not_found' => 'فاتورة الشراء غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'approved' => 'تم الموافقة على الفاتورة بنجاح',
            'paid' => 'تم تحديد الفاتورة كمدفوعة بنجاح',
            'cancelled' => 'تم إلغاء الفاتورة بنجاح',
        ],
    ],
];
