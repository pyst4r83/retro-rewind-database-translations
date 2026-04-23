<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditPassword.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'alerts' => [
        'info' => [
            'password' => 'Verwende ein Passwort mit mindestens 8 Zeichen, Groß- und Kleinbuchstaben, Zahlen und Sonderzeichen für maximale Sicherheit.<br>Liste der Sonderzeichen: <small style="color: var(--neon-pink);">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Felder mit <strong class="body-color">*</strong> müssen ausgefüllt werden'
        ]
    ],
    'form' => [
        'btn' => [
            'cancel' => 'Abbrechen',
            'update' => 'Passwort ändern'
        ],
        'label' => [
            'password' => 'Aktuelles Passwort',
            'password_new' => 'Neues Passwort',
            'password_new_repeat' => 'Neues Passwort bestätigen'
        ],
        'placeholder' => [
            'password' => 'Passwort hier eingeben',
            'password_new' => 'Neues Passwort hier eingeben',
            'password_new_repeat' => 'Neues Passwort hier erneut eingeben'
        ],
        'title' => [
            'password' => 'Passwort ändern'
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Passwort bearbeiten',
            'database' => 'Datenbank'
        ]
    ],
    'nav' => [
        'title' => 'Passwort'
    ],
    'password_strength' => [
        'medium' => 'Mittel',
        'strength' => 'Stärke',
        'strong' => 'Stark',
        'very_strong' => 'Sehr Stark',
        'weak' => 'Schwach'
    ]
];
