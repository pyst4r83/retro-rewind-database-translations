<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditEmail.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'required' => 'You must enter an email address',
        'valid_email' => 'You must enter a valid email address'
    ],
    'email_new' => [
        'is_unique' => 'This email address already exists in the database',
        'max_length' => 'The email address may not exceed 255 characters',
        'required' => 'You must enter an email address',
        'valid_email' => 'You must enter a valid email address'
    ],
    'password' => [
        'required' => 'You must enter your password'
    ]
];
