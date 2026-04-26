<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     LanguageAudit.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'badge' => [
        'base' => 'Base',
        'extra_key' => 'Clé supplémentaire',
        'extra_keys' => 'Clés supplémentaires',
        'files' => 'Fichiers',
        'languages' => 'Langues',
        'missing_file' => 'Fichier manquant',
        'missing_files' => 'Fichiers manquants',
        'missing_key' => 'Clé manquante',
        'missing_keys' => 'Clés manquantes',
        'no_missing_keys' => 'Aucun fichier/clé manquant',
        'unused_keys' => 'Clés inutilisées',
        'with_issues' => 'avec problèmes'
    ],
    'codescan' => [
        'badge' => [
            'files_scanned' => 'Fichiers analysés :',
            'expr_found' => 'Appels à lang() :',
            'keys_resolved' => 'Clés résolues :',
            'missing_usages' => 'Utilisations manquantes :',
            'skipped' => 'Expressions ignorées :'
        ],
        'found_missing' => 'Les clés de langue suivantes sont utilisées dans le code mais manquent dans les fichiers de langue :',
        'ok' => 'Aucune clé de langue manquante trouvée dans le code.',
        'show_locations' => 'Afficher les emplacements'
    ],
    'meta' => [
        'breadcrumb' => [
            'index' => 'Comparaison des fichiers de langue'
        ],
        'seo' => [
            'backend' => 'Backend',
            'index' => 'Comparaison des fichiers de langue'
        ]
    ],
    'tabs' => [
        'code_scan' => 'Analyse du code',
        'file_issues' => 'Problèmes de fichiers',
        'unused_keys' => 'Clés inutilisées'
    ],
    'unused' => [
        'none' => 'Aucune clé inutilisée',
        'none_all' => 'Aucune clé inutilisée'
    ]
];
