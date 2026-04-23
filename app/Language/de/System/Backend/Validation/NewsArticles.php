<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     NewsArticles.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'category' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst eine Kategorie auswählen'
    ],
    'content' => [
        'min_length' => 'Der Inhalt in %language_name% muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Inhalt in %language_name% eingeben'
    ],
    'featured_image' => [
        'valid_url' => 'Du musst eine valide Url eingeben'
    ],
    'published_at' => [
        'integer' => 'Die Eingabe muss eine Zahl sein'
    ],
    'source_link' => [
        'valid_url' => 'Du musst eine valide Url eingeben'
    ],
    'steam_id' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten'
    ],
    'teaser' => [
        'min_length' => 'Der Teaser muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Teaser eingeben'
    ],
    'title' => [
        'max_length' => 'Der Titel in %language_name% darf maximal 255 Zeichen lang sein',
        'min_length' => 'Der Titel in %language_name% muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Titel in %language_name% eingeben'
    ]
];
