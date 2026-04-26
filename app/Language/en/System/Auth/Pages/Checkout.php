<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     Checkout.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'card' => [
        'access' => [
            'info' => 'All %plan% features are now unlocked',
            'title' => 'Access'
        ],
        'email' => [
            'info' => 'Confirmation &amp; invoice have been sent to your inbox',
            'title' => 'Email'
        ],
        'order_summary' => [
            'duration' => 'Duration',
            'payment' => 'Payment Method',
            'plan' => 'Plan',
            'price' => 'Price',
            'security' => [
                'encrypted' => 'Encrypted',
                'secure' => 'Secure',
                'ssl' => 'SSL'
            ],
            'terms' => [
                'info' => 'By placing your order, you agree to our %terms% and %privacy%. You can cancel at any time before the end of the term. You will be redirected to our payment provider Stripe',
                'privacy_policy' => 'Privacy Policy',
                'terms_of_use' => 'Terms of Use'
            ],
            'total' => 'Total',
            'vat' => 'VAT (19%)'
        ],
        'subscription' => [
            'info' => 'Cancel anytime via your account settings',
            'title' => 'Subscription'
        ],
        'troubleshoot' => [
            'bank' => [
                'info' => 'Contact your bank - the payment may have been blocked',
                'title' => 'Bank'
            ],
            'card_data' => [
                'info' => 'Check card number, expiration date and CVV for correctness',
                'title' => 'Card Data'
            ],
            'coverage' => [
                'info' => 'Make sure you have sufficient funds in your account',
                'title' => 'Coverage'
            ]
        ]
    ],
    'error_hint' => 'Need help? Contact our %contact%.',
    'form' => [
        'btn' => [
            'dashboard' => 'Go to Dashboard',
            'order' => 'Order with payment',
            'processing' => 'Preparing...',
            'try_again' => 'Try again'
        ],
        'label' => [
            'address' => 'Address',
            'check_interval' => 'Check Interval',
            'city' => 'City',
            'country' => 'Country',
            'date' => 'Date',
            'error' => 'Reason',
            'error_code' => 'Error Code',
            'every_2_seconds' => 'Every 2 seconds',
            'firstname' => 'First Name',
            'interval' => 'Billing Period',
            'lastname' => 'Last Name',
            'next_payment' => 'Next Payment',
            'payment' => 'Payment Method',
            'plan' => 'Membership',
            'started' => 'Started',
            'transaction_id' => 'Transaction ID',
            'zip_code' => 'ZIP Code'
        ],
        'options' => [
            'interval' => [
                'month' => '1 Month',
                'months' => '12 Months',
                'monthly' => 'Monthly',
                'yearly' => 'Yearly'
            ],
            'payment' => [
                'abo' => 'Subscription',
                'one_time' => 'One-time payment'
            ]
        ],
        'placeholder' => [
            'address' => 'Enter address here',
            'city' => 'Enter city here',
            'country' => 'Select country here',
            'firstname' => 'Enter first name here',
            'interval' => 'Select billing period here',
            'lastname' => 'Enter last name here',
            'payment' => 'Select payment method here',
            'plan' => 'Select membership here',
            'zip_code' => 'Enter ZIP code here'
        ],
        'title' => [
            'billing_address' => 'Billing Address',
            'error_details' => 'Error Details',
            'membership' => 'Choose Membership',
            'order_summary' => 'Order Summary'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'cancel' => 'Your transaction could not be completed',
            'index' => 'Secure payment via encrypted connection',
            'pending' => 'Please wait a moment - we are checking your transaction',
            'success' => 'Your transaction has been completed successfully'
        ],
        'seo' => [
            'cancel' => 'Payment Failed',
            'index' => 'Process Payment',
            'database' => 'Database',
            'pending' => 'Payment Processing',
            'success' => 'Payment Successful'
        ]
    ],
    'payment_declined' => [
        'info' => 'The transaction could not be processed. Please check your payment details and try again.',
        'title' => 'Payment Declined'
    ],
    'payment_outstanding' => [
        'info' => 'Your payment is currently being processed by our payment provider. This may take a moment.',
        'title' => 'Payment Pending'
    ],
    'pending' => 'Pending',
    'pending_hint' => 'Please do not close this window. If you encounter any issues, contact our %contact%.',
    'processing' => 'Processing...',
    'security' => [
        'automatically' => 'Automatic',
        'automatically_info' => 'You will be automatically redirected once the payment is confirmed',
        'patience' => 'Patience',
        'patience_info' => 'Processing usually takes only a few seconds',
        'secure' => 'Secure',
        'secure_info' => 'Your payment data is transmitted encrypted',
    ],
    'status' => 'Status',
    'steps' => [
        'one' => 'Choose Plan',
        'three' => 'Confirmation',
        'two' => 'Payment'
    ],
    'success' => [
        'info' => 'A confirmation has been sent to your email.',
        'title' => 'Payment Confirmed'
    ],
    'support' => 'Support',
    'transaction_status' => 'Transaction Status'
];
