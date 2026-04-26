<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditEmail.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'required' => 'Debes ingresar una dirección de correo electrónico',
        'valid_email' => 'Debes ingresar una dirección de correo electrónico válida'
    ],
    'email_new' => [
        'is_unique' => 'Esta dirección de correo electrónico ya existe en la base de datos',
        'max_length' => 'La dirección de correo electrónico no puede tener más de 255 caracteres',
        'required' => 'Debes ingresar una dirección de correo electrónico',
        'valid_email' => 'Debes ingresar una dirección de correo electrónico válida'
    ],
    'password' => [
        'required' => 'Debes ingresar tu contraseña'
    ]
];
