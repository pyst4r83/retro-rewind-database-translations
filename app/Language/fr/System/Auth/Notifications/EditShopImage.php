<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditShopImage.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'Aucune image disponible pour suppression',
        'file_aspect_ratio' => 'L\'image doit avoir un rapport d\'aspect 16:9',
        'file_dimensions' => 'L\'image doit faire au moins %minWidth% x %minHeight% pixels. Taille actuelle : %imageWidth% x %imageHeight% px',
        'file_size' => 'Le fichier est trop volumineux. Maximum 2 Mo autorisé',
        'file_type' => 'Type de fichier invalide. Les types autorisés sont JPG, PNG et WebP',
        'edit' => 'L\'image de la boutique n\'a pas pu être mise à jour',
        'no_file' => 'Aucun fichier sélectionné ou fichier invalide',
        'nothing_changed' => 'Image de la boutique non sauvegardée. Aucune modification n\'a été apportée',
        'saving' => 'Erreur lors de l\'enregistrement du fichier : %error%',
        'upload_failed' => 'Erreur lors du téléchargement du fichier. Veuillez réessayer'
    ],
    'success' => [
        'delete' => 'Image de la boutique supprimée avec succès',
        'edit' => 'Image de la boutique mise à jour avec succès'
    ]
];
