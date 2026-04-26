<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Users.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'country' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options'
    ],
    'email' => [
        'is_unique' => 'Cette adresse email existe déjà',
        'max_length' => 'L\'adresse email ne peut pas dépasser 255 caractères',
        'min_length' => 'L\'adresse email doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une adresse email',
        'valid_email' => 'Vous devez saisir une adresse email valide'
    ],
    'end_date' => [
        'required' => 'Vous devez saisir une date de fin pour l\'abonnement',
        'valid_date' => 'La date de fin de l\'abonnement doit être une date au format Y-m-d'
    ],
    'firstname' => [
        'max_length' => 'Le prénom ne peut pas dépasser 255 caractères',
        'min_length' => 'Le prénom doit comporter au moins 3 caractères'
    ],
    'is_admin' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner si l\'utilisateur est un administrateur'
    ],
    'is_superadmin' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner si l\'utilisateur est un superadmin'
    ],
    'language' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options'
    ],
    'lastname' => [
        'max_length' => 'Le nom ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom doit comporter au moins 3 caractères'
    ],
    'membership' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner un abonnement'
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
