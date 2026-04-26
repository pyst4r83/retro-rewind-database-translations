<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditSettings.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'active' => 'ACTIF',
    'alerts' => [
        'info' => [
            'no_trusted_devices' => 'Aucun appareil de confiance disponible'
        ]
    ],
    'device' => 'Appareil(s)',
    'devices' => 'Appareils',
    'expiring_soon' => 'EXPIRE BIENTÔT',
    'form' => [
        'btn' => [
            'cancel' => 'Annuler',
            'confirm' => 'Confirmer l\'authentification à deux facteurs',
            'revoke' => 'Révoquer l\'appareil',
            'revoke_device' => 'Révoquer cet appareil',
            'update' => 'Enregistrer les paramètres'
        ],
        'label' => [
            'created_at' => 'Créé le',
            'device' => 'Appareil',
            'expires_at' => 'Expire le',
            'ip_address' => 'Adresse IP',
            'qr_code' => 'Si vous ne pouvez pas scanner le code QR, utilisez cet URI :',
            'token_id' => 'ID du jeton',
            'twofa_code' => 'Code d\'authentification à deux facteurs',
            'twofa_enabled' => 'Authentification à deux facteurs activée ?',
            'twofa_secret' => 'Secret d\'authentification à deux facteurs',
            'twofa_setup' => 'Configurer l\'authentification à deux facteurs',
            'user_agent' => 'User Agent'
        ],
        'options' => [
            'twofa_enabled' => [
                'no' => 'Non',
                'yes' => 'Oui'
            ]
        ],
        'placeholder' => [
            'twofa_code' => 'Entrez le code d\'authentification à deux facteurs ici',
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Modifier les paramètres',
            'database' => 'Base de données',
            'twofa_setup' => 'Configurer l\'authentification à deux facteurs'
        ]
    ],
    'nav' => [
        'title' => 'Paramètres'
    ],
    'this_device' => 'CET APPAREIL',
    'trusted_devices' => 'Appareils de confiance',
    'unknown_device' => 'Appareil inconnu'
];
