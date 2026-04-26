<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     Contact.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'max_length' => 'L\'adresse email ne peut pas dépasser 255 caractères',
        'min_length' => 'L\'adresse email doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une adresse email'
    ],
    'message' => [
        'min_length' => 'Le message doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un message'
    ],
    'subject' => [
        'max_length' => 'Le sujet ne peut pas dépasser 255 caractères',
        'min_length' => 'Le sujet doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un sujet'
    ],
    'username' => [
        'max_length' => 'Le nom d\'utilisateur ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom d\'utilisateur doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom d\'utilisateur'
    ]
];
