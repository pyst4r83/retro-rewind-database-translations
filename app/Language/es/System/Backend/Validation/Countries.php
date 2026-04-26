<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Countries.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'flag' => [
        'is_image' => 'El archivo debe ser una imagen válida.',
        'max_size' => 'La imagen no puede superar 1 MB.',
        'mime_in' => 'Formatos permitidos: JPG, PNG, WebP.'
    ],
    'name' => [
        'max_length' => 'El nombre en %language_name% no puede tener más de 255 caracteres',
        'min_length' => 'El nombre en %language_name% debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un nombre en %language_name%'
    ],
    'tag' => [
        'max_length' => 'El código no puede tener más de 2 caracteres',
        'min_length' => 'El código debe tener al menos 2 caracteres',
        'required' => 'Debes ingresar un código'
    ],
    'status' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar si el país es un favorito'
    ]
];
