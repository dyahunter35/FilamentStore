
<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'إدارة المنتجات',
        'label' => 'فئة المنتج',
        'plural_label' => 'فئات المنتجات',
        'model_label' => 'فئة المنتج',
    ],

    'bradcrumbs' => [
        'index' => 'فئات المنتجات',
        'list_project' => 'قائمة فئات المنتجات',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'المعلومات الأساسية',
        ],
        'media' => [
            'title' => 'الوسائط',
        ],
        'settings' => [
            'title' => 'الإعدادات',
        ],
        'seo' => [
            'title' => 'معلومات تحسين محركات البحث',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'name' => [
            'label' => 'اسم الفئة',
            'placeholder' => 'أدخل اسم الفئة',
        ],
        'slug' => [
            'label' => 'الرابط المختصر',
            'placeholder' => 'اسم مناسب للرابط',
        ],
        'parent_id' => [
            'label' => 'الفئة الأب',
            'placeholder' => 'اختر الفئة الأب',
        ],
        'description' => [
            'label' => 'الوصف',
            'placeholder' => 'أدخل وصف الفئة',
        ],
        'image' => [
            'label' => 'صورة الفئة',
            'placeholder' => 'رفع صورة الفئة',
        ],
        'icon' => [
            'label' => 'الأيقونة',
            'placeholder' => 'أدخل فئة الأيقونة أو الاسم',
            'helper' => 'يمكنك استخدام أسماء Heroicon أو فئات الأيقونات المخصصة',
        ],
        'sort_order' => [
            'label' => 'ترتيب الفرز',
            'placeholder' => 'أدخل رقم ترتيب الفرز',
        ],
        'is_active' => [
            'label' => 'حالة النشاط',
        ],
        'status' => [
            'label' => 'الحالة',
            'options' => [
                'active' => 'نشط',
                'inactive' => 'غير نشط',
            ],
        ],
        'meta_title' => [
            'label' => 'عنوان الميتا',
            'placeholder' => 'أدخل عنوان الميتا لتحسين محركات البحث',
        ],
        'meta_description' => [
            'label' => 'وصف الميتا',
            'placeholder' => 'أدخل وصف الميتا لتحسين محركات البحث',
        ],
        'products_count' => [
            'label' => 'المنتجات',
        ],
        'children_count' => [
            'label' => 'الفئات الفرعية',
        ],
        'created_at' => [
            'label' => 'تاريخ الإنشاء',
        ],
        'updated_at' => [
            'label' => 'تاريخ التحديث',
        ],
    ],

    // Filters
    'filters' => [
        'is_active' => [
            'all' => 'جميع الفئات',
            'active_only' => 'الفئات النشطة فقط',
            'inactive_only' => 'الفئات غير النشطة فقط',
        ],
        'parent_categories' => 'الفئات الأب فقط',
        'child_categories' => 'الفئات الفرعية فقط',
    ],

    // Actions
    'actions' => [
        'status' => [
            'active' => [
                'label' => 'تفعيل',
                'message' => 'تفعيل الفئة',
            ],
            'inactive' => [
                'label' => 'إلغاء التفعيل',
                'message' => 'إلغاء تفعيل الفئة',
            ],
        ],
    ],

    // Messages
    'messages' => [
        'created' => 'تم إنشاء الفئة بنجاح',
        'updated' => 'تم تحديث الفئة بنجاح',
        'deleted' => 'تم حذف الفئة بنجاح',
        'cannot_delete_has_children' => 'لا يمكن حذف فئة تحتوي على فئات فرعية',
        'cannot_delete_has_products' => 'لا يمكن حذف فئة تحتوي على منتجات مرتبطة',
    ],
];