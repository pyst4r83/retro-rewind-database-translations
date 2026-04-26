<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Countries.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'flag' => [
        'is_image' => 'Il file deve essere un\'immagine valida.',
        'max_size' => 'L\'immagine non può superare 1 MB.',
        'mime_in' => 'Formati consentiti: JPG, PNG, WebP.'
    ],
    'name' => [
        'max_length' => 'Il nome in %language_name% non può superare i 255 caratteri',
        'min_length' => 'Il nome in %language_name% deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un nome in %language_name%'
    ],
    'tag' => [
        'max_length' => 'Il codice non può superare i 2 caratteri',
        'min_length' => 'Il codice deve essere lungo almeno 2 caratteri',
        'required' => 'Devi inserire un codice'
    ],
    'status' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare se il paese è un preferito'
    ]
];
