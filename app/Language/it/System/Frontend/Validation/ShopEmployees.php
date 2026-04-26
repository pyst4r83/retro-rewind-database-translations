<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopEmployees.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'favorite_movie' => [
        'max_length' => 'Il film preferito non può superare i 255 caratteri',
        'min_length' => 'Il film preferito deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un film preferito'
    ],
    'name' => [
        'max_length' => 'Il nome non può superare i 255 caratteri',
        'min_length' => 'Il nome deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un nome'
    ],
    'skill_checkout' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi selezionare il livello di abilità alla cassa'
    ],
    'skill_return' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi selezionare il livello di abilità alla stazione resi'
    ],
    'traits' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle caratteristiche aggiuntive',
        'required' => 'Devi selezionare una caratteristica aggiuntiva'
    ]
];
