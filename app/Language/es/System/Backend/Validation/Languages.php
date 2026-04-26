<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Languages.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'abbreviation' => [
        'max_length' => 'La abreviatura no puede tener más de 2 caracteres',
        'min_length' => 'La abreviatura debe tener al menos 2 caracteres',
        'required' => 'Debes ingresar una abreviatura'
    ],
    'active' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar si el idioma está activo'
    ],
    'flag' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar una bandera'
    ],
    'name' => [
        'max_length' => 'El nombre en %language_name% no puede tener más de 255 caracteres',
        'min_length' => 'El nombre en %language_name% debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un nombre en %language_name%'
    ]
];
