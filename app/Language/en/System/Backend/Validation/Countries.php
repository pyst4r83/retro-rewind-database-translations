<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Countries.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'flag' => [
        'is_image' => 'The file must be a valid image.',
        'max_size' => 'The image may not exceed 1 MB.',
        'mime_in' => 'Allowed formats: JPG, PNG, WebP.'
    ],
    'name' => [
        'max_length' => 'The name in %language_name% may not exceed 255 characters',
        'min_length' => 'The name in %language_name% must be at least 3 characters long',
        'required' => 'You must enter a name in %language_name%'
    ],
    'tag' => [
        'max_length' => 'The code may not exceed 2 characters',
        'min_length' => 'The code must be at least 2 characters long',
        'required' => 'You must enter a code'
    ],
    'status' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select whether the country is a favorite'
    ]
];
