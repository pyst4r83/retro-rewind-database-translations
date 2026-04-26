<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditUsername.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'username' => [
        'required' => 'Debes ingresar tu nombre de usuario actual'
    ],
    'username_new' => [
        'is_unique' => 'Este nombre de usuario ya existe',
        'max_length' => 'El nombre de usuario no puede tener más de 50 caracteres',
        'min_length' => 'El nombre de usuario debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un nombre de usuario'
    ]
];
