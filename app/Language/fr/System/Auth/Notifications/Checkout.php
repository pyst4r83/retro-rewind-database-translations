<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     Checkout.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'order' => 'La commande n\'a pas pu être complétée. Veuillez remplir tous les champs correctement et réessayer',
        'webhook' => [
            '3d_secure_failed' => 'L\'authentification 3D Secure a échoué.',
            'authentication_failure' => 'Erreur d\'authentification. Veuillez réessayer.',
            'authentication_required' => 'L\'authentification a échoué. Veuillez réessayer.',
            'blocked' => 'Le paiement a été bloqué. Veuillez contacter votre banque.',
            'card_declined' => 'La carte a été refusée. Veuillez utiliser un autre moyen de paiement.',
            'expired_card' => 'La carte a expiré. Veuillez utiliser une carte valide.',
            'fraudulent' => 'Le paiement a été refusé pour des raisons de sécurité.',
            'incorrect_cvc' => 'Le code de sécurité (CVC) est incorrect. Veuillez vérifier votre saisie.',
            'incorrect_number' => 'Le numéro de carte est invalide. Veuillez vérifier votre saisie.',
            'insufficient_funds' => 'Fonds insuffisants sur la carte. Veuillez utiliser une autre carte.',
            'invalid_expiry' => 'La date d\'expiration est invalide. Veuillez vérifier votre saisie.',
            'invoice_failed' => 'Le paiement par facture a échoué.',
            'payment_failed' => 'Le paiement a échoué. Veuillez réessayer.',
            'processing_error' => 'Une erreur est survenue lors du traitement. Veuillez réessayer.',
            'unknown' => 'Une erreur inconnue est survenue. Veuillez contacter le support.'
        ]
    ]
];
