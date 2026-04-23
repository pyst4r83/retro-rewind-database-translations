<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     Checkout.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'order' => 'Die Bestellung konnte nicht abgeschlossen werden. Bitte fülle alle Felder korrekt aus und versuche es erneut',
        'webhook' => [
            '3d_secure_failed' => 'Die 3D-Secure-Authentifizierung ist fehlgeschlagen.',
            'authentication_failure' => 'Authentifizierungsfehler. Bitte versuchen Sie es erneut.',
            'authentication_required' => 'Die Authentifizierung ist fehlgeschlagen. Bitte versuchen Sie es erneut.',
            'blocked' => 'Die Zahlung wurde blockiert. Bitte kontaktieren Sie Ihre Bank.',
            'card_declined' => 'Die Karte wurde abgelehnt. Bitte verwenden Sie eine andere Zahlungsmethode.',
            'expired_card' => 'Die Karte ist abgelaufen. Bitte verwenden Sie eine gültige Karte.',
            'fraudulent' => 'Die Zahlung wurde aus Sicherheitsgründen abgelehnt.',
            'incorrect_cvc' => 'Der Sicherheitscode (CVC) ist falsch. Bitte überprüfen Sie Ihre Eingabe.',
            'incorrect_number' => 'Die Kartennummer ist ungültig. Bitte überprüfen Sie Ihre Eingabe.',
            'insufficient_funds' => 'Nicht genügend Guthaben auf der Karte. Bitte verwenden Sie eine andere Karte.',
            'invalid_expiry' => 'Das Ablaufdatum ist ungültig. Bitte überprüfen Sie Ihre Eingabe.',
            'invoice_failed' => 'Die Rechnungszahlung ist fehlgeschlagen.',
            'payment_failed' => 'Die Zahlung ist fehlgeschlagen. Bitte versuchen Sie es erneut.',
            'processing_error' => 'Bei der Verarbeitung ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.',
            'unknown' => 'Ein unbekannter Fehler ist aufgetreten. Bitte kontaktieren Sie den Support.'
        ]
    ]
];
