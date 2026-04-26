<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Languages.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'abbreviation' => [
        'max_length' => 'A abreviação não pode ter mais de 2 caracteres',
        'min_length' => 'A abreviação deve ter pelo menos 2 caracteres',
        'required' => 'Você deve informar uma abreviação'
    ],
    'active' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar se o idioma está ativo'
    ],
    'flag' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar uma bandeira'
    ],
    'name' => [
        'max_length' => 'O nome em %language_name% não pode ter mais de 255 caracteres',
        'min_length' => 'O nome em %language_name% deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome em %language_name%'
    ]
];
