<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Languages.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'abbreviation' => [
        'max_length' => 'The abbreviation may not exceed 2 characters',
        'min_length' => 'The abbreviation must be at least 2 characters long',
        'required' => 'You must enter an abbreviation'
    ],
    'active' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select whether the language is active'
    ],
    'flag' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a flag'
    ],
    'name' => [
        'max_length' => 'The name in %language_name% may not exceed 255 characters',
        'min_length' => 'The name in %language_name% must be at least 3 characters long',
        'required' => 'You must enter a name in %language_name%'
    ]
];
