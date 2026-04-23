<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopBillings.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'customers_served_at_counter' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst eingeben wieviele Kunden an der Kasse bedient wurden'
    ],
    'day' => [
        'in_list' => 'Deine Auswahl ist nicht in der Liste der Tage enthalten',
        'required' => 'Du musst einen Tag auswählen'
    ],
    'month' => [
        'in_list' => 'Deine Auswahl ist nicht in der Liste der Monate enthalten',
        'required' => 'Du musst einen Monat auswählen'
    ],
    'movie_requests_fulfilled' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst eingeben wieviele Filmanfragen du erfüllt hast'
    ],
    'movies_rented' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst eingeben wieviele Filme verliehen wurden'
    ],
    'movies_returned' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst eingeben wieviele Filme zurückgegeben wurden'
    ],
    'movies_sold_income' => [
        'decimal' => 'Die Eingabe muss eine Dezimalzahl sein',
        'greater_than' => 'Die Eingabe muss größer 0 sein',
        'required' => 'Du musst eingeben wieviel Einnahmen durch den Verkauf von Filmen entstanden sind'
    ],
    'rental_income' => [
        'decimal' => 'Die Eingabe muss eine Dezimalzahl sein',
        'greater_than' => 'Die Eingabe muss größer 0 sein',
        'required' => 'Du musst eingeben wieviel Einnahmen durch den Verleih von Filmen entstanden sind'
    ],
    'requests_fulfilled' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst eingeben wieviele Anfragen du erfüllt hast'
    ],
    'reserved_movies_rented_to_customers' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst eingeben wieviele Reservierte Filme du an Kunden verliehen hast'
    ],
    'snack_drinks_requests' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst eingeben wieviele Snack & Drinks Anfragen du erfüllt hast'
    ],
    'snacks_drinks_sold_income' => [
        'decimal' => 'Die Eingabe muss eine Dezimalzahl sein',
        'greater_than' => 'Die Eingabe muss größer 0 sein',
        'required' => 'Du musst eingeben wieviel Einnahmen durch den Verkauf von Snacks & Drinks entstanden sind'
    ],
    'staff_expenses' => [
        'decimal' => 'Die Eingabe muss eine Dezimalzahl sein',
        'greater_than' => 'Die Eingabe muss größer 0 sein',
        'required' => 'Du musst eingeben wieviel Ausgaben durch Mitarbeiter entstanden sind'
    ],
    'store_snacks_sold_income' => [
        'decimal' => 'Die Eingabe muss eine Dezimalzahl sein',
        'greater_than' => 'Die Eingabe muss größer 0 sein',
        'required' => 'Du musst eingeben wieviel Einnahmen durch den Verkauf von Shop Snacks entstanden sind'
    ],
    'year' => [
        'in_list' => 'Deine Auswahl ist nicht in der Liste der Jahre enthalten',
        'required' => 'Du musst ein Jahr auswählen'
    ]
];
