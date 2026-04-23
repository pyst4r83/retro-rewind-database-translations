<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Register.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'is_unique' => 'Diese E-Mail-Adresse existiert bereits',
        'max_length' => 'Die E-Mail-Adresse darf maximal 255 Zeichen lang sein',
        'min_length' => 'Die E-Mail-Adresse muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst eine E-Mail-Adresse eingeben',
        'valid_email' => 'Du musst eine gültige E-Mail-Adresse eingeben'
    ],
    'password' => [
        'min_length' => 'Das Passwort muss mindestens 8 Zeichen lang sein',
        'required' => 'Du musst ein Passwort eingeben',
        'validPasswordLowercase' => 'Das Passwort muss mindestens einen Kleinbuchstaben enthalten',
        'validPasswordNumber' => 'Das Passwort muss mindestens eine Zahl enthalten',
        'validPasswordSpecial' => 'Das Passwort muss mindestens eines der folgenden Sonderzeichen enthalten:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'Das Passwort muss mindestens einen Großbuchstaben enthalten'
    ],
    'password_repeat' => [
        'matches' => 'Die Passwörter stimmen nicht überein',
        'required' => 'Du musst das Passwort erneut eingeben'
    ],
    'username' => [
        'is_unique' => 'Dieser Benutzername existiert bereits',
        'max_length' => 'Der Benutzername darf maximal 50 Zeichen lang sein',
        'min_length' => 'Der Benutzername muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Benutzernamen eingeben'
    ]
];
