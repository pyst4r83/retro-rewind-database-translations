<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Faq.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'answer' => [
        'max_length' => 'The answer in %language_name% may not exceed 255 characters',
        'min_length' => 'The answer in %language_name% must be at least 3 characters long',
        'required' => 'You must enter an answer in %language_name%'
    ],
    'category' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a category'
    ],
    'question' => [
        'max_length' => 'The question in %language_name% may not exceed 255 characters',
        'min_length' => 'The question in %language_name% must be at least 3 characters long',
        'required' => 'You must enter a question in %language_name%'
    ]
];
