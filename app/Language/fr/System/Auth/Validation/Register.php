<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Register.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'is_unique' => 'Cette adresse email existe déjà',
        'max_length' => 'L\'adresse email ne peut pas dépasser 255 caractères',
        'min_length' => 'L\'adresse email doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une adresse email',
        'valid_email' => 'Vous devez saisir une adresse email valide'
    ],
    'password' => [
        'min_length' => 'Le mot de passe doit comporter au moins 8 caractères',
        'required' => 'Vous devez saisir un mot de passe',
        'validPasswordLowercase' => 'Le mot de passe doit contenir au moins une lettre minuscule',
        'validPasswordNumber' => 'Le mot de passe doit contenir au moins un chiffre',
        'validPasswordSpecial' => 'Le mot de passe doit contenir au moins l\'un des caractères spéciaux suivants :<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'Le mot de passe doit contenir au moins une lettre majuscule'
    ],
    'password_repeat' => [
        'matches' => 'Les mots de passe ne correspondent pas',
        'required' => 'Vous devez resaisir le mot de passe'
    ],
    'username' => [
        'is_unique' => 'Ce nom d\'utilisateur existe déjà',
        'max_length' => 'Le nom d\'utilisateur ne peut pas dépasser 50 caractères',
        'min_length' => 'Le nom d\'utilisateur doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom d\'utilisateur'
    ]
];
