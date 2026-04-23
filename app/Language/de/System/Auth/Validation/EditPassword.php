<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditPassword.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'password' => [
        'required' => 'Du musst dein aktuelles Passwort eingeben'
    ],
    'password_new' => [
        'min_length' => 'Das Passwort muss mindestens 8 Zeichen lang sein',
        'required' => 'Du musst ein Passwort eingeben',
        'validPasswordLowercase' => 'Das Passwort muss mindestens einen Kleinbuchstaben enthalten',
        'validPasswordNumber' => 'Das Passwort muss mindestens eine Zahl enthalten',
        'validPasswordSpecial' => 'Das Passwort muss mindestens eines der folgenden Sonderzeichen enthalten:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'Das Passwort muss mindestens einen Großbuchstaben enthalten'
    ],
    'password_new_repeat' => [
        'matches' => 'Die Passwörter stimmen nicht überein',
        'required' => 'Du musst das Passwort erneut eingeben'
    ]
];
