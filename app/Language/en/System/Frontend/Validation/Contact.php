<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     Contact.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'max_length' => 'The email address may not exceed 255 characters',
        'min_length' => 'The email address must be at least 3 characters long',
        'required' => 'You must enter an email address'
    ],
    'message' => [
        'min_length' => 'The message must be at least 3 characters long',
        'required' => 'You must enter a message'
    ],
    'subject' => [
        'max_length' => 'The subject may not exceed 255 characters',
        'min_length' => 'The subject must be at least 3 characters long',
        'required' => 'You must enter a subject'
    ],
    'username' => [
        'max_length' => 'The username may not exceed 255 characters',
        'min_length' => 'The username must be at least 3 characters long',
        'required' => 'You must enter a username'
    ]
];
