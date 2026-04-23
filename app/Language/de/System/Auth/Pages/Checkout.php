<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     Checkout.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'card' => [
        'access' => [
            'info' => 'Alle %plan%-Features sind ab sofort freigeschaltet',
            'title' => 'Zugang'
        ],
        'email' => [
            'info' => 'Bestätigung &amp; Rechnung wurden an dein Postfach gesendet',
            'title' => 'E-Mail'
        ],
        'order_summary' => [
            'duration' => 'Laufzeit',
            'payment' => 'Zahlungsart',
            'plan' => 'Plan',
            'price' => 'Preis',
            'security' => [
                'encrypted' => 'Verschlüsselt',
                'secure' => 'Sicher',
                'ssl' => 'SSL'
            ],
            'terms' => [
                'info' => 'Mit deiner Bestellung stimmst du unseren %terms% und der %privacy% zu. Du kannst jederzeit vor Ablauf der Laufzeit kündigen. Du wirst zu unserem Zahlungsdienstleister Stripe weitergeleitet',
                'privacy_policy' => 'Datenschutzerklärung',
                'terms_of_use' => 'Nutzungsbedingungen'
            ],
            'total' => 'Gesamt',
            'vat' => 'MwSt. (19%)'
        ],
        'subscription' => [
            'info' => 'Jederzeit kündbar über deine Kontoeinstellungen',
            'title' => 'Abonnement'
        ],
        'troubleshoot' => [
            'bank' => [
                'info' => 'Kontaktiere deine Bank - evtl. wurde die Zahlung blockiert',
                'title' => 'Bank'
            ],
            'card_data' => [
                'info' => 'Prüfe Kartennummer, Ablaufdatum und CVV auf Korrektheit',
                'title' => 'Kartendaten'
            ],
            'coverage' => [
                'info' => 'Stelle sicher, dass ausreichend Guthaben auf deinem Konto ist',
                'title' => 'Deckung'
            ]
        ]
    ],
    'error_hint' => 'Benötigst du Hilfe? Kontaktiere unseren %contact%.',
    'form' => [
        'btn' => [
            'dashboard' => 'Zum Dashboard',
            'order' => 'Zahlungspflichtig bestellen',
            'processing' => 'Wird vorbereitet...',
            'try_again' => 'Erneut versuchen'
        ],
        'label' => [
            'address' => 'Adresse',
            'check_interval' => 'Prüfintervall',
            'city' => 'Ort',
            'country' => 'Land',
            'date' => 'Datum',
            'error' => 'Ursache',
            'error_code' => 'Fehlercode',
            'every_2_seconds' => 'Alle 2 Sekunden',
            'firstname' => 'Vorname',
            'interval' => 'Abrechnungszeitraum',
            'lastname' => 'Nachname',
            'next_payment' => 'Nächste Abbuchung',
            'payment' => 'Zahlungsart',
            'plan' => 'Mitgliedschaft',
            'started' => 'Gestartet',
            'transaction_id' => 'Transaktions-ID',
            'zip_code' => 'Postleitzahl'
        ],
        'options' => [
            'interval' => [
                'month' => '1 Monat',
                'months' => '12 Monate',
                'monthly' => 'Monatlich',
                'yearly' => 'Jährlich'
            ],
            'payment' => [
                'abo' => 'Abonnement',
                'one_time' => 'Einmalzahlung'
            ]
        ],
        'placeholder' => [
            'address' => 'Adresse hier eingeben',
            'city' => 'Ort hier eingeben',
            'country' => 'Land hier auswählen',
            'firstname' => 'Vorname hier eingeben',
            'interval' => 'Abrechnungszeitraum hier auswählen',
            'lastname' => 'Nachname hier eingeben',
            'payment' => 'Zahlungsart hier auswählen',
            'plan' => 'Mitgliedschaft hier auswählen',
            'zip_code' => 'Postleitzahl hier eingeben'
        ],
        'title' => [
            'billing_address' => 'Rechnungsadresse',
            'error_details' => 'Fehlerdetails',
            'membership' => 'Mitgliedschaft wählen',
            'order_summary' => 'Bestellübersicht'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'cancel' => 'Deine Transaktion konnte leider nicht abgeschlossen werden',
            'index' => 'Sichere Bezahlung über verschlüsselte Verbindung',
            'pending' => 'Bitte warte einen Moment - wir prüfen deine Transaktion',
            'success' => 'Deine Transaktion wurde erfolgreich abgeschlossen'
        ],
        'seo' => [
            'cancel' => 'Zahlung fehlgeschlagen',
            'index' => 'Zahlung abwickeln',
            'database' => 'Datenbank',
            'pending' => 'Zahlung wird verarbeitet',
            'success' => 'Zahlung erfolgreich'
        ]
    ],
    'payment_declined' => [
        'info' => 'Die Transaktion konnte nicht verarbeitet werden. Bitte überprüfe deine Zahlungsdaten und versuche es erneut.',
        'title' => 'Zahlung abgelehnt'
    ],
    'payment_outstanding' => [
        'info' => 'Deine Zahlung wird gerade von unserem Zahlungsanbieter verarbeitet. Dies kann einen Moment dauern.',
        'title' => 'Zahlung ausstehend'
    ],
    'pending' => 'Ausstehend',
    'pending_hint' => 'Bitte schließe dieses Fenster nicht. Bei Problemen kontaktiere unseren %contact%.',
    'processing' => 'Verarbeitung läuft...',
    'security' => [
        'automatically' => 'Automatisch',
        'automatically_info' => 'Du wirst automatisch weitergeleitet sobald die Zahlung bestätigt ist',
        'patience' => 'Geduld',
        'patience_info' => 'Die Verarbeitung dauert in der Regel nur wenige Sekunden',
        'secure' => 'Sicher',
        'secure_info' => 'Deine Zahlungsdaten werden verschlüsselt übertragen',
    ],
    'status' => 'Status',
    'steps' => [
        'one' => 'Plan wählen',
        'three' => 'Bestätigung',
        'two' => 'Zahlung'
    ],
    'success' => [
        'info' => 'Eine Bestätigung wurde an deine E-Mail gesendet.',
        'title' => 'Zahlung bestätigt'
    ],
    'support' => 'Support',
    'transaction_status' => 'Transaktionsstatus'
];
