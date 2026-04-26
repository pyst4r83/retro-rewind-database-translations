<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Checkout.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'address' => [
        'max_length' => 'O endereço não pode ter mais de 255 caracteres',
        'min_length' => 'O endereço deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um endereço'
    ],
    'city' => [
        'max_length' => 'A cidade não pode ter mais de 255 caracteres',
        'min_length' => 'A cidade deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar uma cidade'
    ],
    'country' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar um país'
    ],
    'firstname' => [
        'max_length' => 'O nome não pode ter mais de 50 caracteres',
        'min_length' => 'O nome deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome'
    ],
    'interval' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar um período de faturamento'
    ],
    'lastname' => [
        'max_length' => 'O sobrenome não pode ter mais de 50 caracteres',
        'min_length' => 'O sobrenome deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um sobrenome'
    ],
    'payment' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar uma forma de pagamento'
    ],
    'plan' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar uma assinatura'
    ],
    'zip_code' => [
        'max_length' => 'O CEP não pode ter mais de 50 caracteres',
        'min_length' => 'O CEP deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um CEP'
    ]
];
