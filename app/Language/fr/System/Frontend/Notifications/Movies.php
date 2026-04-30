<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Notifications
 * File:     Movies.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'already_confirmed' => 'Ce film a déjà été noté et ne peut pas être soumis à nouveau.',
        'already_rated' => 'Ce film a déjà été noté et ne peut pas être soumis à nouveau.',
        'copy' => 'Impossible de copier dans le presse-papiers',
        'display_case' => [
            'error' => 'Erreur lors de l\'enregistrement de la vitrine',
            'invalid_status' => 'Statut de vitrine invalide',
            'movie_not_found' => 'Film non trouvé',
            'no_id' => 'Aucun ID de film fourni'
        ],
        'favorite' => [
            'error' => 'Erreur lors de l\'enregistrement du favori',
            'invalid_status' => 'Statut de favori invalide',
            'movie_not_found' => 'Film non trouvé',
            'no_id' => 'Aucun ID de film fourni'
        ],
        'inventory' => [
            'error' => 'Erreur lors de l\'enregistrement de l\'inventaire',
            'invalid_status' => 'Statut d\'inventaire invalide',
            'movie_not_found' => 'Film non trouvé',
            'no_id' => 'Aucun ID de film fourni'
        ],
        'movies_not_found' => 'Aucun film trouvé',
        'network' => 'Erreur réseau. Veuillez réessayer plus tard.',
        'not_found' => 'Aucun film trouvé avec ce SKU.',
        'retry' => 'Une erreur est survenue. Veuillez réessayer.',
        'save_failed' => 'Erreur lors de l\'enregistrement de la note.',
        'search' => 'Erreur de recherche',
        'validation' => 'Veuillez vérifier vos saisies.',
        'vote' => [
            'already_voted' => 'Vous avez déjà voté pour ce film au cours des dernières 24 heures !',
            'cooldown' => 'Temps d\'attente',
            'error' => 'Une erreur est survenue',
            'error_saving' => 'Erreur lors de l\'enregistrement',
            'movie_not_found' => 'Film non trouvé',
            'next_vote_in' => 'Prochain vote possible dans',
            'no_id' => 'Aucun ID de film fourni',
            'not_counted' => 'Le vote n\'a pas été compté !'
        ]
    ],
    'success' => [
        'display_case' => [
            'add' => 'Ajouté à la vitrine',
            'delete' => 'Retiré de la vitrine'
        ],
        'favorite' => [
            'add' => 'Ajouté aux favoris',
            'delete' => 'Retiré des favoris'
        ],
        'inventory' => [
            'add' => 'Ajouté à l\'inventaire',
            'delete' => 'Retiré de l\'inventaire'
        ],
        'rated' => 'Note enregistrée avec succès !',
        'vote' => [
            'countdown_expired' => 'Vous pouvez voter à nouveau maintenant !',
            'counted' => 'Le vote a été compté !'
        ]
    ],
    'time' => [
        'and' => 'et',
        'hour_singular' => 'heure',
        'hour_plural' => 'heures',
        'less_than_minute' => 'moins d\'une minute',
        'minute_singular' => 'minute',
        'minute_plural' => 'minutes',
        'second_singular' => 'seconde',
        'second_plural' => 'secondes',
        'timer' => 'Votes uniquement toutes les 24 heures'
    ]
];
