<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditPassword.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'alerts' => [
        'info' => [
            'password' => 'Use uma senha com pelo menos 8 caracteres, letras maiúsculas e minúsculas, números e caracteres especiais para máxima segurança.<br>Lista de caracteres especiais: <small style="color: var(--neon-pink);">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Campos marcados com <strong class="body-color">*</strong> são obrigatórios'
        ]
    ],
    'form' => [
        'btn' => [
            'cancel' => 'Cancelar',
            'update' => 'Alterar senha'
        ],
        'label' => [
            'password' => 'Senha atual',
            'password_new' => 'Nova senha',
            'password_new_repeat' => 'Confirmar nova senha'
        ],
        'placeholder' => [
            'password' => 'Digite a senha aqui',
            'password_new' => 'Digite a nova senha aqui',
            'password_new_repeat' => 'Digite a nova senha novamente aqui'
        ],
        'title' => [
            'password' => 'Alterar senha'
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Editar senha',
            'database' => 'Banco de dados'
        ]
    ],
    'nav' => [
        'title' => 'Senha'
    ],
    'password_strength' => [
        'medium' => 'Média',
        'strength' => 'Força',
        'strong' => 'Forte',
        'very_strong' => 'Muito forte',
        'weak' => 'Fraca'
    ]
];
