<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الموظفين',
        'label' => 'قرض الموظف',
        'plural_label' => 'قروض الموظفين',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'loan_details' => [
            'title' => 'تفاصيل القرض'
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
        'employee_id' => [
            'label' => 'الموظف',
            'placeholder' => 'اختر الموظف',
        ],
        'loan_amount' => [
            'label' => 'مبلغ القرض',
            'placeholder' => 'أدخل مبلغ القرض',
        ],
        'interest_rate' => [
            'label' => 'معدل الفائدة',
            'placeholder' => 'أدخل معدل الفائدة',
        ],
        'loan_term' => [
            'label' => 'مدة القرض (بالأشهر)',
            'placeholder' => 'أدخل مدة القرض بالأشهر',
        ],
        'monthly_payment' => [
            'label' => 'الدفعة الشهرية',
            'placeholder' => 'مبلغ الدفعة الشهرية',
        ],
        'remaining_balance' => [
            'label' => 'الرصيد المتبقي',
            'placeholder' => 'الرصيد المتبقي',
        ],
        'start_date' => [
            'label' => 'تاريخ البداية',
            'placeholder' => 'اختر تاريخ البداية',
        ],
        'end_date' => [
            'label' => 'تاريخ النهاية',
            'placeholder' => 'اختر تاريخ النهاية',
        ],
        'purpose' => [
            'label' => 'الغرض',
            'placeholder' => 'أدخل غرض القرض',
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
                'active' => 'نشط',
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
            'approve' => [
                'label' => 'موافقة',
                'message' => 'الموافقة على القرض'
            ],
            'activate' => [
                'label' => 'تفعيل',
                'message' => 'تفعيل القرض'
            ],
            'complete' => [
                'label' => 'إكمال',
                'message' => 'إكمال القرض'
            ],
            'cancel' => [
                'label' => 'إلغاء',
                'message' => 'إلغاء القرض'
            ],
        ]
    ],

    'relations' => [
        'employee' => [
            'label' => 'الموظف',
            'plural_label' => 'الموظفون',
            'placeholder' => 'اختر الموظف',
        ],
        'payments' => [
            'label' => 'دفعة',
            'plural_label' => 'الدفعات',
            'placeholder' => 'اختر الدفعات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء قرض الموظف بنجاح',
            'updated' => 'تم تحديث قرض الموظف بنجاح',
            'deleted' => 'تم حذف قرض الموظف بنجاح',
            'not_found' => 'قرض الموظف غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'approved' => 'تم الموافقة على القرض بنجاح',
            'payment_recorded' => 'تم تسجيل الدفعة بنجاح',
        ],
    ],
];
