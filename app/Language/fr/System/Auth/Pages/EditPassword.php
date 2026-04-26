<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     EditPassword.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'alerts' => [
        'info' => [
            'password' => 'Utilisez un mot de passe d\'au moins 8 caractères, avec majuscules, minuscules, chiffres et caractères spéciaux pour une sécurité maximale.<br>Liste des caractères spéciaux : <small style="color: var(--neon-pink);">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Les champs marqués d\'un <strong class="body-color">*</strong> sont obligatoires'
        ]
    ],
    'form' => [
        'btn' => [
            'cancel' => 'Annuler',
            'update' => 'Changer le mot de passe'
        ],
        'label' => [
            'password' => 'Mot de passe actuel',
            'password_new' => 'Nouveau mot de passe',
            'password_new_repeat' => 'Confirmer le nouveau mot de passe'
        ],
        'placeholder' => [
            'password' => 'Entrez le mot de passe ici',
            'password_new' => 'Entrez le nouveau mot de passe ici',
            'password_new_repeat' => 'Répétez le nouveau mot de passe ici'
        ],
        'title' => [
            'password' => 'Changer le mot de passe'
        ]
    ],
    'meta' => [
        'seo' => [
            'index' => 'Modifier le mot de passe',
            'database' => 'Base de données'
        ]
    ],
    'nav' => [
        'title' => 'Mot de passe'
    ],
    'password_strength' => [
        'medium' => 'Moyen',
        'strength' => 'Force',
        'strong' => 'Fort',
        'very_strong' => 'Très fort',
        'weak' => 'Faible'
    ]
];
