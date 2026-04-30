<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Notifications
 * File:     Movies.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'already_confirmed' => 'Questo film è già stato valutato e non può essere inviato di nuovo.',
        'already_rated' => 'Questo film è già stato valutato e non può essere inviato di nuovo.',
        'copy' => 'Impossibile copiare negli appunti',
        'display_case' => [
            'error' => 'Errore durante il salvataggio della vetrina',
            'invalid_status' => 'Stato vetrina non valido',
            'movie_not_found' => 'Film non trovato',
            'no_id' => 'Nessun ID film fornito'
        ],
        'favorite' => [
            'error' => 'Errore durante il salvataggio del preferito',
            'invalid_status' => 'Stato preferito non valido',
            'movie_not_found' => 'Film non trovato',
            'no_id' => 'Nessun ID film fornito'
        ],
        'inventory' => [
            'error' => 'Errore durante il salvataggio dell\'inventario',
            'invalid_status' => 'Stato inventario non valido',
            'movie_not_found' => 'Film non trovato',
            'no_id' => 'Nessun ID film fornito'
        ],
        'movies_not_found' => 'Nessun film trovato',
        'network' => 'Errore di rete. Per favore riprova più tardi.',
        'not_found' => 'Nessun film trovato con questo SKU.',
        'retry' => 'Si è verificato un errore. Per favore riprova.',
        'save_failed' => 'Errore durante il salvataggio della valutazione.',
        'search' => 'Errore di ricerca',
        'validation' => 'Per favore verifica i tuoi dati.',
        'vote' => [
            'already_voted' => 'Hai già votato per questo film nelle ultime 24 ore!',
            'cooldown' => 'Cooldown',
            'error' => 'Si è verificato un errore',
            'error_saving' => 'Errore durante il salvataggio',
            'movie_not_found' => 'Film non trovato',
            'next_vote_in' => 'Prossimo voto possibile tra',
            'no_id' => 'Nessun ID film fornito',
            'not_counted' => 'Il voto non è stato contato!'
        ]
    ],
    'success' => [
        'display_case' => [
            'add' => 'Aggiunto alla vetrina',
            'delete' => 'Rimosso dalla vetrina'
        ],
        'favorite' => [
            'add' => 'Aggiunto ai preferiti',
            'delete' => 'Rimosso dai preferiti'
        ],
        'inventory' => [
            'add' => 'Aggiunto all\'inventario',
            'delete' => 'Rimosso dall\'inventario'
        ],
        'rated' => 'Valutazione salvata con successo!',
        'vote' => [
            'countdown_expired' => 'Puoi votare di nuovo ora!',
            'counted' => 'Il voto è stato contato!'
        ]
    ],
    'time' => [
        'and' => 'e',
        'hour_singular' => 'ora',
        'hour_plural' => 'ore',
        'less_than_minute' => 'meno di un minuto',
        'minute_singular' => 'minuto',
        'minute_plural' => 'minuti',
        'second_singular' => 'secondo',
        'second_plural' => 'secondi',
        'timer' => 'Voti solo ogni 24 ore'
    ]
];
