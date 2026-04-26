<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditUsername.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'username' => [
        'required' => 'Devi inserire il tuo nome utente attuale'
    ],
    'username_new' => [
        'is_unique' => 'Questo nome utente esiste già',
        'max_length' => 'Il nome utente non può superare i 50 caratteri',
        'min_length' => 'Il nome utente deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un nome utente'
    ]
];
