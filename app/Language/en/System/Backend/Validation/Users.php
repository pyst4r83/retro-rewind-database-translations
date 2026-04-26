<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Users.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'country' => [
        'in_list' => 'Your selection is not in the list of options'
    ],
    'email' => [
        'is_unique' => 'This email address already exists',
        'max_length' => 'The email address may not exceed 255 characters',
        'min_length' => 'The email address must be at least 3 characters long',
        'required' => 'You must enter an email address',
        'valid_email' => 'You must enter a valid email address'
    ],
    'end_date' => [
        'required' => 'You must enter an end date for the membership',
        'valid_date' => 'The membership end date must be a date in the format Y-m-d'
    ],
    'firstname' => [
        'max_length' => 'The first name may not exceed 255 characters',
        'min_length' => 'The first name must be at least 3 characters long'
    ],
    'is_admin' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select whether the user is an admin'
    ],
    'is_superadmin' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select whether the user is a superadmin'
    ],
    'language' => [
        'in_list' => 'Your selection is not in the list of options'
    ],
    'lastname' => [
        'max_length' => 'The last name may not exceed 255 characters',
        'min_length' => 'The last name must be at least 3 characters long'
    ],
    'membership' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a membership'
    ],
    'password' => [
        'min_length' => 'The password must be at least 8 characters long',
        'required' => 'You must enter a password',
        'validPasswordLowercase' => 'The password must contain at least one lowercase letter',
        'validPasswordNumber' => 'The password must contain at least one number',
        'validPasswordSpecial' => 'The password must contain at least one of the following special characters:<br><small>[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
        'validPasswordUppercase' => 'The password must contain at least one uppercase letter'
    ],
    'password_repeat' => [
        'matches' => 'The passwords do not match',
        'required' => 'You must re-enter the password'
    ],
    'username' => [
        'is_unique' => 'This username already exists',
        'max_length' => 'The username may not exceed 50 characters',
        'min_length' => 'The username must be at least 3 characters long',
        'required' => 'You must enter a username'
    ]
];
