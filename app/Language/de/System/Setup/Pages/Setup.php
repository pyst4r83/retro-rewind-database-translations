<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Setup/Pages
 * File:     Setup.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'env_file' => 'Umgebungsdatei',
    'env_status' => [
        'bad' => 'Deine .env ist unvollständig oder enthält ungültige Werte',
        'issue' => 'Problem',
        'issues_headline' => 'Bitte behebe folgende Einträge:',
        'key' => 'Schlüssel',
        'ok' => 'Deine .env sieht gut aus'
    ],
    'env_status_error' => [
        'empty' => 'Wert ist leer',
        'missing_or_commented' => 'Fehlt oder ist auskommentiert',
        'must_be' => 'Muss sein: {0} (aktuell: {1})'
    ],
    'error' => 'Fehler',
    'form' => [
        'btn' => [
            'check' => 'Erneut prüfen',
            'install' => 'Installieren',
            'installing' => 'Installiere...',
            'visit_website' => 'Webseite besuchen'
        ]
    ],
    'install_now' => 'Du kannst jetzt installieren',
    'intro' => 'Diese Seite überprüft deine .env-Konfiguration und kann Migrationen sowie den Installer-Seeder ausführen',
    'meta' => [
        'seo' => [
            'index' => 'Einrichtung'
        ]
    ],
    'progress' => [
        'msg' => [
            'already_installed' => 'Bereits installiert',
            'env_not_ready' => 'Die Umgebung ist noch nicht bereit für die Installation',
            'install_done' => 'Installation erfolgreich abgeschlossen',
            'install_failed' => 'Installation fehlgeschlagen',
            'install_locked' => 'Installation läuft bereits. Bitte warte und aktualisiere die Seite',
            'install_starting' => 'Installation wird gestartet...',
            'not_started' => 'Noch nicht gestartet',
            'running_migrations' => 'Migrationen werden ausgeführt...',
            'running_seeder' => 'Seeder wird ausgeführt: {0}...',
            'writing_flag' => 'Installations-Flag wird geschrieben...'
        ],
        'title' => 'Fortschritt'
    ]
];
