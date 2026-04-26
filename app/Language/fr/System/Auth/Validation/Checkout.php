<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Checkout.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'address' => [
        'max_length' => 'L\'adresse ne peut pas dépasser 255 caractères',
        'min_length' => 'L\'adresse doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une adresse'
    ],
    'city' => [
        'max_length' => 'La ville ne peut pas dépasser 255 caractères',
        'min_length' => 'La ville doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une ville'
    ],
    'country' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner un pays'
    ],
    'firstname' => [
        'max_length' => 'Le prénom ne peut pas dépasser 50 caractères',
        'min_length' => 'Le prénom doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un prénom'
    ],
    'interval' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner une période de facturation'
    ],
    'lastname' => [
        'max_length' => 'Le nom ne peut pas dépasser 50 caractères',
        'min_length' => 'Le nom doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un nom'
    ],
    'payment' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner un mode de paiement'
    ],
    'plan' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner un abonnement'
    ],
    'zip_code' => [
        'max_length' => 'Le code postal ne peut pas dépasser 50 caractères',
        'min_length' => 'Le code postal doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un code postal'
    ]
];
