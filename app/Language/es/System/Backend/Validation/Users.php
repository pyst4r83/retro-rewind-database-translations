<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Users.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'country' => [
        'in_list' => 'Tu selección no está en la lista de opciones'
    ],
    'email' => [
        'is_unique' => 'Esta dirección de correo electrónico ya existe',
        'max_length' => 'La dirección de correo electrónico no puede tener más de 255 caracteres',
        'min_length' => 'La dirección de correo electrónico debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar una dirección de correo electrónico',
        'valid_email' => 'Debes ingresar una dirección de correo electrónico válida'
    ],
    'end_date' => [
        'required' => 'Debes ingresar una fecha de finalización para la membresía',
        'valid_date' => 'La fecha de finalización de la membresía debe ser una fecha en formato Y-m-d'
    ],
    'firstname' => [
        'max_length' => 'El nombre no puede tener más de 255 caracteres',
        'min_length' => 'El nombre debe tener al menos 3 caracteres'
    ],
    'is_admin' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar si el usuario es administrador'
    ],
    'is_superadmin' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar si el usuario es superadministrador'
    ],
    'language' => [
        'in_list' => 'Tu selección no está en la lista de opciones'
    ],
    'lastname' => [
        'max_length' => 'El apellido no puede tener más de 255 caracteres',
        'min_length' => 'El apellido debe tener al menos 3 caracteres'
    ],
    'membership' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar una membresía'
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
