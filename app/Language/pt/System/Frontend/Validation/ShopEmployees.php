<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopEmployees.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'favorite_movie' => [
        'max_length' => 'O filme favorito não pode ter mais de 255 caracteres',
        'min_length' => 'O filme favorito deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um filme favorito'
    ],
    'name' => [
        'max_length' => 'O nome não pode ter mais de 255 caracteres',
        'min_length' => 'O nome deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome'
    ],
    'skill_checkout' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar o nível de habilidade no caixa'
    ],
    'skill_return' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar o nível de habilidade na estação de devolução'
    ],
    'traits' => [
        'in_list' => 'Sua seleção não está na lista de características adicionais',
        'required' => 'Você deve selecionar uma característica adicional'
    ]
];
