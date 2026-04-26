<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Setup/Pages
 * File:     Setup.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'env_file' => 'Archivo de entorno',
    'env_status' => [
        'bad' => 'Tu archivo .env está incompleto o contiene valores inválidos',
        'issue' => 'Problema',
        'issues_headline' => 'Por favor, corrige las siguientes entradas:',
        'key' => 'Clave',
        'ok' => 'Tu archivo .env se ve bien'
    ],
    'env_status_error' => [
        'empty' => 'El valor está vacío',
        'missing_or_commented' => 'Falta o está comentado',
        'must_be' => 'Debe ser: {0} (actual: {1})'
    ],
    'error' => 'Error',
    'form' => [
        'btn' => [
            'check' => 'Verificar de nuevo',
            'install' => 'Instalar',
            'installing' => 'Instalando...',
            'visit_website' => 'Visitar sitio web'
        ]
    ],
    'install_now' => 'Ya puedes instalar',
    'intro' => 'Esta página verifica tu configuración .env y puede ejecutar migraciones y el sembrador de instalación',
    'meta' => [
        'seo' => [
            'index' => 'Configuración'
        ]
    ],
    'progress' => [
        'msg' => [
            'already_installed' => 'Ya instalado',
            'env_not_ready' => 'El entorno aún no está listo para la instalación',
            'install_done' => 'Instalación completada exitosamente',
            'install_failed' => 'Instalación fallida',
            'install_locked' => 'La instalación ya está en curso. Por favor, espera y actualiza la página',
            'install_starting' => 'Iniciando instalación...',
            'not_started' => 'Aún no iniciado',
            'running_migrations' => 'Ejecutando migraciones...',
            'running_seeder' => 'Ejecutando sembrador: {0}...',
            'writing_flag' => 'Escribiendo bandera de instalación...'
        ],
        'title' => 'Progreso'
    ]
];
