<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Register.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'is_unique' => 'Este endereço de e-mail já existe',
        'max_length' => 'O endereço de e-mail não pode ter mais de 255 caracteres',
        'min_length' => 'O endereço de e-mail deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um endereço de e-mail',
        'valid_email' => 'Você deve informar um endereço de e-mail válido'
    ],
    'password' => [
        'min_length' => 'A senha deve ter pelo menos 8 caracteres',
        'required' => 'Você deve informar uma senha',
        'validPasswordLowercase' => 'A senha deve conter pelo menos uma letra minúscula',
        'validPasswordNumber' => 'A senha deve conter pelo menos um número',
        'validPasswordSpecial' => 'A senha deve conter pelo menos um dos seguintes caracteres especiais:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'A senha deve conter pelo menos uma letra maiúscula'
    ],
    'password_repeat' => [
        'matches' => 'As senhas não coincidem',
        'required' => 'Você deve informar a senha novamente'
    ],
    'username' => [
        'is_unique' => 'Este nome de usuário já existe',
        'max_length' => 'O nome de usuário não pode ter mais de 50 caracteres',
        'min_length' => 'O nome de usuário deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome de usuário'
    ]
];
