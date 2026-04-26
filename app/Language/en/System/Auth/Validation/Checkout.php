<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     Checkout.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'address' => [
        'max_length' => 'The address may not exceed 255 characters',
        'min_length' => 'The address must be at least 3 characters long',
        'required' => 'You must enter an address'
    ],
    'city' => [
        'max_length' => 'The city may not exceed 255 characters',
        'min_length' => 'The city must be at least 3 characters long',
        'required' => 'You must enter a city'
    ],
    'country' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a country'
    ],
    'firstname' => [
        'max_length' => 'The first name may not exceed 50 characters',
        'min_length' => 'The first name must be at least 3 characters long',
        'required' => 'You must enter a first name'
    ],
    'interval' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a billing period'
    ],
    'lastname' => [
        'max_length' => 'The last name may not exceed 50 characters',
        'min_length' => 'The last name must be at least 3 characters long',
        'required' => 'You must enter a last name'
    ],
    'payment' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a payment method'
    ],
    'plan' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a membership'
    ],
    'zip_code' => [
        'max_length' => 'The ZIP code may not exceed 50 characters',
        'min_length' => 'The ZIP code must be at least 3 characters long',
        'required' => 'You must enter a ZIP code'
    ]
];
