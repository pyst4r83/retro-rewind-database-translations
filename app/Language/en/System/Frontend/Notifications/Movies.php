<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Notifications
 * File:     Movies.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'already_confirmed' => 'This movie has already been rated and cannot be submitted again.',
        'already_rated' => 'This movie has already been rated and cannot be submitted again.',
        'copy' => 'Could not copy to clipboard',
        'display_case' => [
            'error' => 'Error saving showcase',
            'invalid_status' => 'Invalid showcase status',
            'movie_not_found' => 'Movie not found',
            'no_id' => 'No movie ID provided'
        ],
        'favorite' => [
            'error' => 'Error saving favorite',
            'invalid_status' => 'Invalid favorite status',
            'movie_not_found' => 'Movie not found',
            'no_id' => 'No movie ID provided'
        ],
        'inventory' => [
            'error' => 'Error saving inventory',
            'invalid_status' => 'Invalid inventory status',
            'movie_not_found' => 'Movie not found',
            'no_id' => 'No movie ID provided'
        ],
        'network' => 'Network error. Please try again later.',
        'not_found' => 'No movie found with this SKU.',
        'retry' => 'An error occurred. Please try again.',
        'save_failed' => 'Error saving rating.',
        'search' => 'Search error',
        'validation' => 'Please check your input.',
        'vote' => [
            'already_voted' => 'You have already voted for this movie in the last 24 hours!',
            'cooldown' => 'Cooldown',
            'error' => 'An error occurred',
            'error_saving' => 'Error saving',
            'movie_not_found' => 'Movie not found',
            'next_vote_in' => 'Next vote possible in',
            'no_id' => 'No movie ID provided',
            'not_counted' => 'Vote was not counted!'
        ]
    ],
    'success' => [
        'display_case' => [
            'add' => 'Added to showcase',
            'delete' => 'Removed from showcase'
        ],
        'favorite' => [
            'add' => 'Added to favorites',
            'delete' => 'Removed from favorites'
        ],
        'inventory' => [
            'add' => 'Added to inventory',
            'delete' => 'Removed from inventory'
        ],
        'rated' => 'Rating saved successfully!',
        'vote' => [
            'countdown_expired' => 'You can vote again now!',
            'counted' => 'Vote was counted!'
        ]
    ],
    'time' => [
        'and' => 'and',
        'hour_singular' => 'hour',
        'hour_plural' => 'hours',
        'less_than_minute' => 'less than a minute',
        'minute_singular' => 'minute',
        'minute_plural' => 'minutes',
        'second_singular' => 'second',
        'second_plural' => 'seconds',
        'timer' => 'Votes only every 24 hours'
    ]
];
