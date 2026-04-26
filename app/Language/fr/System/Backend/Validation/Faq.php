<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Faq.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'answer' => [
        'max_length' => 'La réponse en %language_name% ne peut pas dépasser 255 caractères',
        'min_length' => 'La réponse en %language_name% doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une réponse en %language_name%'
    ],
    'category' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner une catégorie'
    ],
    'question' => [
        'max_length' => 'La question en %language_name% ne peut pas dépasser 255 caractères',
        'min_length' => 'La question en %language_name% doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une question en %language_name%'
    ]
];
