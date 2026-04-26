<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditUsername.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'username' => [
        'required' => 'Você deve informar seu nome de usuário atual'
    ],
    'username_new' => [
        'is_unique' => 'Este nome de usuário já existe',
        'max_length' => 'O nome de usuário não pode ter mais de 50 caracteres',
        'min_length' => 'O nome de usuário deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome de usuário'
    ]
];
