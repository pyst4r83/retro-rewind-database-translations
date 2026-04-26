<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     NewsArticles.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'category' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner une catégorie'
    ],
    'content' => [
        'min_length' => 'Le contenu en %language_name% doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un contenu en %language_name%'
    ],
    'featured_image' => [
        'valid_url' => 'Vous devez saisir une URL valide'
    ],
    'published_at' => [
        'integer' => 'La saisie doit être un nombre'
    ],
    'source_link' => [
        'valid_url' => 'Vous devez saisir une URL valide'
    ],
    'steam_id' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options'
    ],
    'teaser' => [
        'min_length' => 'L\'accroche doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une accroche'
    ],
    'title' => [
        'max_length' => 'Le titre en %language_name% ne peut pas dépasser 255 caractères',
        'min_length' => 'Le titre en %language_name% doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un titre en %language_name%'
    ]
];
