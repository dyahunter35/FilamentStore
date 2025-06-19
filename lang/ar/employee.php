<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الموظفين',
        'label' => 'موظف',
        'plural_label' => 'الموظفون',
        'model_label' => 'موظف',
    ],


    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'contact_information' => [
            'title' => 'معلومات الاتصال'
        ],
        'employment_details' => [
            'title' => 'تفاصيل التوظيف',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'employee_id' => [
            'label' => 'رقم الموظف',
            'placeholder' => 'أدخل رقم الموظف',
        ],
        'name' => [
            'label' => 'الاسم',
            'placeholder' => 'أدخل اسم الموظف',
        ],
        'email' => [
            'label' => 'البريد الإلكتروني',
            'placeholder' => 'أدخل عنوان البريد الإلكتروني',
        ],
        'phone' => [
            'label' => 'الهاتف',
            'placeholder' => 'أدخل رقم الهاتف',
        ],
        'employee_id' => [
            'label' => 'رقم الموظف',
            'placeholder' => 'أدخل رقم الموظف',
        ],
        'department' => [
            'label' => 'القسم',
            'placeholder' => 'أدخل القسم',
        ],
        'position' => [
            'label' => 'المنصب',
            'placeholder' => 'أدخل المنصب',
        ],
        'salary' => [
            'label' => 'الراتب',
            'placeholder' => 'أدخل الراتب',
        ],
        'hire_date' => [
            'label' => 'تاريخ التوظيف',
            'placeholder' => 'اختر تاريخ التوظيف',
        ],
        'address' => [
            'label' => 'العنوان',
            'placeholder' => 'أدخل العنوان',
        ],
        'emergency_contact' => [
            'label' => 'جهة الاتصال الطارئة',
            'placeholder' => 'أدخل جهة الاتصال الطارئة',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
                'terminated' => 'منتهي الخدمة',
            ],
        ],
        'avatar' => [
            'label' => 'الصورة الشخصية',
            'placeholder' => 'رفع صورة شخصية',
            'helper_text' => 'حجم الصورة الموصى به: 300x300 بكسل',
        ],
        'notes' => [
            'label' => 'ملاحظات',
            'placeholder' => 'أدخل ملاحظات إضافية',
            'helper_text' => 'يمكن استخدام هذا الحقل لتخزين معلومات إضافية عن الموظف مثل المهارات أو الإنجازات أو أي تفاصيل أخرى ذات صلة.',
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
            'active' => [
                'label' => 'تفعيل',
                'message' => 'تفعيل الموظف'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل الموظف'
            ],
            'terminated' => [
                'label' => 'إنهاء الخدمة',
                'message' => 'إنهاء خدمة الموظف'
            ],
        ]
    ],

    'relations' => [
        'attendances' => [
            'label' => 'حضور',
            'plural_label' => 'الحضور',
            'placeholder' => 'اختر الحضور',
        ],
        'loans' => [
            'label' => 'قرض',
            'plural_label' => 'القروض',
            'placeholder' => 'اختر القروض',
        ],
        'payrolls' => [
            'label' => 'كشف راتب',
            'plural_label' => 'كشوف الرواتب',
            'placeholder' => 'اختر كشوف الرواتب',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء الموظف بنجاح',
            'updated' => 'تم تحديث الموظف بنجاح',
            'deleted' => 'تم حذف الموظف بنجاح',
            'not_found' => 'الموظف غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'email_already_exists' => 'عنوان البريد الإلكتروني موجود بالفعل',
            'employee_id_exists' => 'رقم الموظف موجود بالفعل',
            'profile_updated' => 'تم تحديث ملف الموظف بنجاح',
        ],
    ],
];
