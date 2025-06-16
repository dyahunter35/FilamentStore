<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة كشوف الرواتب',
        'label' => 'كشف راتب',
        'plural_label' => 'كشوف الرواتب',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'salary_details' => [
            'title' => 'تفاصيل الراتب'
        ],
        'deductions' => [
            'title' => 'الخصومات',
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
        'pay_period_start' => [
            'label' => 'بداية فترة الراتب',
            'placeholder' => 'اختر تاريخ البداية',
        ],
        'pay_period_end' => [
            'label' => 'نهاية فترة الراتب',
            'placeholder' => 'اختر تاريخ النهاية',
        ],
        'basic_salary' => [
            'label' => 'الراتب الأساسي',
            'placeholder' => 'أدخل الراتب الأساسي',
        ],
        'overtime_hours' => [
            'label' => 'ساعات العمل الإضافي',
            'placeholder' => 'أدخل ساعات العمل الإضافي',
        ],
        'overtime_rate' => [
            'label' => 'معدل العمل الإضافي',
            'placeholder' => 'أدخل معدل العمل الإضافي',
        ],
        'overtime_amount' => [
            'label' => 'مبلغ العمل الإضافي',
            'placeholder' => 'مبلغ العمل الإضافي',
        ],
        'allowances' => [
            'label' => 'البدلات',
            'placeholder' => 'أدخل البدلات',
        ],
        'bonuses' => [
            'label' => 'المكافآت',
            'placeholder' => 'أدخل المكافآت',
        ],
        'gross_salary' => [
            'label' => 'إجمالي الراتب',
            'placeholder' => 'إجمالي الراتب',
        ],
        'tax_deduction' => [
            'label' => 'خصم الضريبة',
            'placeholder' => 'أدخل خصم الضريبة',
        ],
        'insurance_deduction' => [
            'label' => 'خصم التأمين',
            'placeholder' => 'أدخل خصم التأمين',
        ],
        'loan_deduction' => [
            'label' => 'خصم القرض',
            'placeholder' => 'أدخل خصم القرض',
        ],
        'other_deductions' => [
            'label' => 'خصومات أخرى',
            'placeholder' => 'أدخل الخصومات الأخرى',
        ],
        'total_deductions' => [
            'label' => 'إجمالي الخصومات',
            'placeholder' => 'إجمالي الخصومات',
        ],
        'net_salary' => [
            'label' => 'صافي الراتب',
            'placeholder' => 'صافي الراتب',
        ],
        'payment_date' => [
            'label' => 'تاريخ الدفع',
            'placeholder' => 'اختر تاريخ الدفع',
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
                'message' => 'الموافقة على كشف الراتب'
            ],
            'pay' => [
                'label' => 'تحديد كمدفوع',
                'message' => 'تحديد كشف الراتب كمدفوع'
            ],
        ]
    ],

    'relations' => [
        'employee' => [
            'label' => 'الموظف',
            'plural_label' => 'الموظفون',
            'placeholder' => 'اختر الموظف',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء كشف الراتب بنجاح',
            'updated' => 'تم تحديث كشف الراتب بنجاح',
            'deleted' => 'تم حذف كشف الراتب بنجاح',
            'not_found' => 'كشف الراتب غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'approved' => 'تم الموافقة على كشف الراتب بنجاح',
            'paid' => 'تم تحديد كشف الراتب كمدفوع بنجاح',
        ],
    ],
];
