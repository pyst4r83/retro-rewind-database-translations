<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditShopImage.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'Kein Bild zum Löschen vorhanden',
        'file_aspect_ratio' => 'Das Bild sollte ein 16:9 Seitenverhältnis haben',
        'file_dimensions' => 'Das Bild muss mindestens %minWidth% x %minHeight% Pixel groß sein. Aktuelle Größe: %imageWidth% x %imageHeight% px',
        'file_size' => 'Die Datei ist zu groß. Maximal 2 MB erlaubt',
        'file_type' => 'Ungültiger Dateityp. Erlaubt sind JPG, PNG und WebP',
        'edit' => 'Shop Bild konnte nicht aktualisiert werden',
        'no_file' => 'Keine Datei ausgewählt oder Datei ist ungültig',
        'nothing_changed' => 'Shop Bild nicht gespeichert. Es wurden keine Änderungen vorgenommen',
        'saving' => 'Fehler beim Speichern der Datei: %error%',
        'upload_failed' => 'Fehler beim Hochladen der Datei. Bitte versuchen Sie es erneut'
    ],
    'success' => [
        'delete' => 'Shop Bild erfolgreich gelöscht',
        'edit' => 'Shop Bild erfolgreich aktualisiert'
    ]
];
