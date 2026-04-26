<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     Checkout.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'order' => 'L\'ordine non può essere completato. Si prega di compilare correttamente tutti i campi e riprovare',
        'webhook' => [
            '3d_secure_failed' => 'L\'autenticazione 3D Secure è fallita.',
            'authentication_failure' => 'Errore di autenticazione. Si prega di riprovare.',
            'authentication_required' => 'L\'autenticazione è fallita. Si prega di riprovare.',
            'blocked' => 'Il pagamento è stato bloccato. Si prega di contattare la propria banca.',
            'card_declined' => 'La carta è stata rifiutata. Si prega di utilizzare un altro metodo di pagamento.',
            'expired_card' => 'La carta è scaduta. Si prega di utilizzare una carta valida.',
            'fraudulent' => 'Il pagamento è stato rifiutato per motivi di sicurezza.',
            'incorrect_cvc' => 'Il codice di sicurezza (CVC) non è corretto. Si prega di verificare l\'input.',
            'incorrect_number' => 'Il numero della carta non è valido. Si prega di verificare l\'input.',
            'insufficient_funds' => 'Fondi insufficienti sulla carta. Si prega di utilizzare un\'altra carta.',
            'invalid_expiry' => 'La data di scadenza non è valida. Si prega di verificare l\'input.',
            'invoice_failed' => 'Il pagamento della fattura è fallito.',
            'payment_failed' => 'Il pagamento è fallito. Si prega di riprovare.',
            'processing_error' => 'Si è verificato un errore durante l\'elaborazione. Si prega di riprovare.',
            'unknown' => 'Si è verificato un errore sconosciuto. Si prega di contattare l\'assistenza.'
        ]
    ]
];
