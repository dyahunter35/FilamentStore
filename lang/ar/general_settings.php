<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة النظام',
        'label' => 'إعداد',
        'plural_label' => 'الإعدادات',
    ],

    // Section headers
    'sections' => [
        'general' => [
            'title' => 'الإعدادات العامة',
        ],
        'email' => [
            'title' => 'إعدادات البريد الإلكتروني'
        ],
        'social' => [
            'title' => 'وسائل التواصل الاجتماعي'
        ],
        'seo' => [
            'title' => 'إعدادات تحسين محركات البحث'
        ],
        'other' => [
            'title' => 'أخرى',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'site_name' => [
            'label' => 'اسم الموقع',
            'placeholder' => 'أدخل اسم الموقع',
        ],
        'site_description' => [
            'label' => 'وصف الموقع',
            'placeholder' => 'أدخل وصف الموقع',
        ],
        'site_logo' => [
            'label' => 'شعار الموقع',
            'placeholder' => 'رفع شعار الموقع',
        ],
        'site_favicon' => [
            'label' => 'أيقونة الموقع',
            'placeholder' => 'رفع أيقونة الموقع',
        ],
        'contact_email' => [
            'label' => 'بريد التواصل',
            'placeholder' => 'أدخل بريد التواصل',
        ],
        'contact_phone' => [
            'label' => 'هاتف التواصل',
            'placeholder' => 'أدخل هاتف التواصل',
        ],
        'address' => [
            'label' => 'العنوان',
            'placeholder' => 'أدخل العنوان',
        ],
        'facebook_url' => [
            'label' => 'رابط فيسبوك',
            'placeholder' => 'أدخل رابط فيسبوك',
        ],
        'twitter_url' => [
            'label' => 'رابط تويتر',
            'placeholder' => 'أدخل رابط تويتر',
        ],
        'instagram_url' => [
            'label' => 'رابط إنستغرام',
            'placeholder' => 'أدخل رابط إنستغرام',
        ],
        'meta_title' => [
            'label' => 'عنوان الميتا',
            'placeholder' => 'أدخل عنوان الميتا',
        ],
        'meta_description' => [
            'label' => 'وصف الميتا',
            'placeholder' => 'أدخل وصف الميتا',
        ],
        'meta_keywords' => [
            'label' => 'كلمات الميتا المفتاحية',
            'placeholder' => 'أدخل كلمات الميتا المفتاحية',
        ],
        'maintenance_mode' => [
            'label' => 'وضع الصيانة',
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

    'api' => [
        'message' => [
            'updated' => 'تم تحديث الإعدادات بنجاح',
            'validation_error' => 'خطأ في التحقق من البيانات',
            'unauthorized' => 'غير مصرح لك بتنفيذ هذا الإجراء',
            'cache_cleared' => 'تم مسح ذاكرة التخزين المؤقت للإعدادات بنجاح',
        ],
    ],
];
