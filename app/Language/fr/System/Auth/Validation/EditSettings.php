<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditSettings.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'twofa_code' => [
        'length' => 'Le code d\'authentification doit comporter exactement 6 chiffres.',
        'numeric' => 'Le code d\'authentification ne peut contenir que des chiffres.',
        'required' => 'Veuillez saisir le code d\'authentification.'
    ],
    'twofa_enabled' => [
        'in_list' => 'Option non valide sélectionnée pour l\'authentification à deux facteurs',
        'required' => 'Veuillez sélectionner si l\'authentification à deux facteurs doit être activée'
    ]
];
