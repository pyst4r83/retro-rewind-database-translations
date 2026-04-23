<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Users.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'country' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten'
    ],
    'email' => [
        'is_unique' => 'Diese E-Mail-Adresse existiert bereits',
        'max_length' => 'Die E-Mail-Adresse darf maximal 255 Zeichen lang sein',
        'min_length' => 'Die E-Mail-Adresse muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst eine E-Mail-Adresse eingeben',
        'valid_email' => 'Du musst eine gültige E-Mail-Adresse eingeben'
    ],
    'end_date' => [
        'required' => 'Du musst ein Datum für das Ende der Mitgliedschaft eingeben',
        'valid_date' => 'Das Datum für das Ende der Mitgliedschaft muss ein Datum im Format Y-m-d sein'
    ],
    'firstname' => [
        'max_length' => 'Der Vorname darf maximal 255 Zeichen lang sein',
        'min_length' => 'Der Vorname muss mindestens 3 Zeichen lang sein'
    ],
    'is_admin' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst auswählen, ob der Benutzer ein Admin ist'
    ],
    'is_superadmin' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst auswählen, ob der Benutzer ein Superadmin ist'
    ],
    'language' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten'
    ],
    'lastname' => [
        'max_length' => 'Der Nachname darf maximal 255 Zeichen lang sein',
        'min_length' => 'Der Nachname muss mindestens 3 Zeichen lang sein'
    ],
    'membership' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst eine Mitgliedschaft auswählen'
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
