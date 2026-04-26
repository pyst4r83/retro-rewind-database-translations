<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopBillings.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'customers_served_at_counter' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi inserire quanti clienti sono stati serviti alla cassa'
    ],
    'day' => [
        'in_list' => 'La tua selezione non è nell\'elenco dei giorni',
        'required' => 'Devi selezionare un giorno'
    ],
    'month' => [
        'in_list' => 'La tua selezione non è nell\'elenco dei mesi',
        'required' => 'Devi selezionare un mese'
    ],
    'movie_requests_fulfilled' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi inserire quante richieste di film hai soddisfatto'
    ],
    'movies_rented' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi inserire quanti film sono stati noleggiati'
    ],
    'movies_returned' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi inserire quanti film sono stati restituiti'
    ],
    'movies_sold_income' => [
        'decimal' => 'Il valore deve essere un numero decimale',
        'greater_than' => 'Il valore deve essere maggiore di 0',
        'required' => 'Devi inserire quante entrate sono state generate dalla vendita di film'
    ],
    'rental_income' => [
        'decimal' => 'Il valore deve essere un numero decimale',
        'greater_than' => 'Il valore deve essere maggiore di 0',
        'required' => 'Devi inserire quante entrate sono state generate dal noleggio di film'
    ],
    'requests_fulfilled' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi inserire quante richieste hai soddisfatto'
    ],
    'reserved_movies_rented_to_customers' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi inserire quanti film prenotati hai noleggiato ai clienti'
    ],
    'snack_drinks_requests' => [
        'integer' => 'Il valore deve essere un numero',
        'required' => 'Devi inserire quante richieste di snack e bevande hai soddisfatto'
    ],
    'snacks_drinks_sold_income' => [
        'decimal' => 'Il valore deve essere un numero decimale',
        'greater_than' => 'Il valore deve essere maggiore di 0',
        'required' => 'Devi inserire quante entrate sono state generate dalla vendita di snack e bevande'
    ],
    'staff_expenses' => [
        'decimal' => 'Il valore deve essere un numero decimale',
        'greater_than' => 'Il valore deve essere maggiore di 0',
        'required' => 'Devi inserire quante spese sono state sostenute per il personale'
    ],
    'store_snacks_sold_income' => [
        'decimal' => 'Il valore deve essere un numero decimale',
        'greater_than' => 'Il valore deve essere maggiore di 0',
        'required' => 'Devi inserire quante entrate sono state generate dalla vendita di snack del negozio'
    ],
    'year' => [
        'in_list' => 'La tua selezione non è nell\'elenco degli anni',
        'required' => 'Devi selezionare un anno'
    ]
];
