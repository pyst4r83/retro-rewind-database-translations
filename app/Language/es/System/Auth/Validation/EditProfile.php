<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditProfile.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'avatar_image' => [
        'is_image' => 'El archivo debe ser una imagen válida.',
        'max_size' => 'La imagen no puede superar 1 MB.',
        'mime_in' => 'Formatos permitidos: JPG, PNG, WebP.'
    ],
    'birthday' => [
        'valid_date' => 'La fecha de nacimiento debe ser una fecha en formato Y-m-d'
    ],
    'country' => [
        'in_list' => 'Tu selección no está en la lista de opciones'
    ],
    'display_name' => [
        'max_length' => 'El nombre para mostrar no puede tener más de 255 caracteres',
        'min_length' => 'El nombre para mostrar debe tener al menos 3 caracteres',
        'required' => 'Debes ingresar un nombre para mostrar'
    ],
    'firstname' => [
        'max_length' => 'El nombre no puede tener más de 255 caracteres',
        'min_length' => 'El nombre debe tener al menos 3 caracteres'
    ],
    'language' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar un idioma'
    ],
    'lastname' => [
        'max_length' => 'El apellido no puede tener más de 255 caracteres',
        'min_length' => 'El apellido debe tener al menos 3 caracteres'
    ],
    'location' => [
        'max_length' => 'La ubicación no puede tener más de 255 caracteres',
        'min_length' => 'La ubicación debe tener al menos 3 caracteres'
    ],
    'membership_badge_style' => [
        'in_list' => 'Tu selección no está en la lista de opciones',
        'required' => 'Debes seleccionar un estilo de insignia de membresía'
    ],
    'sex' => [
        'in_list' => 'Tu selección no está en la lista de opciones'
    ],
    'social_discord' => [
        'max_length' => 'El nombre de usuario de Discord no puede tener más de 255 caracteres',
        'min_length' => 'El nombre de usuario de Discord debe tener al menos 3 caracteres'
    ],
    'social_instagram' => [
        'max_length' => 'El nombre de usuario de Instagram no puede tener más de 255 caracteres',
        'min_length' => 'El nombre de usuario de Instagram debe tener al menos 3 caracteres'
    ],
    'social_steam' => [
        'max_length' => 'El nombre de usuario de Steam no puede tener más de 255 caracteres',
        'min_length' => 'El nombre de usuario de Steam debe tener al menos 3 caracteres'
    ],
    'social_twitch' => [
        'max_length' => 'El nombre de usuario de Twitch no puede tener más de 255 caracteres',
        'min_length' => 'El nombre de usuario de Twitch debe tener al menos 3 caracteres'
    ],
    'social_x_twitter' => [
        'max_length' => 'El nombre de usuario de X / Twitter no puede tener más de 255 caracteres',
        'min_length' => 'El nombre de usuario de X / Twitter debe tener al menos 3 caracteres'
    ],
    'social_youtube' => [
        'max_length' => 'El nombre de usuario de Youtube no puede tener más de 255 caracteres',
        'min_length' => 'El nombre de usuario de Youtube debe tener al menos 3 caracteres'
    ],
    'website' => [
        'max_length' => 'La URL del sitio web no puede tener más de 255 caracteres',
        'min_length' => 'La URL del sitio web debe tener al menos 3 caracteres',
        'valid_url' => 'Debes ingresar una URL de sitio web válida'
    ]
];
