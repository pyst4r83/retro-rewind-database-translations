<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     ResetPassword.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
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
    ]
];
