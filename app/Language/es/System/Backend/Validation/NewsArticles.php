<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     NewsArticles.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'category' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar una categoría'
    ],
    'content' => [
        'min_length' => 'El contenido en %language_name% debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar contenido en %language_name%'
    ],
    'featured_image' => [
        'valid_url' => 'Debes ingresar una URL válida'
    ],
    'published_at' => [
        'integer' => 'La entrada debe ser un número'
    ],
    'source_link' => [
        'valid_url' => 'Debes ingresar una URL válida'
    ],
    'steam_id' => [
        'in_list' => 'Tu selección no está en la lista de opciones'
    ],
    'teaser' => [
        'min_length' => 'El resumen debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un resumen'
    ],
    'title' => [
        'max_length' => 'El título en %language_name% no puede tener más de 255 caracteres',
        'min_length' => 'El título en %language_name% debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un título en %language_name%'
    ]
];
