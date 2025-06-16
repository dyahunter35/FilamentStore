<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الإعلانات',
        'label' => 'إعلان',
        'plural_label' => 'الإعلانات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'location_information' => [
            'title' => 'معلومات الموقع'
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'title' => [
            'label' => 'العنوان',
            'placeholder' => 'أدخل العنوان',
        ],
        'user_id' => [
            'label' => 'المستخدم',
            'placeholder' => 'اختر المستخدم',
        ],
        'purchaser' => [
            'label' => 'المشتري',
            'placeholder' => '',
        ],
        'category_id' => [
            'label' => 'الفئة',
            'placeholder' => 'اختر الفئة',
        ],
        'sub_category_id' => [
            'label' => 'الفئة الفرعية',
            'placeholder' => 'اختر الفئة الفرعية',
        ],
        'item_condition' => [
            'label' => 'حالة المنتج',
            'placeholder' => 'اختر حالة المنتج',
            'options' => [
                'very_bad' => 'سيئ جداً',
                'bad' => 'سيئ',
                'ok' => 'مقبول',
                'good' => 'جيد',
                'very_good' => 'جيد جداً',
            ],
        ],
        'price' => [
            'label' => 'السعر',
            'placeholder' => 'أدخل السعر',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل الوصف',
        ],
        'address_id' => [
            'label' => 'العنوان',
            'placeholder' => 'اختر العنوان',
        ],
        'city_id' => [
            'label' => 'المدينة',
            'placeholder' => 'اختر المدينة',
        ],
        'neighborhood_id' => [
            'label' => 'الحي',
            'placeholder' => 'اختر الحي',
        ],
        'region_id' => [
            'label' => 'المنطقة',
            'placeholder' => 'اختر المنطقة',
        ],
        'ad_status' => [
            'label' => 'الحالة',
        ],
        'address' => [
            'label' => 'العنوان',
        ],
        'media' => [
            'label' => 'الوسائط',
            'placeholder' => 'رفع ملفات الوسائط',
        ],
        'delivery_option' => [
            'label' => 'خيار التوصيل',
            'placeholder' => '',
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
            'rejected' => [
                'label' => 'رفض',
                'message' => 'رفض الإعلان'
            ],
            'archived' => [
                'label' => 'أرشفة',
                'message' => 'أرشفة الإعلان'
            ],
            'published' => [
                'label' => 'نشر',
                'message' => 'نشر الإعلان'
            ],
            'under_review' => [
                'label' => 'قيد المراجعة',
                'message' => 'تعيين كقيد المراجعة'
            ],
            'solded' => [
                'label' => 'تم البيع',
                'message' => ''
            ],
        ]
    ],

    'relations' => [
        'conversations' => [
            'label' => 'محادثة',
            'plural_label' => 'المحادثات',
            'placeholder' => 'اختر محادثة',
            'fields' => [
                'sender' => [
                    'label' => 'المرسل',
                    'placeholder' => 'اختر المرسل',
                ],
                'receiver' => [
                    'label' => 'المستلم',
                    'placeholder' => 'اختر المستلم',
                ],
                'last_message' => [
                    'label' => 'آخر رسالة',
                    'placeholder' => 'أدخل آخر رسالة',
                ],
                'last_message_time' => [
                    'label' => 'وقت آخر رسالة',
                    'placeholder' => '',
                ],
            ],
            'actions' => [
                'view' => [
                    'label' => 'عرض المحادثة',
                    'placeholder' => '',
                ],
            ],
        ],
        'offers' => [
            'label' => 'عرض',
            'plural_label' => 'العروض',
            'fields' => [
                'delivery_uuid' => [
                    'label' => 'معرف التوصيل',
                    'placeholder' => 'أدخل معرف التوصيل',
                ],
                'delivery_user' => [
                    'label' => 'مستخدم التوصيل',
                    'placeholder' => 'اختر مستخدم التوصيل',
                ],
                'requester_user' => [
                    'label' => 'المستخدم الطالب',
                    'placeholder' => 'اختر المستخدم الطالب',
                ],
                'price' => [
                    'label' => 'السعر',
                    'placeholder' => 'أدخل السعر',
                ],
                'user_id' => [
                    'label' => 'المستخدم',
                    'placeholder' => 'اختر المستخدم',
                ],
                'status' => [
                    'label' => 'حالة التوصيل',
                    'placeholder' => '',
                ],
                'created_at' => [
                    'label' => 'تاريخ الإنشاء',
                    'placeholder' => '',
                ],
            ],
            'actions' => [
                'view' => [
                    'label' => 'عرض تفاصيل التوصيل',
                    'placeholder' => '',
                ],
            ],
        ],
        'invoices' => [
            'label' => 'فاتورة',
            'plural_label' => 'الفواتير',
            'fields' => [
                'invoice_date' => [
                    'label' => 'تاريخ الفاتورة',
                    'placeholder' => 'أدخل تاريخ الفاتورة',
                ],
                'invoice_number' => [
                    'label' => 'رقم الفاتورة',
                    'placeholder' => 'أدخل رقم الفاتورة',
                ],
                'type' => [
                    'label' => 'نوع الفاتورة',
                ],
                'tax' => [
                    'label' => 'الضريبة',
                ],
                'status' => [
                    'label' => 'الحالة',
                    'placeholder' => '',
                ],
                'total' => [
                    'label' => 'المجموع',
                    'placeholder' => '',
                ],
                'created_at' => [
                    'label' => 'تاريخ الإنشاء',
                    'placeholder' => '',
                ],
            ],
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء الإعلان بنجاح',
            'updated' => 'تم تحديث الإعلان بنجاح',
            'can_not_updated' => 'لا يمكنك التحديث حيث انتهت المدة المسموح بها للتعديل',
            'deleted' => 'تم حذف الإعلان بنجاح',
            'can_not_deleted' => 'لا يمكنك حذف الإعلان',
            'not_found' => 'الإعلان غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مصرح لك بتنفيذ هذا الإجراء',
            'available' => 'المنتج متاح',
            'not_available' => 'المنتج غير متاح',
            'confirmed' => 'تم تأكيد الشراء بنجاح',
            'can_not_confirmed' => 'لا يمكن تأكيد الشراء',
            'already_confirmed' => 'تم تأكيد الشراء مسبقاً',
            'can_not_update_address' => 'لا يمكن تحديث عنوان المشتري',
            'address_updated' => 'تم تحديث عنوان المشتري بنجاح',
            'self_purchase' => 'لا يمكنك شراء منتجك الخاص',
            'account_not_active' => 'حسابك غير مفعل',
            'insufficient_balance' => 'رصيدك غير كافي',
            'delivery_request_created' => 'تم إنشاء طلب التوصيل بنجاح',
            'can_not_create_delivery_order' => 'عذراً، هذا الإعلان غير صالح لإنشاء طلب توصيل جديد',
            'already_subscribed' => 'هذا الإعلان لديه بالفعل اشتراك صالح يبدأ من ( :from ) وينتهي في ( :to )',
            'subscribed' => 'تم الاشتراك بنجاح لشهر إضافي لهذا الإعلان',
            'notification' => [
                'confirm_user' => 'مرحباً :purchaser ، قام :sailer بتأكيد شراء المنتج :productName',
                'confirm_admin' => 'قام المشرف بتأكيد شراء المنتج :productName',
            ],
        ],
    ],
];
