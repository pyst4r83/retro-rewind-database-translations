<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Validation
 * File:     EditProfile.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'avatar_image' => [
        'is_image' => 'O arquivo deve ser uma imagem válida.',
        'max_size' => 'A imagem não pode exceder 1 MB.',
        'mime_in' => 'Formatos permitidos: JPG, PNG, WebP.'
    ],
    'birthday' => [
        'valid_date' => 'A data de nascimento deve ser uma data no formato Y-m-d'
    ],
    'country' => [
        'in_list' => 'Sua seleção não está na lista de opções'
    ],
    'display_name' => [
        'max_length' => 'O nome de exibição não pode ter mais de 255 caracteres',
        'min_length' => 'O nome de exibição deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um nome de exibição'
    ],
    'firstname' => [
        'max_length' => 'O nome não pode ter mais de 255 caracteres',
        'min_length' => 'O nome deve ter pelo menos 3 caracteres'
    ],
    'language' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar um idioma'
    ],
    'lastname' => [
        'max_length' => 'O sobrenome não pode ter mais de 255 caracteres',
        'min_length' => 'O sobrenome deve ter pelo menos 3 caracteres'
    ],
    'location' => [
        'max_length' => 'A localização não pode ter mais de 255 caracteres',
        'min_length' => 'A localização deve ter pelo menos 3 caracteres'
    ],
    'membership_badge_style' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar um estilo de emblema de assinatura'
    ],
    'sex' => [
        'in_list' => 'Sua seleção não está na lista de opções'
    ],
    'social_discord' => [
        'max_length' => 'O nome de usuário do Discord não pode ter mais de 255 caracteres',
        'min_length' => 'O nome de usuário do Discord deve ter pelo menos 3 caracteres'
    ],
    'social_instagram' => [
        'max_length' => 'O nome de usuário do Instagram não pode ter mais de 255 caracteres',
        'min_length' => 'O nome de usuário do Instagram deve ter pelo menos 3 caracteres'
    ],
    'social_steam' => [
        'max_length' => 'O nome de usuário do Steam não pode ter mais de 255 caracteres',
        'min_length' => 'O nome de usuário do Steam deve ter pelo menos 3 caracteres'
    ],
    'social_twitch' => [
        'max_length' => 'O nome de usuário da Twitch não pode ter mais de 255 caracteres',
        'min_length' => 'O nome de usuário da Twitch deve ter pelo menos 3 caracteres'
    ],
    'social_x_twitter' => [
        'max_length' => 'O nome de usuário do X / Twitter não pode ter mais de 255 caracteres',
        'min_length' => 'O nome de usuário do X / Twitter deve ter pelo menos 3 caracteres'
    ],
    'social_youtube' => [
        'max_length' => 'O nome de usuário do Youtube não pode ter mais de 255 caracteres',
        'min_length' => 'O nome de usuário do Youtube deve ter pelo menos 3 caracteres'
    ],
    'website' => [
        'max_length' => 'A URL do site não pode ter mais de 255 caracteres',
        'min_length' => 'A URL do site deve ter pelo menos 3 caracteres',
        'valid_url' => 'Você deve informar uma URL de site válida'
    ]
];
