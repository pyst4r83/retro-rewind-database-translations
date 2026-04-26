<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Countries.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'flag' => [
        'is_image' => 'Le fichier doit être une image valide.',
        'max_size' => 'L\'image ne peut pas dépasser 1 Mo.',
        'mime_in' => 'Formats autorisés : JPG, PNG, WebP.'
    ],
    'name' => [
        'max_length' => 'Le nom en %language_name% ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom en %language_name% doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom en %language_name%'
    ],
    'tag' => [
        'max_length' => 'Le code ne peut pas dépasser 2 caractères',
        'min_length' => 'Le code doit comporter au moins 2 caractères',
        'required' => 'Vous devez saisir un code'
    ],
    'status' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner si le pays est un favori'
    ]
];
