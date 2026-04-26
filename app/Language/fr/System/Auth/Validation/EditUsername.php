<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditUsername.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'username' => [
        'required' => 'Vous devez saisir votre nom d\'utilisateur actuel'
    ],
    'username_new' => [
        'is_unique' => 'Ce nom d\'utilisateur existe déjà',
        'max_length' => 'Le nom d\'utilisateur ne peut pas dépasser 50 caractères',
        'min_length' => 'Le nom d\'utilisateur doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom d\'utilisateur'
    ]
];
