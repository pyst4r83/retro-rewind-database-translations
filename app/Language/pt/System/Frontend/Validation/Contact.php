<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     Contact.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'max_length' => 'O endereço de e-mail não pode ter mais de 255 caracteres',
        'min_length' => 'O endereço de e-mail deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um endereço de e-mail'
    ],
    'message' => [
        'min_length' => 'A mensagem deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar uma mensagem'
    ],
    'subject' => [
        'max_length' => 'O assunto não pode ter mais de 255 caracteres',
        'min_length' => 'O assunto deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um assunto'
    ],
    'username' => [
        'max_length' => 'O nome de usuário não pode ter mais de 255 caracteres',
        'min_length' => 'O nome de usuário deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome de usuário'
    ]
];
