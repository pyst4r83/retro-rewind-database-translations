<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditEmail.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'required' => 'Você deve informar um endereço de e-mail',
        'valid_email' => 'Você deve informar um endereço de e-mail válido'
    ],
    'email_new' => [
        'is_unique' => 'Este endereço de e-mail já existe no banco de dados',
        'max_length' => 'O endereço de e-mail não pode ter mais de 255 caracteres',
        'required' => 'Você deve informar um endereço de e-mail',
        'valid_email' => 'Você deve informar um endereço de e-mail válido'
    ],
    'password' => [
        'required' => 'Você deve informar sua senha'
    ]
];
