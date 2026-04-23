<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditEmail.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'required' => 'Du musst eine E-Mail-Adresse eingeben',
        'valid_email' => 'Du musst eine gültige E-Mail-Adresse eingeben'
    ],
    'email_new' => [
        'is_unique' => 'Diese E-Mail-Adresse existiert bereits in der Datenbank',
        'max_length' => 'Die E-Mail-Adresse darf maximal 255 Zeichen lang sein',
        'required' => 'Du musst eine E-Mail-Adresse eingeben',
        'valid_email' => 'Du musst eine gültige E-Mail-Adresse eingeben'
    ],
    'password' => [
        'required' => 'Du musst dein Passwort eingeben'
    ]
];
