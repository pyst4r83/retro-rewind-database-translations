<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditShopImage.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'No image available for deletion',
        'file_aspect_ratio' => 'The image should have a 16:9 aspect ratio',
        'file_dimensions' => 'The image must be at least %minWidth% x %minHeight% pixels. Current size: %imageWidth% x %imageHeight% px',
        'file_size' => 'The file is too large. Maximum 2 MB allowed',
        'file_type' => 'Invalid file type. Allowed types are JPG, PNG and WebP',
        'edit' => 'Shop image could not be updated',
        'no_file' => 'No file selected or file is invalid',
        'nothing_changed' => 'Shop image not saved. No changes were made',
        'saving' => 'Error saving file: %error%',
        'upload_failed' => 'Error uploading the file. Please try again'
    ],
    'success' => [
        'delete' => 'Shop image successfully deleted',
        'edit' => 'Shop image successfully updated'
    ]
];
