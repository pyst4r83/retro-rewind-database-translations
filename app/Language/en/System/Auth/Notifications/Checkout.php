<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     Checkout.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'order' => 'The order could not be completed. Please fill in all fields correctly and try again',
        'webhook' => [
            '3d_secure_failed' => '3D Secure authentication failed.',
            'authentication_failure' => 'Authentication error. Please try again.',
            'authentication_required' => 'Authentication failed. Please try again.',
            'blocked' => 'The payment was blocked. Please contact your bank.',
            'card_declined' => 'The card was declined. Please use a different payment method.',
            'expired_card' => 'The card has expired. Please use a valid card.',
            'fraudulent' => 'The payment was declined for security reasons.',
            'incorrect_cvc' => 'The security code (CVC) is incorrect. Please check your input.',
            'incorrect_number' => 'The card number is invalid. Please check your input.',
            'insufficient_funds' => 'Insufficient funds on the card. Please use another card.',
            'invalid_expiry' => 'The expiry date is invalid. Please check your input.',
            'invoice_failed' => 'The invoice payment failed.',
            'payment_failed' => 'The payment failed. Please try again.',
            'processing_error' => 'An error occurred during processing. Please try again.',
            'unknown' => 'An unknown error occurred. Please contact support.'
        ]
    ]
];
