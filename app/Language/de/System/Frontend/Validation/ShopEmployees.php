<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopEmployees.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'favorite_movie' => [
        'max_length' => 'Der Lieblingsfilm darf maximal 255 Zeichen lang sein',
        'min_length' => 'Der Lieblingsfilm muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Lieblingsfilm eingeben'
    ],
    'name' => [
        'max_length' => 'Der Name darf maximal 255 Zeichen lang sein',
        'min_length' => 'Der Name muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Name eingeben'
    ],
    'skill_checkout' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst das Skill Level an der Kasse auswählen'
    ],
    'skill_return' => [
        'integer' => 'Die Eingabe muss eine Zahl sein',
        'required' => 'Du musst das Skill Level an der Rückgabestation auswählen'
    ],
    'traits' => [
        'in_list' => 'Deine Auswahl ist nicht in der Liste der Zusatzmerkmale enthalten',
        'required' => 'Du musst ein Zusatzmerkmal auswählen'
    ]
];
