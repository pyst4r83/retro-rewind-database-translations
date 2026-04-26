<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditPassword.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'password' => [
        'required' => 'Debes ingresar tu contraseña actual'
    ],
    'password_new' => [
        'min_length' => 'La contraseña debe tener al menos 8 caracteres',
        'required' => 'Debes ingresar una contraseña',
        'validPasswordLowercase' => 'La contraseña debe contener al menos una letra minúscula',
        'validPasswordNumber' => 'La contraseña debe contener al menos un número',
        'validPasswordSpecial' => 'La contraseña debe contener al menos uno de los siguientes caracteres especiales:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'La contraseña debe contener al menos una letra mayúscula'
    ],
    'password_new_repeat' => [
        'matches' => 'Las contraseñas no coinciden',
        'required' => 'Debes volver a ingresar la contraseña'
    ]
];
