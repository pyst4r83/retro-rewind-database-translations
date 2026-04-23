<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Notifications
 * File:     Movies.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'already_confirmed' => 'Dieser Film wurde bereits bewertet und kann nicht erneut eingereicht werden.',
        'already_rated' => 'Dieser Film wurde bereits bewertet und kann nicht erneut eingereicht werden.',
        'copy' => 'Konnte nicht in die Zwischenablage kopieren',
        'display_case' => [
            'error' => 'Fehler beim Speichern der Vitrine',
            'invalid_status' => 'Ungültiger Vitrinen Status',
            'movie_not_found' => 'Film nicht gefunden',
            'no_id' => 'Es wurde keine Film ID übergeben'
        ],
        'favorite' => [
            'error' => 'Fehler beim Speichern des Favoriten',
            'invalid_status' => 'Ungültiger Favorite Status',
            'movie_not_found' => 'Film nicht gefunden',
            'no_id' => 'Es wurde keine Film ID übergeben'
        ],
        'inventory' => [
            'error' => 'Fehler beim Speichern des Inventars',
            'invalid_status' => 'Ungültiger Inventar Status',
            'movie_not_found' => 'Film nicht gefunden',
            'no_id' => 'Es wurde keine Film ID übergeben'
        ],
        'network' => 'Netzwerkfehler. Bitte versuchen Sie es später erneut.',
        'not_found' => 'Kein Film mit dieser SKU gefunden.',
        'retry' => 'Ein Fehler ist aufgetreten. Bitte versuche es erneut.',
        'save_failed' => 'Fehler beim Speichern der Bewertung.',
        'search' => 'Fehler bei der Suche',
        'validation' => 'Bitte überprüfe deine Eingaben.',
        'vote' => [
            'already_voted' => 'Sie haben bereits in den letzten 24 Stunden für diesen Film abgestimmt!',
            'cooldown' => 'Cooldown',
            'error' => 'Ein Fehler ist aufgetreten',
            'error_saving' => 'Fehler beim Speichern',
            'movie_not_found' => 'Film nicht gefunden',
            'next_vote_in' => 'Nächster Vote möglich in',
            'no_id' => 'Es wurde keine Film ID übergeben',
            'not_counted' => 'Vote wurde nicht gezählt!'
        ]
    ],
    'success' => [
        'display_case' => [
            'add' => 'Zur Vitrine hinzugefügt',
            'delete' => 'Aus Vitrine entfernt'
        ],
        'favorite' => [
            'add' => 'Zu Favoriten hinzugefügt',
            'delete' => 'Aus Favoriten entfernt'
        ],
        'inventory' => [
            'add' => 'Zum Inventar hinzugefügt',
            'delete' => 'Aus Inventar entfernt'
        ],
        'rated' => 'Bewertung erfolgreich gespeichert!',
        'vote' => [
            'countdown_expired' => 'Sie können jetzt wieder abstimmen!',
            'counted' => 'Vote wurde gezählt!'
        ]
    ],
    'time' => [
        'and' => 'und',
        'hour_singular' => 'Stunde',
        'hour_plural' => 'Stunden',
        'less_than_minute' => 'weniger als eine Minute',
        'minute_singular' => 'Minute',
        'minute_plural' => 'Minuten',
        'second_singular' => 'Sekunde',
        'second_plural' => 'Sekunden',
        'timer' => 'Votes nur alle 24 Stunden'
    ]
];
