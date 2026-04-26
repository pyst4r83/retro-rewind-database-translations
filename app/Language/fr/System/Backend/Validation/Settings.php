<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Validation
 * File:     Settings.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'backend_auditlogs_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Journaux'
    ],
    'backend_contact_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Demandes de contact'
    ],
    'backend_countries_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Pays'
    ],
    'backend_languages_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Langues'
    ],
    'backend_movies_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Films'
    ],
    'backend_movies_genres_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Genres de films'
    ],
    'backend_news_articles_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Articles d\'actualité'
    ],
    'backend_news_categories_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Catégories d\'actualité'
    ],
    'backend_themes_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Thèmes'
    ],
    'backend_timezones_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Fuseaux horaires'
    ],
    'backend_users_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Backend : Utilisateurs'
    ],
    'build_changelist' => [
        'integer' => 'La liste des modifications de build doit être un nombre',
        'required' => 'Vous devez saisir une liste de modifications de build'
    ],
    'default_language' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner une langue par défaut'
    ],
    'default_theme' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner un thème par défaut'
    ],
    'default_timezone' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner un fuseau horaire par défaut'
    ],
    'email_account' => [
        'max_length' => 'L\'adresse email (Compte) ne peut pas dépasser 255 caractères',
        'min_length' => 'L\'adresse email (Compte) doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une adresse email (Compte)',
        'valid_email' => 'Vous devez saisir une adresse email valide (Compte)'
    ],
    'email_contact' => [
        'max_length' => 'L\'adresse email (Contact) ne peut pas dépasser 255 caractères',
        'min_length' => 'L\'adresse email (Contact) doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une adresse email (Contact)',
        'valid_email' => 'Vous devez saisir une adresse email valide (Contact)'
    ],
    'email_no_reply' => [
        'max_length' => 'L\'adresse email (No-Reply) ne peut pas dépasser 255 caractères',
        'min_length' => 'L\'adresse email (No-Reply) doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une adresse email (No-Reply)',
        'valid_email' => 'Vous devez saisir une adresse email valide (No-Reply)'
    ],
    'form_size' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner une taille de formulaire'
    ],
    'frontend_movies_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Frontend : Films'
    ],
    'frontend_news_articles_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Frontend : Articles d\'actualité'
    ],
    'frontend_shop_activities_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Frontend : Activités de la boutique'
    ],
    'frontend_shop_billings_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Frontend : Relevés quotidiens'
    ],
    'frontend_shop_display_case_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Frontend : Vitrine'
    ],
    'frontend_shop_employees_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Frontend : Employés'
    ],
    'frontend_shop_favorites_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Frontend : Favoris'
    ],
    'frontend_shop_inventory_anz_per_page' => [
        'greater_than_equal_to' => 'La saisie doit être un nombre supérieur ou égal à 0',
        'integer' => 'La saisie doit être un nombre',
        'required' => 'Vous devez sélectionner un nombre par page pour Frontend : Inventaire'
    ],
    'maintenance_mode' => [
        'in_list' => 'Votre sélection ne figure pas dans la liste des options',
        'required' => 'Vous devez sélectionner si le mode maintenance est actif'
    ],
    'maintenance_until_day' => [
        'valid_date' => 'Vous devez saisir une date valide'
    ],
    'maintenance_until_time' => [
        'valid_date' => 'Vous devez saisir une heure valide (format 24h)'
    ],
    'page_title' => [
        'max_length' => 'Le titre de la page ne peut pas dépasser 255 caractères',
        'min_length' => 'Le titre de la page doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir un titre de page'
    ],
    'recaptcha_secret_key' => [
        'max_length' => 'La clé secrète reCAPTCHA ne peut pas dépasser 64 caractères',
        'min_length' => 'La clé secrète reCAPTCHA doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une clé secrète reCAPTCHA'
    ],
    'recaptcha_site_key' => [
        'max_length' => 'La clé du site reCAPTCHA ne peut pas dépasser 64 caractères',
        'min_length' => 'La clé du site reCAPTCHA doit comporter au moins 3 caractères',
        'required' => 'Vous devez saisir une clé du site reCAPTCHA'
    ],
    'social_discord' => [
        'max_length' => 'Le lien d\'invitation Discord ne peut pas dépasser 255 caractères',
        'min_length' => 'Le lien d\'invitation Discord doit comporter au moins 3 caractères'
    ],
    'social_facebook' => [
        'max_length' => 'Le lien du groupe Facebook ne peut pas dépasser 255 caractères',
        'min_length' => 'Le lien du groupe Facebook doit comporter au moins 3 caractères'
    ],
    'social_instagram' => [
        'max_length' => 'Le nom du compte Instagram ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom du compte Instagram doit comporter au moins 3 caractères'
    ],
    'social_steam' => [
        'max_length' => 'Le lien du groupe Steam ne peut pas dépasser 255 caractères',
        'min_length' => 'Le lien du groupe Steam doit comporter au moins 3 caractères'
    ],
    'social_tiktok' => [
        'max_length' => 'Le nom du compte TikTok ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom du compte TikTok doit comporter au moins 3 caractères'
    ],
    'social_twitch' => [
        'max_length' => 'Le nom du compte Twitch ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom du compte Twitch doit comporter au moins 3 caractères'
    ],
    'social_x_twitter' => [
        'max_length' => 'Le nom du compte Twitter ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom du compte Twitter doit comporter au moins 3 caractères'
    ],
    'social_youtube' => [
        'max_length' => 'Le nom du compte YouTube ne peut pas dépasser 255 caractères',
        'min_length' => 'Le nom du compte YouTube doit comporter au moins 3 caractères'
    ]
];
