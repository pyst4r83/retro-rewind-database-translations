<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Countries.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'flag' => [
        'is_image' => 'O arquivo deve ser uma imagem válida.',
        'max_size' => 'A imagem não pode exceder 1 MB.',
        'mime_in' => 'Formatos permitidos: JPG, PNG, WebP.'
    ],
    'name' => [
        'max_length' => 'O nome em %language_name% não pode ter mais de 255 caracteres',
        'min_length' => 'O nome em %language_name% deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome em %language_name%'
    ],
    'tag' => [
        'max_length' => 'O código não pode ter mais de 2 caracteres',
        'min_length' => 'O código deve ter pelo menos 2 caracteres',
        'required' => 'Você deve informar um código'
    ],
    'status' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar se o país é um favorito'
    ]
];
