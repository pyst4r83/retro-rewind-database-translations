<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     NewsArticles.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'category' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a category'
    ],
    'content' => [
        'min_length' => 'The content in %language_name% must be at least 3 characters long',
        'required' => 'You must enter content in %language_name%'
    ],
    'featured_image' => [
        'valid_url' => 'You must enter a valid URL'
    ],
    'published_at' => [
        'integer' => 'The input must be a number'
    ],
    'source_link' => [
        'valid_url' => 'You must enter a valid URL'
    ],
    'steam_id' => [
        'in_list' => 'Your selection is not in the list of options'
    ],
    'teaser' => [
        'min_length' => 'The teaser must be at least 3 characters long',
        'required' => 'You must enter a teaser'
    ],
    'title' => [
        'max_length' => 'The title in %language_name% may not exceed 255 characters',
        'min_length' => 'The title in %language_name% must be at least 3 characters long',
        'required' => 'You must enter a title in %language_name%'
    ]
];
