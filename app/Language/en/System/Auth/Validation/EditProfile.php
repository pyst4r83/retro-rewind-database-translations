<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditProfile.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'avatar_image' => [
        'is_image' => 'The file must be a valid image.',
        'max_size' => 'The image may not exceed 1 MB.',
        'mime_in' => 'Allowed formats: JPG, PNG, WebP.'
    ],
    'birthday' => [
        'valid_date' => 'The birthday must be a date in the format Y-m-d'
    ],
    'country' => [
        'in_list' => 'Your selection is not in the list of options'
    ],
    'display_name' => [
        'max_length' => 'The display name may not exceed 255 characters',
        'min_length' => 'The display name must be at least 3 characters long',
        'required' => 'You must enter a display name'
    ],
    'firstname' => [
        'max_length' => 'The first name may not exceed 255 characters',
        'min_length' => 'The first name must be at least 3 characters long'
    ],
    'language' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a language'
    ],
    'lastname' => [
        'max_length' => 'The last name may not exceed 255 characters',
        'min_length' => 'The last name must be at least 3 characters long'
    ],
    'location' => [
        'max_length' => 'The location may not exceed 255 characters',
        'min_length' => 'The location must be at least 3 characters long'
    ],
    'membership_badge_style' => [
        'in_list' => 'Your selection is not in the list of options',
        'required' => 'You must select a membership badge style'
    ],
    'sex' => [
        'in_list' => 'Your selection is not in the list of options'
    ],
    'social_discord' => [
        'max_length' => 'The Discord username may not exceed 255 characters',
        'min_length' => 'The Discord username must be at least 3 characters long'
    ],
    'social_instagram' => [
        'max_length' => 'The Instagram username may not exceed 255 characters',
        'min_length' => 'The Instagram username must be at least 3 characters long'
    ],
    'social_steam' => [
        'max_length' => 'The Steam username may not exceed 255 characters',
        'min_length' => 'The Steam username must be at least 3 characters long'
    ],
    'social_twitch' => [
        'max_length' => 'The Twitch username may not exceed 255 characters',
        'min_length' => 'The Twitch username must be at least 3 characters long'
    ],
    'social_x_twitter' => [
        'max_length' => 'The X / Twitter username may not exceed 255 characters',
        'min_length' => 'The X / Twitter username must be at least 3 characters long'
    ],
    'social_youtube' => [
        'max_length' => 'The Youtube username may not exceed 255 characters',
        'min_length' => 'The Youtube username must be at least 3 characters long'
    ],
    'website' => [
        'max_length' => 'The website URL may not exceed 255 characters',
        'min_length' => 'The website URL must be at least 3 characters long',
        'valid_url' => 'You must enter a valid website URL'
    ]
];
