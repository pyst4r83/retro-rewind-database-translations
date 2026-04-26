<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditSettings.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'active' => 'ACTIVO',
    'alerts' => [
        'info' => [
            'no_trusted_devices' => 'No hay dispositivos confiables disponibles'
        ]
    ],
    'device' => 'Dispositivo(s)',
    'devices' => 'Dispositivos',
    'expiring_soon' => 'CADUCA PRONTO',
    'form' => [
        'btn' => [
            'cancel' => 'Cancelar',
            'confirm' => 'Confirmar autenticación de dos factores',
            'revoke' => 'Revocar dispositivo',
            'revoke_device' => 'Revocar este dispositivo',
            'update' => 'Guardar configuración'
        ],
        'label' => [
            'created_at' => 'Creado el',
            'device' => 'Dispositivo',
            'expires_at' => 'Caduca el',
            'ip_address' => 'Dirección IP',
            'qr_code' => 'Si no puedes escanear el código QR, usa esta URI:',
            'token_id' => 'ID del token',
            'twofa_code' => 'Código de autenticación de dos factores',
            'twofa_enabled' => '¿Autenticación de dos factores activada?',
            'twofa_secret' => 'Secreto de autenticación de dos factores',
            'twofa_setup' => 'Configurar autenticación de dos factores',
            'user_agent' => 'Agente de usuario'
        ],
        'options' => [
            'twofa_enabled' => [
                'no' => 'No',
                'yes' => 'Sí'
            ]
        ],
        'placeholder' => [
            'twofa_code' => 'Ingresa el código de autenticación de dos factores aquí',
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Editar configuración',
            'database' => 'Base de datos',
            'twofa_setup' => 'Configurar autenticación de dos factores'
        ]
    ],
    'nav' => [
        'title' => 'Configuración'
    ],
    'this_device' => 'ESTE DISPOSITIVO',
    'trusted_devices' => 'Dispositivos confiables',
    'unknown_device' => 'Dispositivo desconocido'
];
