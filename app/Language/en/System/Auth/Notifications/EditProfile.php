<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditProfile.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'No avatar available for deletion',
        'edit' => 'Profile could not be updated',
        'file_aspect_ratio' => 'The avatar should have a 1:1 aspect ratio',
        'file_dimensions' => 'The avatar must be at least %minWidth% x %minHeight% pixels. Current size: %imageWidth% x %imageHeight% px',
        'file_size' => 'The file is too large. Maximum 1 MB allowed',
        'file_type' => 'Invalid file type. Allowed types are JPG, PNG and WebP',
        'no_file' => 'No file selected or file is invalid',
        'nothing_changed' => 'Profile not saved. No changes were made',
        'saving' => 'Error saving file: %error%'
    ],
    'success' => [
        'delete' => 'Avatar successfully deleted',
        'edit' => 'Profile successfully updated'
    ]
];
