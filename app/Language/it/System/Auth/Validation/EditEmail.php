<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditEmail.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'required' => 'Devi inserire un indirizzo email',
        'valid_email' => 'Devi inserire un indirizzo email valido'
    ],
    'email_new' => [
        'is_unique' => 'Questo indirizzo email esiste già nel database',
        'max_length' => 'L\'indirizzo email non può superare i 255 caratteri',
        'required' => 'Devi inserire un indirizzo email',
        'valid_email' => 'Devi inserire un indirizzo email valido'
    ],
    'password' => [
        'required' => 'Devi inserire la tua password'
    ]
];
