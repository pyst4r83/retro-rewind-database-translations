<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Setup/Pages
 * File:     Setup.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'env_file' => 'File ambiente',
    'env_status' => [
        'bad' => 'Il tuo file .env è incompleto o contiene valori non validi',
        'issue' => 'Problema',
        'issues_headline' => 'Per favore correggi le seguenti voci:',
        'key' => 'Chiave',
        'ok' => 'Il tuo file .env sembra a posto'
    ],
    'env_status_error' => [
        'empty' => 'Il valore è vuoto',
        'missing_or_commented' => 'Mancante o commentato',
        'must_be' => 'Deve essere: {0} (attuale: {1})'
    ],
    'error' => 'Errore',
    'form' => [
        'btn' => [
            'check' => 'Controlla di nuovo',
            'install' => 'Installa',
            'installing' => 'Installazione in corso...',
            'visit_website' => 'Visita il sito web'
        ]
    ],
    'install_now' => 'Ora puoi installare',
    'intro' => 'Questa pagina controlla la tua configurazione .env e può eseguire migrazioni e il seeder di installazione',
    'meta' => [
        'seo' => [
            'index' => 'Installazione'
        ]
    ],
    'progress' => [
        'msg' => [
            'already_installed' => 'Già installato',
            'env_not_ready' => 'L\'ambiente non è ancora pronto per l\'installazione',
            'install_done' => 'Installazione completata con successo',
            'install_failed' => 'Installazione fallita',
            'install_locked' => 'L\'installazione è già in corso. Attendi e aggiorna la pagina',
            'install_starting' => 'Avvio dell\'installazione...',
            'not_started' => 'Non ancora avviato',
            'running_migrations' => 'Esecuzione migrazioni...',
            'running_seeder' => 'Esecuzione seeder: {0}...',
            'writing_flag' => 'Scrittura flag di installazione...'
        ],
        'title' => 'Avanzamento'
    ]
];
