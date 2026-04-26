<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditShopProfile.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'shop_currency' => [
        'in_list' => 'Sua seleção não está na lista de opções'
    ],
    'shop_font' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar uma fonte para a loja'
    ],
    'shop_font_color' => [
        'max_length' => 'A cor do texto da loja não pode ter mais de 10 caracteres',
        'required' => 'Você deve selecionar uma cor para o texto da loja'
    ],
    'shop_font_text_shadow_color' => [
        'max_length' => 'A cor da sombra do texto da loja não pode ter mais de 10 caracteres',
        'required' => 'Você deve selecionar uma cor para a sombra do texto da loja'
    ],
    'shop_language' => [
        'in_list' => 'Sua seleção não está na lista de opções'
    ],
    'shop_name' => [
        'max_length' => 'O nome da loja não pode ter mais de 255 caracteres',
        'min_length' => 'O nome da loja deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome para a loja'
    ],
    'shop_timezone' => [
        'in_list' => 'Sua seleção não está na lista de opções'
    ]
];
