<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Register.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'is_unique' => 'This email address already exists',
        'max_length' => 'The email address may not exceed 255 characters',
        'min_length' => 'The email address must be at least 3 characters long',
        'required' => 'You must enter an email address',
        'valid_email' => 'You must enter a valid email address'
    ],
    'password' => [
        'min_length' => 'The password must be at least 8 characters long',
        'required' => 'You must enter a password',
        'validPasswordLowercase' => 'The password must contain at least one lowercase letter',
        'validPasswordNumber' => 'The password must contain at least one number',
        'validPasswordSpecial' => 'The password must contain at least one of the following special characters:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'The password must contain at least one uppercase letter'
    ],
    'password_repeat' => [
        'matches' => 'The passwords do not match',
        'required' => 'You must re-enter the password'
    ],
    'username' => [
        'is_unique' => 'This username already exists',
        'max_length' => 'The username may not exceed 50 characters',
        'min_length' => 'The username must be at least 3 characters long',
        'required' => 'You must enter a username'
    ]
];
