<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditShopImage.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'No hay imagen disponible para eliminar',
        'file_aspect_ratio' => 'La imagen debe tener una relación de aspecto 16:9',
        'file_dimensions' => 'La imagen debe tener al menos %minWidth% x %minHeight% píxeles. Tamaño actual: %imageWidth% x %imageHeight% px',
        'file_size' => 'El archivo es demasiado grande. Máximo 2 MB permitido',
        'file_type' => 'Tipo de archivo no válido. Los tipos permitidos son JPG, PNG y WebP',
        'edit' => 'No se pudo actualizar la imagen de la tienda',
        'no_file' => 'No se seleccionó ningún archivo o el archivo no es válido',
        'nothing_changed' => 'Imagen de la tienda no guardada. No se realizaron cambios',
        'saving' => 'Error al guardar el archivo: %error%',
        'upload_failed' => 'Error al cargar el archivo. Por favor, inténtalo de nuevo'
    ],
    'success' => [
        'delete' => 'Imagen de la tienda eliminada exitosamente',
        'edit' => 'Imagen de la tienda actualizada exitosamente'
    ]
];
