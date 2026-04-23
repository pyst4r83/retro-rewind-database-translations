<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditUsername.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'username' => [
        'required' => 'Du musst deinen aktuellen Benutzernamen eingeben'
    ],
    'username_new' => [
        'is_unique' => 'Dieser Benutzername existiert bereits',
        'max_length' => 'Der Benutzername darf maximal 50 Zeichen lang sein',
        'min_length' => 'Der Benutzername muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Benutzernamen eingeben'
    ]
];
