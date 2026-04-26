<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditProfile.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'avatar_image' => [
        'is_image' => 'Il file deve essere un\'immagine valida.',
        'max_size' => 'L\'immagine non può superare 1 MB.',
        'mime_in' => 'Formati consentiti: JPG, PNG, WebP.'
    ],
    'birthday' => [
        'valid_date' => 'La data di nascita deve essere una data nel formato Y-m-d'
    ],
    'country' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni'
    ],
    'display_name' => [
        'max_length' => 'Il nome visualizzato non può superare i 255 caratteri',
        'min_length' => 'Il nome visualizzato deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un nome visualizzato'
    ],
    'firstname' => [
        'max_length' => 'Il nome non può superare i 255 caratteri',
        'min_length' => 'Il nome deve essere lungo almeno 3 caratteri'
    ],
    'language' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare una lingua'
    ],
    'lastname' => [
        'max_length' => 'Il cognome non può superare i 255 caratteri',
        'min_length' => 'Il cognome deve essere lungo almeno 3 caratteri'
    ],
    'location' => [
        'max_length' => 'La località non può superare i 255 caratteri',
        'min_length' => 'La località deve essere lunga almeno 3 caratteri'
    ],
    'membership_badge_style' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare uno stile di badge di abbonamento'
    ],
    'sex' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni'
    ],
    'social_discord' => [
        'max_length' => 'Il nome utente Discord non può superare i 255 caratteri',
        'min_length' => 'Il nome utente Discord deve essere lungo almeno 3 caratteri'
    ],
    'social_instagram' => [
        'max_length' => 'Il nome utente Instagram non può superare i 255 caratteri',
        'min_length' => 'Il nome utente Instagram deve essere lungo almeno 3 caratteri'
    ],
    'social_steam' => [
        'max_length' => 'Il nome utente Steam non può superare i 255 caratteri',
        'min_length' => 'Il nome utente Steam deve essere lungo almeno 3 caratteri'
    ],
    'social_twitch' => [
        'max_length' => 'Il nome utente Twitch non può superare i 255 caratteri',
        'min_length' => 'Il nome utente Twitch deve essere lungo almeno 3 caratteri'
    ],
    'social_x_twitter' => [
        'max_length' => 'Il nome utente X / Twitter non può superare i 255 caratteri',
        'min_length' => 'Il nome utente X / Twitter deve essere lungo almeno 3 caratteri'
    ],
    'social_youtube' => [
        'max_length' => 'Il nome utente Youtube non può superare i 255 caratteri',
        'min_length' => 'Il nome utente Youtube deve essere lungo almeno 3 caratteri'
    ],
    'website' => [
        'max_length' => 'L\'URL del sito web non può superare i 255 caratteri',
        'min_length' => 'L\'URL del sito web deve essere lungo almeno 3 caratteri',
        'valid_url' => 'Devi inserire un URL del sito web valido'
    ]
];
