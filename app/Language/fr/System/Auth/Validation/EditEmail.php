<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditEmail.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'required' => 'Vous devez saisir une adresse email',
        'valid_email' => 'Vous devez saisir une adresse email valide'
    ],
    'email_new' => [
        'is_unique' => 'Cette adresse email existe déjà dans la base de données',
        'max_length' => 'L\'adresse email ne peut pas dépasser 255 caractères',
        'required' => 'Vous devez saisir une adresse email',
        'valid_email' => 'Vous devez saisir une adresse email valide'
    ],
    'password' => [
        'required' => 'Vous devez saisir votre mot de passe'
    ]
];
