<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditSettings.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'active' => 'ATTIVO',
    'alerts' => [
        'info' => [
            'no_trusted_devices' => 'Nessun dispositivo fidato disponibile'
        ]
    ],
    'device' => 'Dispositivo(i)',
    'devices' => 'Dispositivi',
    'expiring_soon' => 'SCADE PRESTO',
    'form' => [
        'btn' => [
            'cancel' => 'Annulla',
            'confirm' => 'Conferma autenticazione a due fattori',
            'revoke' => 'Revoca dispositivo',
            'revoke_device' => 'Revoca questo dispositivo',
            'update' => 'Salva impostazioni'
        ],
        'label' => [
            'created_at' => 'Creato il',
            'device' => 'Dispositivo',
            'expires_at' => 'Scade il',
            'ip_address' => 'Indirizzo IP',
            'qr_code' => 'Se non puoi scansionare il codice QR, usa questo URI:',
            'token_id' => 'ID token',
            'twofa_code' => 'Codice autenticazione a due fattori',
            'twofa_enabled' => 'Autenticazione a due fattori attivata?',
            'twofa_secret' => 'Segreto autenticazione a due fattori',
            'twofa_setup' => 'Configura autenticazione a due fattori',
            'user_agent' => 'User Agent'
        ],
        'options' => [
            'twofa_enabled' => [
                'no' => 'No',
                'yes' => 'Sì'
            ]
        ],
        'placeholder' => [
            'twofa_code' => 'Inserisci il codice di autenticazione a due fattori qui',
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Modifica impostazioni',
            'database' => 'Database',
            'twofa_setup' => 'Configura autenticazione a due fattori'
        ]
    ],
    'nav' => [
        'title' => 'Impostazioni'
    ],
    'this_device' => 'QUESTO DISPOSITIVO',
    'trusted_devices' => 'Dispositivi fidati',
    'unknown_device' => 'Dispositivo sconosciuto'
];
