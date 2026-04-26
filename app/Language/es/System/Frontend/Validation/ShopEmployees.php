<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopEmployees.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'favorite_movie' => [
        'max_length' => 'La película favorita no puede tener más de 255 caracteres',
        'min_length' => 'La película favorita debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar una película favorita'
    ],
    'name' => [
        'max_length' => 'El nombre no puede tener más de 255 caracteres',
        'min_length' => 'El nombre debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un nombre'
    ],
    'skill_checkout' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes seleccionar el nivel de habilidad en la caja'
    ],
    'skill_return' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes seleccionar el nivel de habilidad en la estación de devolución'
    ],
    'traits' => [
        'in_list' => 'Tu selección no está en la lista de rasgos adicionales',
        'required' => 'Debes seleccionar un rasgo adicional'
    ]
];
