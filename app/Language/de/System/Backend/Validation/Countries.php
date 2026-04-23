<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Countries.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'flag' => [
        'is_image' => 'Die Datei muss ein gültiges Bild sein.',
        'max_size' => 'Das Bild darf maximal 1 MB groß sein.',
        'mime_in' => 'Erlaubte Formate: JPG, PNG, WebP.'
    ],
    'name' => [
        'max_length' => 'Der Name in %language_name% darf maximal 255 Zeichen lang sein',
        'min_length' => 'Der Name in %language_name% muss mindestens 3 Zeichen lang sein',
        'required' => 'Du musst einen Namen in %language_name% eingeben'
    ],
    'tag' => [
        'max_length' => 'Das Kürzel darf maximal 2 Zeichen lang sein',
        'min_length' => 'Das Kürzel muss mindestens 2 Zeichen lang sein',
        'required' => 'Du musst ein Kürzel eingeben'
    ],
    'status' => [
        'in_list' => 'Deine Auswahl ist nicht in der Auswahlliste enthalten',
        'required' => 'Du musst auswählen, ob das Land ein Favorit ist'
    ]
];
