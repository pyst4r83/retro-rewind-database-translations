<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditPassword.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'password' => [
        'required' => 'You must enter your current password'
    ],
    'password_new' => [
        'min_length' => 'The password must be at least 8 characters long',
        'required' => 'You must enter a password',
        'validPasswordLowercase' => 'The password must contain at least one lowercase letter',
        'validPasswordNumber' => 'The password must contain at least one number',
        'validPasswordSpecial' => 'The password must contain at least one of the following special characters:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'The password must contain at least one uppercase letter'
    ],
    'password_new_repeat' => [
        'matches' => 'The passwords do not match',
        'required' => 'You must re-enter the password'
    ]
];
