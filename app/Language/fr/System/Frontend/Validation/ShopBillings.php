<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopBillings.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'customers_served_at_counter' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez saisir combien de clients ont été servis au comptoir'
    ],
    'day' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des jours',
        'required' => 'Vous devez sélectionner un jour'
    ],
    'month' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des mois',
        'required' => 'Vous devez sélectionner un mois'
    ],
    'movie_requests_fulfilled' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez saisir combien de demandes de films vous avez satisfaites'
    ],
    'movies_rented' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez saisir combien de films ont été loués'
    ],
    'movies_returned' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez saisir combien de films ont été retournés'
    ],
    'movies_sold_income' => [
        'decimal' => 'La saisie doit être un nombre décimal',
        'greater_than' => 'La saisie doit être supérieure à 0',
        'required' => 'Vous devez saisir le montant des recettes générées par la vente de films'
    ],
    'rental_income' => [
        'decimal' => 'La saisie doit être un nombre décimal',
        'greater_than' => 'La saisie doit être supérieure à 0',
        'required' => 'Vous devez saisir le montant des recettes générées par la location de films'
    ],
    'requests_fulfilled' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez saisir combien de demandes vous avez satisfaites'
    ],
    'reserved_movies_rented_to_customers' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez saisir combien de films réservés vous avez loués à des clients'
    ],
    'snack_drinks_requests' => [
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez saisir combien de demandes de snacks et boissons vous avez satisfaites'
    ],
    'snacks_drinks_sold_income' => [
        'decimal' => 'La saisie doit être un nombre décimal',
        'greater_than' => 'La saisie doit être supérieure à 0',
        'required' => 'Vous devez saisir le montant des recettes générées par la vente de snacks et boissons'
    ],
    'staff_expenses' => [
        'decimal' => 'La saisie doit être un nombre décimal',
        'greater_than' => 'La saisie doit être supérieure à 0',
        'required' => 'Vous devez saisir le montant des dépenses engagées pour le personnel'
    ],
    'store_snacks_sold_income' => [
        'decimal' => 'La saisie doit être un nombre décimal',
        'greater_than' => 'La saisie doit être supérieure à 0',
        'required' => 'Vous devez saisir le montant des recettes générées par la vente de snacks du magasin'
    ],
    'year' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des années',
        'required' => 'Vous devez sélectionner une année'
    ]
];
