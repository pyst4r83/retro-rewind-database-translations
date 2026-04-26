<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditShopImage.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'Nessuna immagine disponibile per l\'eliminazione',
        'file_aspect_ratio' => 'L\'immagine dovrebbe avere un rapporto d\'aspetto 16:9',
        'file_dimensions' => 'L\'immagine deve essere almeno %minWidth% x %minHeight% pixel. Dimensioni attuali: %imageWidth% x %imageHeight% px',
        'file_size' => 'Il file è troppo grande. Massimo 2 MB consentiti',
        'file_type' => 'Tipo di file non valido. I tipi consentiti sono JPG, PNG e WebP',
        'edit' => 'L\'immagine del negozio non può essere aggiornata',
        'no_file' => 'Nessun file selezionato o file non valido',
        'nothing_changed' => 'Immagine del negozio non salvata. Nessuna modifica è stata apportata',
        'saving' => 'Errore durante il salvataggio del file: %error%',
        'upload_failed' => 'Errore durante il caricamento del file. Per favore riprova'
    ],
    'success' => [
        'delete' => 'Immagine del negozio eliminata con successo',
        'edit' => 'Immagine del negozio aggiornata con successo'
    ]
];
