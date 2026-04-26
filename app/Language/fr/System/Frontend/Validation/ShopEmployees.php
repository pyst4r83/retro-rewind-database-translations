<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopEmployees.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'favorite_movie' => [
        'max_length' => 'Le film préféré ne peut pas dépasser 255 caractères',
        'min_length' => 'Le film préféré doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un film préféré'
    ],
    'name' => [
        'max_length' => 'Le nom ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom'
    ],
    'skill_checkout' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner le niveau de compétence à la caisse'
    ],
    'skill_return' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner le niveau de compétence à la station de retour'
    ],
    'traits' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des caractéristiques supplémentaires',
        'required' => 'Vous devez sélectionner une caractéristique supplémentaire'
    ]
];
