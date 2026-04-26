<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     ResetPassword.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'password' => [
        'min_length' => 'Le mot de passe doit comporter au moins 8 caractères',
        'required' => 'Vous devez saisir un mot de passe',
        'validPasswordLowercase' => 'Le mot de passe doit contenir au moins une lettre minuscule',
        'validPasswordNumber' => 'Le mot de passe doit contenir au moins un chiffre',
        'validPasswordSpecial' => 'Le mot de passe doit contenir au moins l\'un des caractères spéciaux suivants :<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'Le mot de passe doit contenir au moins une lettre majuscule'
    ],
    'password_repeat' => [
        'matches' => 'Les mots de passe ne correspondent pas',
        'required' => 'Vous devez resaisir le mot de passe'
    ]
];
