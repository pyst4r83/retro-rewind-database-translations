<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditProfile.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'Nessun avatar disponibile per l\'eliminazione',
        'edit' => 'Il profilo non può essere aggiornato',
        'file_aspect_ratio' => 'L\'avatar dovrebbe avere un rapporto d\'aspetto 1:1',
        'file_dimensions' => 'L\'avatar deve essere almeno %minWidth% x %minHeight% pixel. Dimensioni attuali: %imageWidth% x %imageHeight% px',
        'file_size' => 'Il file è troppo grande. Massimo 1 MB consentito',
        'file_type' => 'Tipo di file non valido. I tipi consentiti sono JPG, PNG e WebP',
        'no_file' => 'Nessun file selezionato o file non valido',
        'nothing_changed' => 'Profilo non salvato. Nessuna modifica è stata apportata',
        'saving' => 'Errore durante il salvataggio del file: %error%'
    ],
    'success' => [
        'delete' => 'Avatar eliminato con successo',
        'edit' => 'Profilo aggiornato con successo'
    ]
];
