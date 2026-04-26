<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditSettings.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'active' => 'ATIVO',
    'alerts' => [
        'info' => [
            'no_trusted_devices' => 'Nenhum dispositivo confiável disponível'
        ]
    ],
    'device' => 'Dispositivo(s)',
    'devices' => 'Dispositivos',
    'expiring_soon' => 'EXPIRA EM BREVE',
    'form' => [
        'btn' => [
            'cancel' => 'Cancelar',
            'confirm' => 'Confirmar autenticação de dois fatores',
            'revoke' => 'Revogar dispositivo',
            'revoke_device' => 'Revogar este dispositivo',
            'update' => 'Salvar configurações'
        ],
        'label' => [
            'created_at' => 'Criado em',
            'device' => 'Dispositivo',
            'expires_at' => 'Expira em',
            'ip_address' => 'Endereço IP',
            'qr_code' => 'Se você não puder escanear o código QR, use este URI:',
            'token_id' => 'ID do token',
            'twofa_code' => 'Código de autenticação de dois fatores',
            'twofa_enabled' => 'Autenticação de dois fatores ativada?',
            'twofa_secret' => 'Segredo da autenticação de dois fatores',
            'twofa_setup' => 'Configurar autenticação de dois fatores',
            'user_agent' => 'User Agent'
        ],
        'options' => [
            'twofa_enabled' => [
                'no' => 'Não',
                'yes' => 'Sim'
            ]
        ],
        'placeholder' => [
            'twofa_code' => 'Digite o código de autenticação de dois fatores aqui',
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Editar configurações',
            'database' => 'Banco de dados',
            'twofa_setup' => 'Configurar autenticação de dois fatores'
        ]
    ],
    'nav' => [
        'title' => 'Configurações'
    ],
    'this_device' => 'ESTE DISPOSITIVO',
    'trusted_devices' => 'Dispositivos confiáveis',
    'unknown_device' => 'Dispositivo desconhecido'
];
