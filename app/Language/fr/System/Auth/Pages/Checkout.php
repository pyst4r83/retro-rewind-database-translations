<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     Checkout.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'card' => [
        'access' => [
            'info' => 'Toutes les fonctionnalités %plan% sont maintenant débloquées',
            'title' => 'Accès'
        ],
        'email' => [
            'info' => 'La confirmation et la facture ont été envoyées à votre boîte mail',
            'title' => 'Email'
        ],
        'order_summary' => [
            'duration' => 'Durée',
            'payment' => 'Mode de paiement',
            'plan' => 'Forfait',
            'price' => 'Prix',
            'security' => [
                'encrypted' => 'Chiffré',
                'secure' => 'Sécurisé',
                'ssl' => 'SSL'
            ],
            'terms' => [
                'info' => 'En passant votre commande, vous acceptez nos %terms% et notre %privacy%. Vous pouvez résilier à tout moment avant la fin de la période. Vous serez redirigé vers notre prestataire de paiement Stripe',
                'privacy_policy' => 'Politique de confidentialité',
                'terms_of_use' => 'Conditions d\'utilisation'
            ],
            'total' => 'Total',
            'vat' => 'TVA (19%)'
        ],
        'subscription' => [
            'info' => 'Résiliable à tout moment via les paramètres de votre compte',
            'title' => 'Abonnement'
        ],
        'troubleshoot' => [
            'bank' => [
                'info' => 'Contactez votre banque - le paiement a peut-être été bloqué',
                'title' => 'Banque'
            ],
            'card_data' => [
                'info' => 'Vérifiez le numéro de carte, la date d\'expiration et le CVV',
                'title' => 'Données de la carte'
            ],
            'coverage' => [
                'info' => 'Assurez-vous d\'avoir suffisamment de fonds sur votre compte',
                'title' => 'Couverture'
            ]
        ]
    ],
    'error_hint' => 'Besoin d\'aide ? Contactez notre %contact%.',
    'form' => [
        'btn' => [
            'dashboard' => 'Aller au tableau de bord',
            'order' => 'Commander',
            'processing' => 'Préparation...',
            'try_again' => 'Réessayer'
        ],
        'label' => [
            'address' => 'Adresse',
            'check_interval' => 'Intervalle de vérification',
            'city' => 'Ville',
            'country' => 'Pays',
            'date' => 'Date',
            'error' => 'Raison',
            'error_code' => 'Code d\'erreur',
            'every_2_seconds' => 'Toutes les 2 secondes',
            'firstname' => 'Prénom',
            'interval' => 'Période de facturation',
            'lastname' => 'Nom',
            'next_payment' => 'Prochain paiement',
            'payment' => 'Mode de paiement',
            'plan' => 'Adhésion',
            'started' => 'Commencé',
            'transaction_id' => 'ID de transaction',
            'zip_code' => 'Code postal'
        ],
        'options' => [
            'interval' => [
                'month' => '1 mois',
                'months' => '12 mois',
                'monthly' => 'Mensuel',
                'yearly' => 'Annuel'
            ],
            'payment' => [
                'abo' => 'Abonnement',
                'one_time' => 'Paiement unique'
            ]
        ],
        'placeholder' => [
            'address' => 'Entrez l\'adresse ici',
            'city' => 'Entrez la ville ici',
            'country' => 'Sélectionnez le pays ici',
            'firstname' => 'Entrez le prénom ici',
            'interval' => 'Sélectionnez la période de facturation ici',
            'lastname' => 'Entrez le nom ici',
            'payment' => 'Sélectionnez le mode de paiement ici',
            'plan' => 'Sélectionnez l\'adhésion ici',
            'zip_code' => 'Entrez le code postal ici'
        ],
        'title' => [
            'billing_address' => 'Adresse de facturation',
            'error_details' => 'Détails de l\'erreur',
            'membership' => 'Choisir l\'adhésion',
            'order_summary' => 'Récapitulatif de la commande'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'cancel' => 'Votre transaction n\'a pas pu être complétée',
            'index' => 'Paiement sécurisé via connexion chiffrée',
            'pending' => 'Veuillez patienter - nous vérifions votre transaction',
            'success' => 'Votre transaction a été complétée avec succès'
        ],
        'seo' => [
            'cancel' => 'Paiement échoué',
            'index' => 'Traiter le paiement',
            'database' => 'Base de données',
            'pending' => 'Traitement du paiement',
            'success' => 'Paiement réussi'
        ]
    ],
    'payment_declined' => [
        'info' => 'La transaction n\'a pas pu être traitée. Veuillez vérifier vos informations de paiement et réessayer.',
        'title' => 'Paiement refusé'
    ],
    'payment_outstanding' => [
        'info' => 'Votre paiement est en cours de traitement par notre prestataire de paiement. Cela peut prendre un moment.',
        'title' => 'Paiement en attente'
    ],
    'pending' => 'En attente',
    'pending_hint' => 'Veuillez ne pas fermer cette fenêtre. En cas de problème, contactez notre %contact%.',
    'processing' => 'Traitement en cours...',
    'security' => [
        'automatically' => 'Automatique',
        'automatically_info' => 'Vous serez automatiquement redirigé une fois le paiement confirmé',
        'patience' => 'Patience',
        'patience_info' => 'Le traitement ne prend généralement que quelques secondes',
        'secure' => 'Sécurisé',
        'secure_info' => 'Vos données de paiement sont transmises de manière chiffrée',
    ],
    'status' => 'Statut',
    'steps' => [
        'one' => 'Choisir le forfait',
        'three' => 'Confirmation',
        'two' => 'Paiement'
    ],
    'success' => [
        'info' => 'Une confirmation a été envoyée à votre adresse email.',
        'title' => 'Paiement confirmé'
    ],
    'support' => 'Support',
    'transaction_status' => 'Statut de la transaction'
];
