<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Languages.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'abbreviation' => [
        'max_length' => 'L\'abréviation ne peut pas dépasser 2 caractères',
        'min_length' => 'L\'abréviation doit comporter au moins 2 caractères',
        'required' => 'Vous devez saisir une abréviation'
    ],
    'active' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner si la langue est active'
    ],
    'flag' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner un drapeau'
    ],
    'name' => [
        'max_length' => 'Le nom en %language_name% ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom en %language_name% doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom en %language_name%'
    ]
];
