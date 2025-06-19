<?php

return [
    'title' => 'تقرير المشتريات',
    'description' => 'عرض وتحليل معاملات الشراء',

    'filters' => [
        'date_range' => [
            'label' => 'النطاق الزمني',
            'start_date' => [
                'label' => 'تاريخ البداية',
                'placeholder' => 'اختر تاريخ البداية',
            ],
            'end_date' => [
                'label' => 'تاريخ النهاية',
                'placeholder' => 'اختر تاريخ النهاية',
            ],
        ],
        'branch' => [
            'label' => 'الفرع',
            'placeholder' => 'اختر الفرع',
        ],
        'product' => [
            'label' => 'المنتج',
            'placeholder' => 'اختر المنتج',
        ],
        'supplier' => [
            'label' => 'المورد',
            'placeholder' => 'اختر المورد',
        ],
    ],

    'table' => [
        'columns' => [
            'invoice_number' => 'رقم الفاتورة',
            'date' => 'التاريخ',
            'supplier' => 'المورد',
            'branch' => 'الفرع',
            'total_amount' => 'المبلغ الإجمالي',
            'paid_amount' => 'المبلغ المدفوع',
            'remaining_amount' => 'المبلغ المتبقي',
            'status' => 'الحالة',
        ],
    ],

    'totals' => [
        'total_purchases' => 'إجمالي المشتريات',
        'total_paid' => 'إجمالي المدفوع',
        'total_remaining' => 'إجمالي المتبقي',
    ],

    'buttons' => [
        'generate' => 'إنشاء التقرير',
        'export' => 'تصدير التقرير',
        'print' => 'طباعة التقرير',
    ],

    'empty_message' => 'لم يتم العثور على سجلات شراء للمعايير المحددة.',
];
