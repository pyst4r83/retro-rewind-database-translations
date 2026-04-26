<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Checkout.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'address' => [
        'max_length' => 'L\'indirizzo non può superare i 255 caratteri',
        'min_length' => 'L\'indirizzo deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un indirizzo'
    ],
    'city' => [
        'max_length' => 'La città non può superare i 255 caratteri',
        'min_length' => 'La città deve essere lunga almeno 3 caratteri',
        'required' => 'Devi inserire una città'
    ],
    'country' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare un paese'
    ],
    'firstname' => [
        'max_length' => 'Il nome non può superare i 50 caratteri',
        'min_length' => 'Il nome deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un nome'
    ],
    'interval' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare un periodo di fatturazione'
    ],
    'lastname' => [
        'max_length' => 'Il cognome non può superare i 50 caratteri',
        'min_length' => 'Il cognome deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un cognome'
    ],
    'payment' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare un metodo di pagamento'
    ],
    'plan' => [
        'in_list' => 'La tua selezione non è nell\'elenco delle opzioni',
        'required' => 'Devi selezionare un abbonamento'
    ],
    'zip_code' => [
        'max_length' => 'Il CAP non può superare i 50 caratteri',
        'min_length' => 'Il CAP deve essere lungo almeno 3 caratteri',
        'required' => 'Devi inserire un CAP'
    ]
];
