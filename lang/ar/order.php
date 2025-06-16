<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة الطلبات',
        'label' => 'طلب',
        'plural_label' => 'الطلبات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'معلومات الطلب',
        ],
        'customer_information' => [
            'title' => 'معلومات العميل'
        ],
        'shipping_information' => [
            'title' => 'معلومات الشحن'
        ],
        'payment_information' => [
            'title' => 'معلومات الدفع'
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'order_number' => [
            'label' => 'رقم الطلب',
            'placeholder' => 'أدخل رقم الطلب',
        ],
        'user_id' => [
            'label' => 'العميل',
            'placeholder' => 'اختر العميل',
        ],
        'status' => [
            'label' => 'حالة الطلب',
            'options' => [
                'pending' => 'في الانتظار',
                'processing' => 'قيد المعالجة',
                'shipped' => 'تم الشحن',
                'delivered' => 'تم التسليم',
                'cancelled' => 'ملغي',
                'refunded' => 'مسترد',
            ],
        ],
        'payment_status' => [
            'label' => 'حالة الدفع',
            'options' => [
                'pending' => 'في الانتظار',
                'paid' => 'مدفوع',
                'failed' => 'فشل',
                'refunded' => 'مسترد',
            ],
        ],
        'payment_method' => [
            'label' => 'طريقة الدفع',
            'placeholder' => 'اختر طريقة الدفع',
        ],
        'subtotal' => [
            'label' => 'المجموع الفرعي',
            'placeholder' => 'أدخل المجموع الفرعي',
        ],
        'tax_amount' => [
            'label' => 'مبلغ الضريبة',
            'placeholder' => 'أدخل مبلغ الضريبة',
        ],
        'shipping_amount' => [
            'label' => 'مبلغ الشحن',
            'placeholder' => 'أدخل مبلغ الشحن',
        ],
        'discount_amount' => [
            'label' => 'مبلغ الخصم',
            'placeholder' => 'أدخل مبلغ الخصم',
        ],
        'total_amount' => [
            'label' => 'المبلغ الإجمالي',
            'placeholder' => 'أدخل المبلغ الإجمالي',
        ],
        'shipping_address' => [
            'label' => 'عنوان الشحن',
            'placeholder' => 'أدخل عنوان الشحن',
        ],
        'billing_address' => [
            'label' => 'عنوان الفوترة',
            'placeholder' => 'أدخل عنوان الفوترة',
        ],
        'notes' => [
            'label' => 'ملاحظات الطلب',
            'placeholder' => 'أدخل ملاحظات الطلب',
        ],
        'tracking_number' => [
            'label' => 'رقم التتبع',
            'placeholder' => 'أدخل رقم التتبع',
        ],
        'shipped_at' => [
            'label' => 'تاريخ الشحن',
            'placeholder' => ''
        ],
        'delivered_at' => [
            'label' => 'تاريخ التسليم',
            'placeholder' => ''
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
            'pending' => [
                'label' => 'تعيين كمعلق',
                'message' => 'تعيين الطلب كمعلق'
            ],
            'processing' => [
                'label' => 'معالجة',
                'message' => 'معالجة الطلب'
            ],
            'shipped' => [
                'label' => 'شحن',
                'message' => 'شحن الطلب'
            ],
            'delivered' => [
                'label' => 'تسليم',
                'message' => 'تسليم الطلب'
            ],
            'cancelled' => [
                'label' => 'إلغاء',
                'message' => 'إلغاء الطلب'
            ],
            'refunded' => [
                'label' => 'استرداد',
                'message' => 'استرداد الطلب'
            ],
        ]
    ],

    'relations' => [
        'items' => [
            'label' => 'عنصر الطلب',
            'plural_label' => 'عناصر الطلب',
            'fields' => [
                'product_id' => [
                    'label' => 'المنتج',
                    'placeholder' => 'اختر المنتج',
                ],
                'quantity' => [
                    'label' => 'الكمية',
                    'placeholder' => 'أدخل الكمية',
                ],
                'price' => [
                    'label' => 'السعر',
                    'placeholder' => 'أدخل السعر',
                ],
                'total' => [
                    'label' => 'المجموع',
                    'placeholder' => 'أدخل المجموع',
                ],
            ],
        ],
        'payments' => [
            'label' => 'دفعة',
            'plural_label' => 'الدفعات',
            'fields' => [
                'amount' => [
                    'label' => 'المبلغ',
                    'placeholder' => 'أدخل المبلغ',
                ],
                'method' => [
                    'label' => 'طريقة الدفع',
                    'placeholder' => 'اختر طريقة الدفع',
                ],
                'status' => [
                    'label' => 'الحالة',
                    'placeholder' => 'اختر الحالة',
                ],
                'transaction_id' => [
                    'label' => 'معرف المعاملة',
                    'placeholder' => 'أدخل معرف المعاملة',
                ],
            ],
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'تم إنشاء الطلب بنجاح',
            'updated' => 'تم تحديث الطلب بنجاح',
            'deleted' => 'تم حذف الطلب بنجاح',
            'not_found' => 'الطلب غير موجود',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مصرح لك بتنفيذ هذا الإجراء',
            'status_updated' => 'تم تحديث حالة الطلب بنجاح',
            'payment_processed' => 'تم معالجة الدفع بنجاح',
            'shipped' => 'تم شحن الطلب بنجاح',
            'delivered' => 'تم تسليم الطلب بنجاح',
            'cancelled' => 'تم إلغاء الطلب بنجاح',
            'cannot_cancel' => 'لا يمكن إلغاء الطلب في الحالة الحالية',
        ],
    ],
];
