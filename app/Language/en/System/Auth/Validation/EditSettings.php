<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditSettings.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'twofa_code' => [
        'length' => 'The authentication code must be exactly 6 digits long.',
        'numeric' => 'The authentication code may only contain numbers.',
        'required' => 'Please enter the authentication code.'
    ],
    'twofa_enabled' => [
        'in_list' => 'Invalid option selected for two-factor authentication',
        'required' => 'Please select whether two-factor authentication should be enabled'
    ]
];
