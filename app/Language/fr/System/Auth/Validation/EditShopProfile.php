<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditShopProfile.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'shop_currency' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options'
    ],
    'shop_font' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner une police pour la boutique'
    ],
    'shop_font_color' => [
        'max_length' => 'La couleur du texte de la boutique ne peut pas dépasser 10 caractères',
        'required' => 'Vous devez sélectionner une couleur pour le texte de la boutique'
    ],
    'shop_font_text_shadow_color' => [
        'max_length' => 'La couleur de l\'ombre du texte de la boutique ne peut pas dépasser 10 caractères',
        'required' => 'Vous devez sélectionner une couleur pour l\'ombre du texte de la boutique'
    ],
    'shop_language' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options'
    ],
    'shop_name' => [
        'max_length' => 'Le nom de la boutique ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom de la boutique doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom de boutique'
    ],
    'shop_timezone' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options'
    ]
];
