<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopEmployees.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'favorite_movie' => [
        'max_length' => 'The favorite movie may not exceed 255 characters',
        'min_length' => 'The favorite movie must be at least 3 characters long',
        'required' => 'You must enter a favorite movie'
    ],
    'name' => [
        'max_length' => 'The name may not exceed 255 characters',
        'min_length' => 'The name must be at least 3 characters long',
        'required' => 'You must enter a name'
    ],
    'skill_checkout' => [
        'integer' => 'The input must be a number',
        'required' => 'You must select the skill level at the checkout'
    ],
    'skill_return' => [
        'integer' => 'The input must be a number',
        'required' => 'You must select the skill level at the return station'
    ],
    'traits' => [
        'in_list' => 'Your selection is not in the list of additional traits',
        'required' => 'You must select an additional trait'
    ]
];
