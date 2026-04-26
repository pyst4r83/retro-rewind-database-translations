<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditSettings.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'twofa_code' => [
        'length' => 'O código de autenticação deve ter exatamente 6 dígitos.',
        'numeric' => 'O código de autenticação pode conter apenas números.',
        'required' => 'Por favor, insira o código de autenticação.'
    ],
    'twofa_enabled' => [
        'in_list' => 'Opção inválida selecionada para autenticação de dois fatores',
        'required' => 'Por favor, selecione se a autenticação de dois fatores deve ser ativada'
    ]
];
