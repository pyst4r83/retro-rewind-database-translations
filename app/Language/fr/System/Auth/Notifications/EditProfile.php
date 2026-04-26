<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditProfile.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'Aucun avatar disponible pour suppression',
        'edit' => 'Le profil n\'a pas pu être mis à jour',
        'file_aspect_ratio' => 'L\'avatar doit avoir un rapport d\'aspect 1:1',
        'file_dimensions' => 'L\'avatar doit faire au moins %minWidth% x %minHeight% pixels. Taille actuelle : %imageWidth% x %imageHeight% px',
        'file_size' => 'Le fichier est trop volumineux. Maximum 1 Mo autorisé',
        'file_type' => 'Type de fichier invalide. Les types autorisés sont JPG, PNG et WebP',
        'no_file' => 'Aucun fichier sélectionné ou fichier invalide',
        'nothing_changed' => 'Profil non sauvegardé. Aucune modification n\'a été apportée',
        'saving' => 'Erreur lors de l\'enregistrement du fichier : %error%'
    ],
    'success' => [
        'delete' => 'Avatar supprimé avec succès',
        'edit' => 'Profil mis à jour avec succès'
    ]
];
