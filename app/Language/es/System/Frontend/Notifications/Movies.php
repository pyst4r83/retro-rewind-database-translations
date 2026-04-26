<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Notifications
 * File:     Movies.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'already_confirmed' => 'Esta película ya ha sido calificada y no se puede enviar nuevamente.',
        'already_rated' => 'Esta película ya ha sido calificada y no se puede enviar nuevamente.',
        'copy' => 'No se pudo copiar al portapapeles',
        'display_case' => [
            'error' => 'Error al guardar la vitrina',
            'invalid_status' => 'Estado de vitrina inválido',
            'movie_not_found' => 'Película no encontrada',
            'no_id' => 'No se proporcionó ID de película'
        ],
        'favorite' => [
            'error' => 'Error al guardar favorito',
            'invalid_status' => 'Estado de favorito inválido',
            'movie_not_found' => 'Película no encontrada',
            'no_id' => 'No se proporcionó ID de película'
        ],
        'inventory' => [
            'error' => 'Error al guardar inventario',
            'invalid_status' => 'Estado de inventario inválido',
            'movie_not_found' => 'Película no encontrada',
            'no_id' => 'No se proporcionó ID de película'
        ],
        'network' => 'Error de red. Por favor, inténtelo más tarde.',
        'not_found' => 'No se encontró ninguna película con este SKU.',
        'retry' => 'Ocurrió un error. Por favor, inténtalo de nuevo.',
        'save_failed' => 'Error al guardar la calificación.',
        'search' => 'Error de búsqueda',
        'validation' => 'Por favor, revisa tus datos.',
        'vote' => [
            'already_voted' => '¡Ya has votado por esta película en las últimas 24 horas!',
            'cooldown' => 'Tiempo de espera',
            'error' => 'Ocurrió un error',
            'error_saving' => 'Error al guardar',
            'movie_not_found' => 'Película no encontrada',
            'next_vote_in' => 'Próximo voto posible en',
            'no_id' => 'No se proporcionó ID de película',
            'not_counted' => '¡El voto no fue contado!'
        ]
    ],
    'success' => [
        'display_case' => [
            'add' => 'Agregado a la vitrina',
            'delete' => 'Eliminado de la vitrina'
        ],
        'favorite' => [
            'add' => 'Agregado a favoritos',
            'delete' => 'Eliminado de favoritos'
        ],
        'inventory' => [
            'add' => 'Agregado al inventario',
            'delete' => 'Eliminado del inventario'
        ],
        'rated' => '¡Calificación guardada exitosamente!',
        'vote' => [
            'countdown_expired' => '¡Ya puedes votar de nuevo!',
            'counted' => '¡El voto fue contado!'
        ]
    ],
    'time' => [
        'and' => 'y',
        'hour_singular' => 'hora',
        'hour_plural' => 'horas',
        'less_than_minute' => 'menos de un minuto',
        'minute_singular' => 'minuto',
        'minute_plural' => 'minutos',
        'second_singular' => 'segundo',
        'second_plural' => 'segundos',
        'timer' => 'Votos solo cada 24 horas'
    ]
];
