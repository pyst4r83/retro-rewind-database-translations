<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditProfile.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'avatar_image' => [
        'is_image' => 'Le fichier doit être une image valide.',
        'max_size' => 'L\'image ne peut pas dépasser 1 Mo.',
        'mime_in' => 'Formats autorisés : JPG, PNG, WebP.'
    ],
    'birthday' => [
        'valid_date' => 'La date de naissance doit être une date au format Y-m-d'
    ],
    'country' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options'
    ],
    'display_name' => [
        'max_length' => 'Le nom d\'affichage ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom d\'affichage doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom d\'affichage'
    ],
    'firstname' => [
        'max_length' => 'Le prénom ne peut pas dépasser 255 caractères',
        'min_length' => 'Le prénom doit comporter au moins 3 caractères'
    ],
    'language' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner une langue'
    ],
    'lastname' => [
        'max_length' => 'Le nom ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom doit comporter au moins 3 caractères'
    ],
    'location' => [
        'max_length' => 'La localisation ne peut pas dépasser 255 caractères',
        'min_length' => 'La localisation doit comporter au moins 3 caractères'
    ],
    'membership_badge_style' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner un style de badge d\'abonnement'
    ],
    'sex' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options'
    ],
    'social_discord' => [
        'max_length' => 'Le nom d\'utilisateur Discord ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom d\'utilisateur Discord doit comporter au moins 3 caractères'
    ],
    'social_instagram' => [
        'max_length' => 'Le nom d\'utilisateur Instagram ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom d\'utilisateur Instagram doit comporter au moins 3 caractères'
    ],
    'social_steam' => [
        'max_length' => 'Le nom d\'utilisateur Steam ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom d\'utilisateur Steam doit comporter au moins 3 caractères'
    ],
    'social_twitch' => [
        'max_length' => 'Le nom d\'utilisateur Twitch ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom d\'utilisateur Twitch doit comporter au moins 3 caractères'
    ],
    'social_x_twitter' => [
        'max_length' => 'Le nom d\'utilisateur X / Twitter ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom d\'utilisateur X / Twitter doit comporter au moins 3 caractères'
    ],
    'social_youtube' => [
        'max_length' => 'Le nom d\'utilisateur Youtube ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom d\'utilisateur Youtube doit comporter au moins 3 caractères'
    ],
    'website' => [
        'max_length' => 'L\'URL du site web ne peut pas dépasser 255 caractères',
        'min_length' => 'L\'URL du site web doit comporter au moins 3 caractères',
        'valid_url' => 'Vous devez saisir une URL de site web valide'
    ]
];
