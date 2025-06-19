<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الصرافة',
        'label' => 'عميل الصرافة',
        'plural_label' => 'عملاء الصرافة',
        'model_label' => 'عميل الصرافة',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'contact_information' => [
            'title' => 'معلومات الاتصال'
        ],
        'verification' => [
            'title' => 'التحقق',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'الاسم',
            'placeholder' => 'أدخل اسم العميل',
        ],
        'email' => [
            'label' => 'البريد الإلكتروني',
            'placeholder' => 'أدخل عنوان البريد الإلكتروني',
        ],
        'phone' => [
            'label' => 'الهاتف',
            'placeholder' => 'أدخل رقم الهاتف',
        ],
        'identity_number' => [
            'label' => 'رقم الهوية',
            'placeholder' => 'أدخل رقم الهوية',
        ],
        'address' => [
            'label' => 'العنوان',
            'placeholder' => 'أدخل العنوان',
        ],
        'nationality' => [
            'label' => 'الجنسية',
            'placeholder' => 'أدخل الجنسية',
        ],
        'occupation' => [
            'label' => 'المهنة',
            'placeholder' => 'أدخل المهنة',
        ],
        'verification_status' => [
            'label' => 'حالة التحقق',
            'options' => [
                'pending' => 'معلق',
                'verified' => 'محقق',
                'rejected' => 'مرفوض',
            ],
        ],
        'kyc_documents' => [
            'label' => 'وثائق التحقق',
            'placeholder' => 'رفع وثائق التحقق',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
                'suspended' => 'معلق',
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
            'verify' => [
                'label' => 'تحقق',
                'message' => 'تحقق من العميل'
            ],
            'reject' => [
                'label' => 'رفض',
                'message' => 'رفض العميل'
            ],
            'suspend' => [
                'label' => 'تعليق',
                'message' => 'تعليق العميل'
            ],
            'activate' => [
                'label' => 'تفعيل',
                'message' => 'تفعيل العميل'
            ],
        ]
    ],

    'relations' => [
        'transactions' => [
            'label' => 'معاملة',
            'plural_label' => 'المعاملات',
            'placeholder' => 'اختر المعاملات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء عميل الصرافة بنجاح',
            'updated' => 'تم تحديث عميل الصرافة بنجاح',
            'deleted' => 'تم حذف عميل الصرافة بنجاح',
            'not_found' => 'عميل الصرافة غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'verified' => 'تم التحقق من العميل بنجاح',
            'rejected' => 'تم رفض التحقق من العميل',
            'suspended' => 'تم تعليق العميل بنجاح',
        ],
    ],
];
