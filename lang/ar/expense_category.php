<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المصروفات',
        'label' => 'فئة المصروفات',
        'plural_label' => 'فئات المصروفات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'category_details' => [
            'title' => 'تفاصيل الفئة'
        ],
        'settings' => [
            'title' => 'الإعدادات',
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'الاسم',
            'placeholder' => 'أدخل اسم الفئة',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف الفئة',
        ],
        'code' => [
            'label' => 'الرمز',
            'placeholder' => 'أدخل رمز الفئة',
        ],
        'parent_id' => [
            'label' => 'الفئة الأب',
            'placeholder' => 'اختر الفئة الأب',
        ],
        'budget_limit' => [
            'label' => 'حد الميزانية',
            'placeholder' => 'أدخل حد الميزانية',
        ],
        'is_active' => [
            'label' => 'نشط',
            'options' => [
                true => 'نعم',
                false => 'لا',
            ],
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
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
            'active' => [
                'label' => 'تفعيل',
                'message' => 'تفعيل الفئة'
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل الفئة'
            ],
        ]
    ],

    'relations' => [
        'parent' => [
            'label' => 'الفئة الأب',
            'plural_label' => 'الفئات الأب',
            'placeholder' => 'اختر الفئة الأب',
        ],
        'children' => [
            'label' => 'الفئة الفرعية',
            'plural_label' => 'الفئات الفرعية',
            'placeholder' => 'اختر الفئات الفرعية',
        ],
        'expenses' => [
            'label' => 'مصروف',
            'plural_label' => 'المصروفات',
            'placeholder' => 'اختر المصروفات',
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء فئة المصروفات بنجاح',
            'updated' => 'تم تحديث فئة المصروفات بنجاح',
            'deleted' => 'تم حذف فئة المصروفات بنجاح',
            'not_found' => 'فئة المصروفات غير موجودة',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مخول لتنفيذ هذا الإجراء',
            'code_already_exists' => 'رمز الفئة موجود بالفعل',
            'has_children' => 'لا يمكن حذف فئة تحتوي على فئات فرعية',
        ],
    ],
];
