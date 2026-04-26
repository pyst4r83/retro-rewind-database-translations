<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     TwoFaRecoverVerify.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'invalid_code' => 'The entered authentication code is invalid',
        'recaptcha' => 'Invalid captcha. Please try again',
        'session' => 'Your recovery session is no longer valid. Please request a new recovery link',
        'too_many' => 'Too many attempts. Please wait a moment and try again',
        'verify' => 'Please check your input and try again'
    ],
    'info' => [
        'cancelled' => 'Two-factor authentication has been cancelled. Please log in again'
    ]
];
