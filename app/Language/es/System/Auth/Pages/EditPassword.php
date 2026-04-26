<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditPassword.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'alerts' => [
        'info' => [
            'password' => 'Usa una contraseña con al menos 8 caracteres, mayúsculas, minúsculas, números y caracteres especiales para máxima seguridad.<br>Lista de caracteres especiales: <small style="color: var(--neon-pink);">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Los campos marcados con <strong class="body-color">*</strong> son obligatorios'
        ]
    ],
    'form' => [
        'btn' => [
            'cancel' => 'Cancelar',
            'update' => 'Cambiar contraseña'
        ],
        'label' => [
            'password' => 'Contraseña actual',
            'password_new' => 'Nueva contraseña',
            'password_new_repeat' => 'Confirmar nueva contraseña'
        ],
        'placeholder' => [
            'password' => 'Ingresa contraseña aquí',
            'password_new' => 'Ingresa nueva contraseña aquí',
            'password_new_repeat' => 'Vuelve a ingresar nueva contraseña aquí'
        ],
        'title' => [
            'password' => 'Cambiar contraseña'
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Editar contraseña',
            'database' => 'Base de datos'
        ]
    ],
    'nav' => [
        'title' => 'Contraseña'
    ],
    'password_strength' => [
        'medium' => 'Media',
        'strength' => 'Fortaleza',
        'strong' => 'Fuerte',
        'very_strong' => 'Muy fuerte',
        'weak' => 'Débil'
    ]
];
