<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditPassword.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'alerts' => [
        'info' => [
            'password' => 'Use a password with at least 8 characters, uppercase and lowercase letters, numbers and special characters for maximum security.<br>List of special characters: <small style="color: var(--neon-pink);">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Fields marked with <strong class="body-color">*</strong> are required'
        ]
    ],
    'form' => [
        'btn' => [
            'cancel' => 'Cancel',
            'update' => 'Change Password'
        ],
        'label' => [
            'password' => 'Current Password',
            'password_new' => 'New Password',
            'password_new_repeat' => 'Confirm New Password'
        ],
        'placeholder' => [
            'password' => 'Enter password here',
            'password_new' => 'Enter new password here',
            'password_new_repeat' => 'Re-enter new password here'
        ],
        'title' => [
            'password' => 'Change Password'
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Edit Password',
            'database' => 'Database'
        ]
    ],
    'nav' => [
        'title' => 'Password'
    ],
    'password_strength' => [
        'medium' => 'Medium',
        'strength' => 'Strength',
        'strong' => 'Strong',
        'very_strong' => 'Very Strong',
        'weak' => 'Weak'
    ]
];
