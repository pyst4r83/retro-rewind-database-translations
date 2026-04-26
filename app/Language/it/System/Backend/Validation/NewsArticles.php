<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     NewsArticles.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'category' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare una categoria'
    ],
    'content' => [
        'min_length' => 'Il contenuto in %language_name% deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un contenuto in %language_name%'
    ],
    'featured_image' => [
        'valid_url' => 'Devi inserire un URL valido'
    ],
    'published_at' => [
        'integer' => 'L\'input deve essere un numero'
    ],
    'source_link' => [
        'valid_url' => 'Devi inserire un URL valido'
    ],
    'steam_id' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni'
    ],
    'teaser' => [
        'min_length' => 'L\'anteprima deve essere lunga almeno 3 caratteri',
        'required' => 'Devi inserire un\'anteprima'
    ],
    'title' => [
        'max_length' => 'Il titolo in %language_name% non può superare i 255 caratteri',
        'min_length' => 'Il titolo in %language_name% deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un titolo in %language_name%'
    ]
];
