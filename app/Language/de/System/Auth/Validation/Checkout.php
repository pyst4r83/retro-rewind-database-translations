<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Checkout.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'address' => [
        'max_length' => 'Der Adresse darf maximal 255 Zeichen lang sein',
        'min_length' => 'Der Adresse muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst eine Adresse eingeben'
    ],
    'city' => [
        'max_length' => 'Der Ort darf maximal 255 Zeichen lang sein',
        'min_length' => 'Der Ort muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Ort eingeben'
    ],
    'country' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst ein Land auswählen'
    ],
    'firstname' => [
        'max_length' => 'Der Vorname darf maximal 50 Zeichen lang sein',
        'min_length' => 'Der Vorname muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Vornamen eingeben'
    ],
    'interval' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst einen Abrechnungszeitraum auswählen'
    ],
    'lastname' => [
        'max_length' => 'Der Nachname darf maximal 50 Zeichen lang sein',
        'min_length' => 'Der Nachname muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Nachnamen eingeben'
    ],
    'payment' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst eine Zahlungsart auswählen'
    ],
    'plan' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst eine Mitgliedschaft auswählen'
    ],
    'zip_code' => [
        'max_length' => 'Die Postleitzahl darf maximal 50 Zeichen lang sein',
        'min_length' => 'Die Postleitzahl muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst eine Postleitzahl eingeben'
    ]
];
