<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditPassword.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'alerts' => [
        'info' => [
            'password' => 'Usa una password con almeno 8 caratteri, lettere maiuscole e minuscole, numeri e caratteri speciali per la massima sicurezza.<br>Elenco dei caratteri speciali: <small style="color: var(--neon-pink);">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'I campi contrassegnati con <strong class="body-color">*</strong> sono obbligatori'
        ]
    ],
    'form' => [
        'btn' => [
            'cancel' => 'Annulla',
            'update' => 'Cambia password'
        ],
        'label' => [
            'password' => 'Password attuale',
            'password_new' => 'Nuova password',
            'password_new_repeat' => 'Conferma nuova password'
        ],
        'placeholder' => [
            'password' => 'Inserisci password qui',
            'password_new' => 'Inserisci nuova password qui',
            'password_new_repeat' => 'Reinserisci nuova password qui'
        ],
        'title' => [
            'password' => 'Cambia password'
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Modifica password',
            'database' => 'Database'
        ]
    ],
    'nav' => [
        'title' => 'Password'
    ],
    'password_strength' => [
        'medium' => 'Media',
        'strength' => 'Forza',
        'strong' => 'Forte',
        'very_strong' => 'Molto forte',
        'weak' => 'Debole'
    ]
];
