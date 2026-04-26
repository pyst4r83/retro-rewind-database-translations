<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditShopProfile.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'shop_currency' => [
        'in_list' => 'Tu selección no está en la lista de opciones'
    ],
    'shop_font' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar una fuente para la tienda'
    ],
    'shop_font_color' => [
        'max_length' => 'El color del texto de la tienda no puede tener más de 10 caracteres',
        'required' => 'Debes seleccionar un color para el texto de la tienda'
    ],
    'shop_font_text_shadow_color' => [
        'max_length' => 'El color de la sombra del texto de la tienda no puede tener más de 10 caracteres',
        'required' => 'Debes seleccionar un color para la sombra del texto de la tienda'
    ],
    'shop_language' => [
        'in_list' => 'Tu selección no está en la lista de opciones'
    ],
    'shop_name' => [
        'max_length' => 'El nombre de la tienda no puede tener más de 255 caracteres',
        'min_length' => 'El nombre de la tienda debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un nombre para la tienda'
    ],
    'shop_timezone' => [
        'in_list' => 'Tu selección no está en la lista de opciones'
    ]
];
