<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopBillings.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'customers_served_at_counter' => [
        'integer' => 'The input must be a number',
        'required' => 'You must enter how many customers were served at the counter'
    ],
    'day' => [
        'in_list' => 'Your selection is not in the list of days',
        'required' => 'You must select a day'
    ],
    'month' => [
        'in_list' => 'Your selection is not in the list of months',
        'required' => 'You must select a month'
    ],
    'movie_requests_fulfilled' => [
        'integer' => 'The input must be a number',
        'required' => 'You must enter how many movie requests you fulfilled'
    ],
    'movies_rented' => [
        'integer' => 'The input must be a number',
        'required' => 'You must enter how many movies were rented'
    ],
    'movies_returned' => [
        'integer' => 'The input must be a number',
        'required' => 'You must enter how many movies were returned'
    ],
    'movies_sold_income' => [
        'decimal' => 'The input must be a decimal number',
        'greater_than' => 'The input must be greater than 0',
        'required' => 'You must enter how much revenue was generated from selling movies'
    ],
    'rental_income' => [
        'decimal' => 'The input must be a decimal number',
        'greater_than' => 'The input must be greater than 0',
        'required' => 'You must enter how much revenue was generated from renting movies'
    ],
    'requests_fulfilled' => [
        'integer' => 'The input must be a number',
        'required' => 'You must enter how many requests you fulfilled'
    ],
    'reserved_movies_rented_to_customers' => [
        'integer' => 'The input must be a number',
        'required' => 'You must enter how many reserved movies you rented to customers'
    ],
    'snack_drinks_requests' => [
        'integer' => 'The input must be a number',
        'required' => 'You must enter how many snack & drink requests you fulfilled'
    ],
    'snacks_drinks_sold_income' => [
        'decimal' => 'The input must be a decimal number',
        'greater_than' => 'The input must be greater than 0',
        'required' => 'You must enter how much revenue was generated from selling snacks & drinks'
    ],
    'staff_expenses' => [
        'decimal' => 'The input must be a decimal number',
        'greater_than' => 'The input must be greater than 0',
        'required' => 'You must enter how much expenses were incurred for staff'
    ],
    'store_snacks_sold_income' => [
        'decimal' => 'The input must be a decimal number',
        'greater_than' => 'The input must be greater than 0',
        'required' => 'You must enter how much revenue was generated from selling store snacks'
    ],
    'year' => [
        'in_list' => 'Your selection is not in the list of years',
        'required' => 'You must select a year'
    ]
];
