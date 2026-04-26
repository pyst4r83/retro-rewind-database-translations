<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     Checkout.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'card' => [
        'access' => [
            'info' => 'Tutte le funzionalità di %plan% sono ora sbloccate',
            'title' => 'Accesso'
        ],
        'email' => [
            'info' => 'Conferma e fattura sono state inviate alla tua casella di posta',
            'title' => 'Email'
        ],
        'order_summary' => [
            'duration' => 'Durata',
            'payment' => 'Metodo di pagamento',
            'plan' => 'Piano',
            'price' => 'Prezzo',
            'security' => [
                'encrypted' => 'Crittografato',
                'secure' => 'Sicuro',
                'ssl' => 'SSL'
            ],
            'terms' => [
                'info' => 'Effettuando l\'ordine, accetti i nostri %terms% e la %privacy%. Puoi cancellare in qualsiasi momento prima della scadenza del periodo. Verrai reindirizzato al nostro fornitore di pagamenti Stripe',
                'privacy_policy' => 'Informativa sulla privacy',
                'terms_of_use' => 'Termini di utilizzo'
            ],
            'total' => 'Totale',
            'vat' => 'IVA (19%)'
        ],
        'subscription' => [
            'info' => 'Cancellabile in qualsiasi momento dalle impostazioni del tuo account',
            'title' => 'Abbonamento'
        ],
        'troubleshoot' => [
            'bank' => [
                'info' => 'Contatta la tua banca - il pagamento potrebbe essere stato bloccato',
                'title' => 'Banca'
            ],
            'card_data' => [
                'info' => 'Verifica che numero di carta, data di scadenza e CVV siano corretti',
                'title' => 'Dati della carta'
            ],
            'coverage' => [
                'info' => 'Assicurati di avere fondi sufficienti sul tuo conto',
                'title' => 'Copertura'
            ]
        ]
    ],
    'error_hint' => 'Hai bisogno di aiuto? Contatta il nostro %contact%.',
    'form' => [
        'btn' => [
            'dashboard' => 'Vai alla dashboard',
            'order' => 'Ordina con pagamento',
            'processing' => 'Preparazione...',
            'try_again' => 'Riprova'
        ],
        'label' => [
            'address' => 'Indirizzo',
            'check_interval' => 'Intervallo di controllo',
            'city' => 'Città',
            'country' => 'Paese',
            'date' => 'Data',
            'error' => 'Motivo',
            'error_code' => 'Codice errore',
            'every_2_seconds' => 'Ogni 2 secondi',
            'firstname' => 'Nome',
            'interval' => 'Periodo di fatturazione',
            'lastname' => 'Cognome',
            'next_payment' => 'Prossimo pagamento',
            'payment' => 'Metodo di pagamento',
            'plan' => 'Abbonamento',
            'started' => 'Iniziato',
            'transaction_id' => 'ID transazione',
            'zip_code' => 'CAP'
        ],
        'options' => [
            'interval' => [
                'month' => '1 mese',
                'months' => '12 mesi',
                'monthly' => 'Mensile',
                'yearly' => 'Annuale'
            ],
            'payment' => [
                'abo' => 'Abbonamento',
                'one_time' => 'Pagamento una tantum'
            ]
        ],
        'placeholder' => [
            'address' => 'Inserisci indirizzo qui',
            'city' => 'Inserisci città qui',
            'country' => 'Seleziona paese qui',
            'firstname' => 'Inserisci nome qui',
            'interval' => 'Seleziona periodo di fatturazione qui',
            'lastname' => 'Inserisci cognome qui',
            'payment' => 'Seleziona metodo di pagamento qui',
            'plan' => 'Seleziona abbonamento qui',
            'zip_code' => 'Inserisci CAP qui'
        ],
        'title' => [
            'billing_address' => 'Indirizzo di fatturazione',
            'error_details' => 'Dettagli errore',
            'membership' => 'Scegli abbonamento',
            'order_summary' => 'Riepilogo ordine'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'cancel' => 'La tua transazione non può essere completata',
            'index' => 'Pagamento sicuro tramite connessione crittografata',
            'pending' => 'Attendi un momento - stiamo verificando la tua transazione',
            'success' => 'La tua transazione è stata completata con successo'
        ],
        'seo' => [
            'cancel' => 'Pagamento fallito',
            'index' => 'Elabora pagamento',
            'database' => 'Database',
            'pending' => 'Elaborazione pagamento',
            'success' => 'Pagamento riuscito'
        ]
    ],
    'payment_declined' => [
        'info' => 'La transazione non può essere elaborata. Verifica i tuoi dati di pagamento e riprova.',
        'title' => 'Pagamento rifiutato'
    ],
    'payment_outstanding' => [
        'info' => 'Il tuo pagamento è in fase di elaborazione dal nostro fornitore di pagamenti. Potrebbe richiedere un momento.',
        'title' => 'Pagamento in sospeso'
    ],
    'pending' => 'In sospeso',
    'pending_hint' => 'Si prega di non chiudere questa finestra. In caso di problemi, contatta il nostro %contact%.',
    'processing' => 'Elaborazione in corso...',
    'security' => [
        'automatically' => 'Automatico',
        'automatically_info' => 'Verrai reindirizzato automaticamente una volta confermato il pagamento',
        'patience' => 'Pazienza',
        'patience_info' => 'L\'elaborazione richiede solitamente solo pochi secondi',
        'secure' => 'Sicuro',
        'secure_info' => 'I tuoi dati di pagamento vengono trasmessi crittografati',
    ],
    'status' => 'Stato',
    'steps' => [
        'one' => 'Scegli piano',
        'three' => 'Conferma',
        'two' => 'Pagamento'
    ],
    'success' => [
        'info' => 'Una conferma è stata inviata alla tua email.',
        'title' => 'Pagamento confermato'
    ],
    'support' => 'Supporto',
    'transaction_status' => 'Stato transazione'
];
