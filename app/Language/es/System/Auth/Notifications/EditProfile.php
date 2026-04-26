<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditProfile.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'No hay avatar disponible para eliminar',
        'edit' => 'No se pudo actualizar el perfil',
        'file_aspect_ratio' => 'El avatar debe tener una relación de aspecto 1:1',
        'file_dimensions' => 'El avatar debe tener al menos %minWidth% x %minHeight% píxeles. Tamaño actual: %imageWidth% x %imageHeight% px',
        'file_size' => 'El archivo es demasiado grande. Máximo 1 MB permitido',
        'file_type' => 'Tipo de archivo no válido. Los tipos permitidos son JPG, PNG y WebP',
        'no_file' => 'No se seleccionó ningún archivo o el archivo no es válido',
        'nothing_changed' => 'Perfil no guardado. No se realizaron cambios',
        'saving' => 'Error al guardar el archivo: %error%'
    ],
    'success' => [
        'delete' => 'Avatar eliminado exitosamente',
        'edit' => 'Perfil actualizado exitosamente'
    ]
];
