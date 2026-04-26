<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Setup/Pages
 * File:     Setup.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'env_file' => 'Fichier d\'environnement',
    'env_status' => [
        'bad' => 'Votre fichier .env est incomplet ou contient des valeurs invalides',
        'issue' => 'Problème',
        'issues_headline' => 'Veuillez corriger les entrées suivantes :',
        'key' => 'Clé',
        'ok' => 'Votre fichier .env semble correct'
    ],
    'env_status_error' => [
        'empty' => 'La valeur est vide',
        'missing_or_commented' => 'Manquante ou commentée',
        'must_be' => 'Doit être : {0} (actuel : {1})'
    ],
    'error' => 'Erreur',
    'form' => [
        'btn' => [
            'check' => 'Vérifier à nouveau',
            'install' => 'Installer',
            'installing' => 'Installation...',
            'visit_website' => 'Visiter le site web'
        ]
    ],
    'install_now' => 'Vous pouvez maintenant installer',
    'intro' => 'Cette page vérifie votre configuration .env et peut exécuter les migrations ainsi que le programme d\'installation',
    'meta' => [
        'seo' => [
            'index' => 'Installation'
        ]
    ],
    'progress' => [
        'msg' => [
            'already_installed' => 'Déjà installé',
            'env_not_ready' => 'L\'environnement n\'est pas encore prêt pour l\'installation',
            'install_done' => 'Installation terminée avec succès',
            'install_failed' => 'L\'installation a échoué',
            'install_locked' => 'L\'installation est déjà en cours. Veuillez patienter et actualiser la page',
            'install_starting' => 'Démarrage de l\'installation...',
            'not_started' => 'Pas encore démarré',
            'running_migrations' => 'Exécution des migrations...',
            'running_seeder' => 'Exécution du seed : {0}...',
            'writing_flag' => 'Écriture du drapeau d\'installation...'
        ],
        'title' => 'Progression'
    ]
];
