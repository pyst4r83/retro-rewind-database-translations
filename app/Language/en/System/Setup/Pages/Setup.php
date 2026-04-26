<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Setup/Pages
 * File:     Setup.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'env_file' => 'Environment file',
    'env_status' => [
        'bad' => 'Your .env is incomplete or contains invalid values',
        'issue' => 'Issue',
        'issues_headline' => 'Please fix the following entries:',
        'key' => 'Key',
        'ok' => 'Your .env looks good'
    ],
    'env_status_error' => [
        'empty' => 'Value is empty',
        'missing_or_commented' => 'Missing or commented out',
        'must_be' => 'Must be: {0} (current: {1})'
    ],
    'error' => 'Error',
    'form' => [
        'btn' => [
            'check' => 'Check again',
            'install' => 'Install',
            'installing' => 'Installing...',
            'visit_website' => 'Visit website'
        ]
    ],
    'install_now' => 'You can now install',
    'intro' => 'This page checks your .env configuration and can run migrations as well as the installer seeder',
    'meta' => [
        'seo' => [
            'index' => 'Setup'
        ]
    ],
    'progress' => [
        'msg' => [
            'already_installed' => 'Already installed',
            'env_not_ready' => 'The environment is not yet ready for installation',
            'install_done' => 'Installation completed successfully',
            'install_failed' => 'Installation failed',
            'install_locked' => 'Installation is already running. Please wait and refresh the page',
            'install_starting' => 'Starting installation...',
            'not_started' => 'Not started yet',
            'running_migrations' => 'Running migrations...',
            'running_seeder' => 'Running seeder: {0}...',
            'writing_flag' => 'Writing installation flag...'
        ],
        'title' => 'Progress'
    ]
];
