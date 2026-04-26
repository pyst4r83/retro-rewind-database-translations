<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditPassword.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'password' => [
        'required' => 'Devi inserire la tua password attuale'
    ],
    'password_new' => [
        'min_length' => 'La password deve essere lunga almeno 8 caratteri',
        'required' => 'Devi inserire una password',
        'validPasswordLowercase' => 'La password deve contenere almeno una lettera minuscola',
        'validPasswordNumber' => 'La password deve contenere almeno un numero',
        'validPasswordSpecial' => 'La password deve contenere almeno uno dei seguenti caratteri speciali:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'La password deve contenere almeno una lettera maiuscola'
    ],
    'password_new_repeat' => [
        'matches' => 'Le password non corrispondono',
        'required' => 'Devi reinserire la password'
    ]
];
