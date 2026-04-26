<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditUsername.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'username' => [
        'required' => 'You must enter your current username'
    ],
    'username_new' => [
        'is_unique' => 'This username already exists',
        'max_length' => 'The username may not exceed 50 characters',
        'min_length' => 'The username must be at least 3 characters long',
        'required' => 'You must enter a username'
    ]
];
