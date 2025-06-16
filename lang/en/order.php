<?php

return [
    // Navigation Labels
    'navigation' => [
        'group' => 'Order Management',
        'label' => 'Order',
        'plural_label' => 'Orders',
    ],

    // Section headers
    'sections' => [
        'base_information' => [
            'title' => 'Order Information',
        ],
        'customer_information' => [
            'title' => 'Customer Information'
        ],
        'shipping_information' => [
            'title' => 'Shipping Information'
        ],
        'payment_information' => [
            'title' => 'Payment Information'
        ],
        'other' => [
            'title' => 'Other',
        ],
    ],

    // Form Field Labels
    'fields' => [
        'order_number' => [
            'label' => 'Order Number',
            'placeholder' => 'Enter order number',
        ],
        'user_id' => [
            'label' => 'Customer',
            'placeholder' => 'Select customer',
        ],
        'status' => [
            'label' => 'Order Status',
            'options' => [
                'pending' => 'Pending',
                'processing' => 'Processing',
                'shipped' => 'Shipped',
                'delivered' => 'Delivered',
                'cancelled' => 'Cancelled',
                'refunded' => 'Refunded',
            ],
        ],
        'payment_status' => [
            'label' => 'Payment Status',
            'options' => [
                'pending' => 'Pending',
                'paid' => 'Paid',
                'failed' => 'Failed',
                'refunded' => 'Refunded',
            ],
        ],
        'payment_method' => [
            'label' => 'Payment Method',
            'placeholder' => 'Select payment method',
        ],
        'subtotal' => [
            'label' => 'Subtotal',
            'placeholder' => 'Enter subtotal',
        ],
        'tax_amount' => [
            'label' => 'Tax Amount',
            'placeholder' => 'Enter tax amount',
        ],
        'shipping_amount' => [
            'label' => 'Shipping Amount',
            'placeholder' => 'Enter shipping amount',
        ],
        'discount_amount' => [
            'label' => 'Discount Amount',
            'placeholder' => 'Enter discount amount',
        ],
        'total_amount' => [
            'label' => 'Total Amount',
            'placeholder' => 'Enter total amount',
        ],
        'shipping_address' => [
            'label' => 'Shipping Address',
            'placeholder' => 'Enter shipping address',
        ],
        'billing_address' => [
            'label' => 'Billing Address',
            'placeholder' => 'Enter billing address',
        ],
        'notes' => [
            'label' => 'Order Notes',
            'placeholder' => 'Enter order notes',
        ],
        'tracking_number' => [
            'label' => 'Tracking Number',
            'placeholder' => 'Enter tracking number',
        ],
        'shipped_at' => [
            'label' => 'Shipped At',
            'placeholder' => ''
        ],
        'delivered_at' => [
            'label' => 'Delivered At',
            'placeholder' => ''
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
            'pending' => [
                'label' => 'Set as Pending',
                'message' => 'Set Order as Pending'
            ],
            'processing' => [
                'label' => 'Process',
                'message' => 'Process Order'
            ],
            'shipped' => [
                'label' => 'Ship',
                'message' => 'Ship Order'
            ],
            'delivered' => [
                'label' => 'Mark as Delivered',
                'message' => 'Mark Order as Delivered'
            ],
            'cancelled' => [
                'label' => 'Cancel',
                'message' => 'Cancel Order'
            ],
            'refunded' => [
                'label' => 'Refund',
                'message' => 'Refund Order'
            ],
        ]
    ],

    'relations' => [
        'items' => [
            'label' => 'Order Item',
            'plural_label' => 'Order Items',
            'fields' => [
                'product_id' => [
                    'label' => 'Product',
                    'placeholder' => 'Select product',
                ],
                'quantity' => [
                    'label' => 'Quantity',
                    'placeholder' => 'Enter quantity',
                ],
                'price' => [
                    'label' => 'Price',
                    'placeholder' => 'Enter price',
                ],
                'total' => [
                    'label' => 'Total',
                    'placeholder' => 'Enter total',
                ],
            ],
        ],
        'payments' => [
            'label' => 'Payment',
            'plural_label' => 'Payments',
            'fields' => [
                'amount' => [
                    'label' => 'Amount',
                    'placeholder' => 'Enter amount',
                ],
                'method' => [
                    'label' => 'Payment Method',
                    'placeholder' => 'Select payment method',
                ],
                'status' => [
                    'label' => 'Status',
                    'placeholder' => 'Select status',
                ],
                'transaction_id' => [
                    'label' => 'Transaction ID',
                    'placeholder' => 'Enter transaction ID',
                ],
            ],
        ],
    ],

    'api' => [
        'message' => [
            'created' => 'Order created successfully',
            'updated' => 'Order updated successfully',
            'deleted' => 'Order deleted successfully',
            'not_found' => 'Order not found',
            'validation_error' => 'Data validation error',
            'unauthorized' => 'You are not authorized to perform this action',
            'status_updated' => 'Order status updated successfully',
            'payment_processed' => 'Payment processed successfully',
            'shipped' => 'Order shipped successfully',
            'delivered' => 'Order delivered successfully',
            'cancelled' => 'Order cancelled successfully',
            'cannot_cancel' => 'Cannot cancel order in current status',
        ],
    ],
];
