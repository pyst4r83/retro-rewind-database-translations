<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Register.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'is_unique' => 'Questo indirizzo email esiste già',
        'max_length' => 'L\'indirizzo email non può superare i 255 caratteri',
        'min_length' => 'L\'indirizzo email deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un indirizzo email',
        'valid_email' => 'Devi inserire un indirizzo email valido'
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
