<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Users.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'Das Land mit der ID %country_id% konnte nicht gefunden werden'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Keine Benutzer verfügbar. Bitte füge zuerst einen Benutzer hinzu',
            'password' => 'Das Passwort muss<br>- mindestens 8 Zeichen lang sein<br>- einen Kleinbuchstaben enthalten<br>- einen Großbuchstaben enthalten<br>- eine Zahl enthalten<br>- eines der folgenden Sonderzeichen enthalten: <small class="fw-bold text-danger">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Felder mit <strong class="body-color">*</strong> müssen ausgefüllt werden'
        ]
    ],
    'form' => [
        'btn' => [
            'activate' => 'Aktivieren',
            'add' => 'Hinzufügen',
            'cancel' => 'Abbrechen',
            'deactivate' => 'Deaktivieren',
            'delete' => 'Löschen',
            'edit' => 'Bearbeiten',
            'membership' => 'Mitgliedschaft',
            'new' => 'Benutzer hinzufügen',
            'save' => 'Benutzer speichern',
            'update' => 'Benutzer aktualisieren',
            'update_membership' => 'Benutzer Mitgliedschaft aktualisieren'
        ],
        'label' => [
            'country' => 'Land',
            'email' => 'E-Mail-Adresse',
            'end_date' => 'Datum Ende',
            'firstname' => 'Vorname',
            'is_admin' => 'Admin',
            'is_superadmin' => 'Superadmin',
            'language' => 'Sprache',
            'lastname' => 'Nachname',
            'membership' => 'Mitgliedschaft',
            'password' => 'Passwort',
            'password_repeat' => 'Passwort wiederholen',
            'username' => 'Benutzername'
        ],
        'options' => [
            'no' => 'Nein',
            'yes' => 'Ja'
        ],
        'placeholder' => [
            'country' => 'Land hier auswählen',
            'email' => 'E-Mail-Adresse hier eingeben',
            'firstname' => 'Vornamen hier eingeben',
            'language' => 'Sprache hier auswählen',
            'lastname' => 'Nachnamen hier eingeben',
            'password' => 'Passwort hier eingeben',
            'password_repeat' => 'Passwort hier erneut eingeben',
            'username' => 'Benutzernamen hier eingeben'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Benutzer hinzufügen',
            'edit' => 'Benutzer %user% bearbeiten',
            'edit_membership' => 'Benutzer %user% Mitgliedschaft bearbeiten',
            'index' => 'Benutzer'
        ],
        'seo' => [
            'add' => 'Benutzer hinzufügen',
            'backend' => 'Backend',
            'edit' => 'Benutzer bearbeiten',
            'edit_membership' => 'Benutzer Mitgliedschaft bearbeiten',
            'index' => 'Benutzer'
        ]
    ],
    'modal' => [
        'activate' => [
            'body' => [
                'really_activate' => 'Benutzer <code>%user%</code> wirklich aktivieren?'
            ],
            'btn' => [
                'activate' => 'Benutzer aktivieren',
                'close' => 'Schließen'
            ],
            'header' => [
                'title' => 'Benutzer aktivieren'
            ]
        ],
        'deactivate' => [
            'body' => [
                'really_deactivate' => 'Benutzer <code>%user%</code> wirklich deaktivieren?'
            ],
            'btn' => [
                'close' => 'Schließen',
                'deactivate' => 'Benutzer deaktivieren'
            ],
            'header' => [
                'title' => 'Benutzer deaktivieren'
            ]
        ],
        'delete' => [
            'body' => [
                'really_delete' => 'Benutzer <code>%user%</code> wirklich löschen?'
            ],
            'btn' => [
                'close' => 'Schließen',
                'delete' => 'Benutzer löschen'
            ],
            'header' => [
                'title' => 'Benutzer löschen'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'active' => 'AKTIV',
            'admin' => 'ADMIN',
            'inactive' => 'INAKTIV',
            'superadmin' => 'SUPERADMIN'
        ],
        'thead' => [
            'actions' => 'Aktionen',
            'username' => 'Benutzername'
        ]
    ]
];
