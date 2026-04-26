<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Checkout.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'address' => [
        'max_length' => 'La dirección no puede tener más de 255 caracteres',
        'min_length' => 'La dirección debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar una dirección'
    ],
    'city' => [
        'max_length' => 'La ciudad no puede tener más de 255 caracteres',
        'min_length' => 'La ciudad debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar una ciudad'
    ],
    'country' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar un país'
    ],
    'firstname' => [
        'max_length' => 'El nombre no puede tener más de 50 caracteres',
        'min_length' => 'El nombre debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un nombre'
    ],
    'interval' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar un período de facturación'
    ],
    'lastname' => [
        'max_length' => 'El apellido no puede tener más de 50 caracteres',
        'min_length' => 'El apellido debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un apellido'
    ],
    'payment' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar un método de pago'
    ],
    'plan' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar una membresía'
    ],
    'zip_code' => [
        'max_length' => 'El código postal no puede tener más de 50 caracteres',
        'min_length' => 'El código postal debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un código postal'
    ]
];
