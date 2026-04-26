<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Settings.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'backend_auditlogs_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Logs'
    ],
    'backend_contact_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Solicitações de contato'
    ],
    'backend_countries_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Países'
    ],
    'backend_languages_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Idiomas'
    ],
    'backend_movies_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Filmes'
    ],
    'backend_movies_genres_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Gêneros'
    ],
    'backend_news_articles_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Artigos de notícias'
    ],
    'backend_news_categories_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Categorias de notícias'
    ],
    'backend_themes_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Temas'
    ],
    'backend_timezones_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Fusos horários'
    ],
    'backend_users_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Backend: Usuários'
    ],
    'build_changelist' => [
        'integer' => 'A lista de alterações da build deve ser um número',
        'required' => 'Você deve informar uma lista de alterações da build'
    ],
    'default_language' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar um idioma padrão'
    ],
    'default_theme' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar um tema padrão'
    ],
    'default_timezone' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar um fuso horário padrão'
    ],
    'email_account' => [
        'max_length' => 'O e-mail (Conta) não pode ter mais de 255 caracteres',
        'min_length' => 'O e-mail (Conta) deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um e-mail (Conta)',
        'valid_email' => 'Você deve informar um e-mail válido (Conta)'
    ],
    'email_contact' => [
        'max_length' => 'O e-mail (Contato) não pode ter mais de 255 caracteres',
        'min_length' => 'O e-mail (Contato) deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um e-mail (Contato)',
        'valid_email' => 'Você deve informar um e-mail válido (Contato)'
    ],
    'email_no_reply' => [
        'max_length' => 'O e-mail (No-Reply) não pode ter mais de 255 caracteres',
        'min_length' => 'O e-mail (No-Reply) deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um e-mail (No-Reply)',
        'valid_email' => 'Você deve informar um e-mail válido (No-Reply)'
    ],
    'form_size' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar um tamanho de formulário'
    ],
    'frontend_movies_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Frontend: Filmes'
    ],
    'frontend_news_articles_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Frontend: Artigos de notícias'
    ],
    'frontend_shop_activities_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Frontend: Atividades da loja'
    ],
    'frontend_shop_billings_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Frontend: Resumos diários'
    ],
    'frontend_shop_display_case_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Frontend: Vitrine'
    ],
    'frontend_shop_employees_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Frontend: Funcionários'
    ],
    'frontend_shop_favorites_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Frontend: Favoritos'
    ],
    'frontend_shop_inventory_anz_per_page' => [
        'greater_than_equal_to' => 'O valor deve ser um número maior ou igual a 0',
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve selecionar um número por página para Frontend: Inventário'
    ],
    'maintenance_mode' => [
        'in_list' => 'Sua seleção não está na lista de opções',
        'required' => 'Você deve selecionar se o modo de manutenção está ativo'
    ],
    'maintenance_until_day' => [
        'valid_date' => 'Você deve informar uma data válida'
    ],
    'maintenance_until_time' => [
        'valid_date' => 'Você deve informar um horário válido (formato 24 horas)'
    ],
    'page_title' => [
        'max_length' => 'O título da página não pode ter mais de 255 caracteres',
        'min_length' => 'O título da página deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar um título para a página'
    ],
    'recaptcha_secret_key' => [
        'max_length' => 'A chave secreta do reCAPTCHA não pode ter mais de 64 caracteres',
        'min_length' => 'A chave secreta do reCAPTCHA deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar uma chave secreta do reCAPTCHA'
    ],
    'recaptcha_site_key' => [
        'max_length' => 'A chave do site reCAPTCHA não pode ter mais de 64 caracteres',
        'min_length' => 'A chave do site reCAPTCHA deve ter pelo menos 3 caracteres',
        'required' => 'Você deve informar uma chave do site reCAPTCHA'
    ],
    'social_discord' => [
        'max_length' => 'O link de convite do Discord não pode ter mais de 255 caracteres',
        'min_length' => 'O link de convite do Discord deve ter pelo menos 3 caracteres'
    ],
    'social_facebook' => [
        'max_length' => 'O link do grupo do Facebook não pode ter mais de 255 caracteres',
        'min_length' => 'O link do grupo do Facebook deve ter pelo menos 3 caracteres'
    ],
    'social_instagram' => [
        'max_length' => 'O nome da conta do Instagram não pode ter mais de 255 caracteres',
        'min_length' => 'O nome da conta do Instagram deve ter pelo menos 3 caracteres'
    ],
    'social_steam' => [
        'max_length' => 'O link do grupo do Steam não pode ter mais de 255 caracteres',
        'min_length' => 'O link do grupo do Steam deve ter pelo menos 3 caracteres'
    ],
    'social_tiktok' => [
        'max_length' => 'O nome da conta do TikTok não pode ter mais de 255 caracteres',
        'min_length' => 'O nome da conta do TikTok deve ter pelo menos 3 caracteres'
    ],
    'social_twitch' => [
        'max_length' => 'O nome da conta da Twitch não pode ter mais de 255 caracteres',
        'min_length' => 'O nome da conta da Twitch deve ter pelo menos 3 caracteres'
    ],
    'social_x_twitter' => [
        'max_length' => 'O nome da conta do Twitter não pode ter mais de 255 caracteres',
        'min_length' => 'O nome da conta do Twitter deve ter pelo menos 3 caracteres'
    ],
    'social_youtube' => [
        'max_length' => 'O nome da conta do YouTube não pode ter mais de 255 caracteres',
        'min_length' => 'O nome da conta do YouTube deve ter pelo menos 3 caracteres'
    ]
];
