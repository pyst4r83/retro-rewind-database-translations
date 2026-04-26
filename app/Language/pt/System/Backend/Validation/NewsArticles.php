<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     NewsArticles.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'category' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar uma categoria'
    ],
    'content' => [
        'min_length' => 'O conteúdo em %language_name% deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um conteúdo em %language_name%'
    ],
    'featured_image' => [
        'valid_url' => 'Você deve informar uma URL válida'
    ],
    'published_at' => [
        'integer' => 'A entrada deve ser um número'
    ],
    'source_link' => [
        'valid_url' => 'Você deve informar uma URL válida'
    ],
    'steam_id' => [
        'in_list' => 'Sua seleção não está na lista de opções'
    ],
    'teaser' => [
        'min_length' => 'O resumo deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um resumo'
    ],
    'title' => [
        'max_length' => 'O título em %language_name% não pode ter mais de 255 caracteres',
        'min_length' => 'O título em %language_name% deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um título em %language_name%'
    ]
];
