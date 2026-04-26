<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Register.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'email' => [
        'is_unique' => 'Esta dirección de correo electrónico ya existe',
        'max_length' => 'La dirección de correo electrónico no puede tener más de 255 caracteres',
        'min_length' => 'La dirección de correo electrónico debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar una dirección de correo electrónico',
        'valid_email' => 'Debes ingresar una dirección de correo electrónico válida'
    ],
    'password' => [
        'min_length' => 'La contraseña debe tener al menos 8 caracteres',
        'required' => 'Debes ingresar una contraseña',
        'validPasswordLowercase' => 'La contraseña debe contener al menos una letra minúscula',
        'validPasswordNumber' => 'La contraseña debe contener al menos un número',
        'validPasswordSpecial' => 'La contraseña debe contener al menos uno de los siguientes caracteres especiales:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'La contraseña debe contener al menos una letra mayúscula'
    ],
    'password_repeat' => [
        'matches' => 'Las contraseñas no coinciden',
        'required' => 'Debes volver a ingresar la contraseña'
    ],
    'username' => [
        'is_unique' => 'Este nombre de usuario ya existe',
        'max_length' => 'El nombre de usuario no puede tener más de 50 caracteres',
        'min_length' => 'El nombre de usuario debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un nombre de usuario'
    ]
];
