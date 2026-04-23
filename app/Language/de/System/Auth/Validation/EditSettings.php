<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditSettings.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'twofa_code' => [
        'length' => 'Der Authentifizierungscode muss genau 6 Ziffern lang sein.',
        'numeric' => 'Der Authentifizierungscode darf nur aus Zahlen bestehen.',
        'required' => 'Bitte gib den Authentifizierungscode ein.'
    ],
    'twofa_enabled' => [
        'in_list' => 'Ungültige Option für die Zwei-Faktor-Authentifizierung ausgewählt',
        'required' => 'Bitte wähle aus, ob die Zwei-Faktor-Authentifizierung aktiviert werden soll'
    ]
];
