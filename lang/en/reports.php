<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Reports',
        'label' => 'Advertising',
        'plural_label' => 'Advertisings',

    ],
    'navigations'=>[
        'attendence' => [
            'label' => 'Attendence Report',
            'plural_label' => 'Attendence Reports',
        ],
        'sales' => [
            'label' => 'Sales Report',
            'plural_label' => 'Sales Reports',
        ],
        'purchases' => [
            'label' => 'Purchases Report',
            'plural_label' => 'Purchases Reports',
        ],
        'inventory' => [
            'label' => 'Inventory Report',
            'plural_label' => 'Inventory Reports',
        ],
    ],
    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Base Information',
        ],

        'location_information' => [
            'title' => 'Location Information'
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],
    // Form Field Labels
    'fields' => [

        'title' => [
            'label' => 'Title',
            'placeholder' => 'Enter the title',
        ],
        'user_id' => [
            'label' => 'User',
            'placeholder' => 'Select a user',
        ],

        'purchaser' => [
            'label' => 'Purchaser',
            'placeholder' => '',
        ],


        'category_id' => [
            'label' => 'Category',
            'placeholder' => 'Select a category',
        ],
        'sub_category_id' => [
            'label' => 'Subcategory',
            'placeholder' => 'Select a subcategory',
        ],
        'item_condition' => [
            'label' => 'Item Condition',
            'placeholder' => 'Select the item condition',
            'options' => [
                'very_bad' => 'Very Bad',
                'bad' => 'Bad',
                'ok' => 'OK',
                'good' => 'Good',
                'very_good' => 'Very Good',
            ],
        ],
        'price' => [
            'label' => 'Price',
            'placeholder' => 'Enter the price',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter the description',
        ],
        'address_id' => [
            'label' => 'Address',
            'placeholder' => 'Select an address',
        ],
        'city_id' => [
            'label' => 'City',
            'placeholder' => 'Select a city',
        ],
        'neighborhood_id' => [
            'label' => 'Neighborhood',
            'placeholder' => 'Select a neighborhood',
        ],
        'region_id' => [
            'label' => 'Region',
            'placeholder' => 'Select a region',
        ],
        'ad_status' => [
            'label' => 'Status',
        ],
        'address' => [
            'label' => 'Address',
        ],
        'media' => [
            'label' => 'Media',
            'placeholder' => 'Upload media files',
        ],
        'delivery_option' => [
            'label' => 'Delivery Option',
            'placeholder' => '',
        ],
        'created_at' => [
            'label' => 'Created At',
            'placeholder' => ''
        ],
        'updated_at' => [
            'label' => 'Updated At',
            'placeholder' => ''
        ],
    ],

    'actions' => [
        'status' => [
            'rejected' => [
                'label' => 'Reject',
                'message' => 'Reject Advertising'
            ],
            'archived' => [
                'label' => 'Archived',
                'message' => 'Archive Advertising'
            ],
            'published' => [
                'label' => 'Published',
                'message' => 'Publish Advertising'
            ],
            'under_review' => [
                'label' => 'Under Review',
                'message' => 'Set As Under Review'
            ],
            'solded' => [
                'label' => 'Solded',
                'message' => ''
            ],
        ]
    ],

    'relations' => [
        'conversations' => [
            'label' => 'Conversation',
            'plural_label' => 'Conversations',
            'placeholder' => 'Select a conversation',
            'fields' => [
                'sender' => [
                    'label' => 'Sender',
                    'placeholder' => 'Select a sender',
                ],
                'receiver' => [
                    'label' => 'Receiver',
                    'placeholder' => 'Select a receiver',
                ],
                'last_message' => [
                    'label' => 'Last Message',
                    'placeholder' => 'Enter the last message',
                ],
                'last_message_time' => [
                    'label' => 'Last Message Time',
                    'placeholder' => '',
                ],
            ],
            'actions' => [
                'view' => [
                    'label' => 'View Conversation',
                    'placeholder' => '',
                ],
            ],

        ],
        'offers' => [
            'label' => 'Offer',
            'plural_label' => 'Offers',
            'fields' => [
                'delivery_uuid' => [
                    'label' => 'Delivery UUID',
                    'placeholder' => 'Enter the delivery UUID',
                ],
                'delivery_user' => [
                    'label' => 'Delivery User',
                    'placeholder' => 'Select a delivery user',
                ],
                'requester_user' => [
                    'label' => 'Requester User',
                    'placeholder' => 'Select a requester user',
                ],
                'price' => [
                    'label' => 'Price',
                    'placeholder' => 'Enter the price',
                ],
                'user_id' => [
                    'label' => 'User',
                    'placeholder' => 'Select a user',
                ],
                'status' => [
                    'label' => 'Delivery Status',
                    'placeholder' => '',
                ],
                'created_at' => [
                    'label' => 'Created At',
                    'placeholder' => '',
                ],
            ],
            'actions' => [
                'view' => [
                    'label' => 'View Delivery Details',
                    'placeholder' => '',
                ],
            ],
        ],
        'invoices' => [
            'label' => 'Invoice',
            'plural_label' => 'Invoices',
            'fields' => [
                'invoice_date' => [
                    'label' => 'Invoice Date',
                    'placeholder' => 'Enter the invoice date',
                ],
                'invoice_number' => [
                    'label' => 'Invoice Number',
                    'placeholder' => 'Enter the invoice number',
                ],
                'type' => [
                    'label' => 'Invoice Type',
                ],
                'tax' => [
                    'label' => 'Tax',
                ],
                'status' => [
                    'label' => 'Status',
                    'placeholder' => '',
                ],
                'total' => [
                    'label' => 'Total',
                    'placeholder' => '',
                ],
                'created_at' => [
                    'label' => 'Created At',
                    'placeholder' => '',
                ],
            ],
        ],
    ],


    'api' => [
        'message' => [
            'created' => 'Advertising created successfully',
            'updated' => 'Advertising updated successfully',
            'can_not_updated' => 'You cannot update as the allowed time for editing has passed',
            'deleted' => 'Advertising deleted successfully',
            'can_not_deleted' => 'You cannot delete the advertising',
            'not_found' => 'Advertising not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'available' => 'The product is available',
            'not_available' => 'The product is not available',

            'confirmed' => 'Purchase confirmed successfully',
            'can_not_confirmed' => 'The purchase cannot be confirmed',

            'already_confirmed' => 'The purchase has already been confirmed',

            'can_not_update_address' => 'The buyer\'s address cannot be updated',
            'address_updated' => 'The buyer\'s address has been updated successfully',

            'self_purchase' => 'You cannot purchase your own product',

            'account_not_active' => 'Your account is not activated',
            'insufficient_balance' => 'Your balance is insufficient',

            'delivery_request_created' => 'Delivery request created successfully',
            'can_not_create_delivery_order' => 'Sorry This Ad Not Valid To Create New Delivery Order',

            'already_subscribed' => 'This Ad Already Has Valid Subscription Start From ( :from ) and will End ( :to )',
            'subscribed' => 'You have successfully subscribed Another Month to this ad',

            'notification' => [
                'confirm_user' => 'welcome :purchaser , :sailer has confirmed the purchase of the product :productName',
                'confirm_admin' => 'The admin has confirmed the purchase of the product :productName',
            ],

        ],
    ],
];
