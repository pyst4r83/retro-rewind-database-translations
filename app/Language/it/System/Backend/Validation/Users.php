<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Users.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'country' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni'
    ],
    'email' => [
        'is_unique' => 'Questo indirizzo email esiste già',
        'max_length' => 'L\'indirizzo email non può superare i 255 caratteri',
        'min_length' => 'L\'indirizzo email deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un indirizzo email',
        'valid_email' => 'Devi inserire un indirizzo email valido'
    ],
    'end_date' => [
        'required' => 'Devi inserire una data di fine per l\'abbonamento',
        'valid_date' => 'La data di fine abbonamento deve essere una data nel formato Y-m-d'
    ],
    'firstname' => [
        'max_length' => 'Il nome non può superare i 255 caratteri',
        'min_length' => 'Il nome deve essere lungo almeno 3 caratteri'
    ],
    'is_admin' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare se l\'utente è un amministratore'
    ],
    'is_superadmin' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare se l\'utente è un superamministratore'
    ],
    'language' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni'
    ],
    'lastname' => [
        'max_length' => 'Il cognome non può superare i 255 caratteri',
        'min_length' => 'Il cognome deve essere lungo almeno 3 caratteri'
    ],
    'membership' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare un abbonamento'
    ],
    'password' => [
        'min_length' => 'La password deve essere lunga almeno 8 caratteri',
        'required' => 'Devi inserire una password',
        'validPasswordLowercase' => 'La password deve contenere almeno una lettera minuscola',
        'validPasswordNumber' => 'La password deve contenere almeno un numero',
        'validPasswordSpecial' => 'La password deve contenere almeno uno dei seguenti caratteri speciali:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'La password deve contenere almeno una lettera maiuscola'
    ],
    'password_repeat' => [
        'matches' => 'Le password non corrispondono',
        'required' => 'Devi reinserire la password'
    ],
    'username' => [
        'is_unique' => 'Questo nome utente esiste già',
        'max_length' => 'Il nome utente non può superare i 50 caratteri',
        'min_length' => 'Il nome utente deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un nome utente'
    ]
];
