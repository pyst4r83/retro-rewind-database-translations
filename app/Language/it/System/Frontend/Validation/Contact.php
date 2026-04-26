<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     Contact.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'max_length' => 'L\'indirizzo email non può superare i 255 caratteri',
        'min_length' => 'L\'indirizzo email deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un indirizzo email'
    ],
    'message' => [
        'min_length' => 'Il messaggio deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un messaggio'
    ],
    'subject' => [
        'max_length' => 'L\'oggetto non può superare i 255 caratteri',
        'min_length' => 'L\'oggetto deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un oggetto'
    ],
    'username' => [
        'max_length' => 'Il nome utente non può superare i 255 caratteri',
        'min_length' => 'Il nome utente deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un nome utente'
    ]
];
