<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     NewsArticles.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'L\'article d\'actualité avec l\'ID %news_article_id% n\'a pas pu être trouvé'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Aucun article d\'actualité disponible. Veuillez d\'abord ajouter un article d\'actualité',
            'required_fields' => 'Les champs marqués d\'un <strong class="body-color">*</strong> sont obligatoires'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Ajouter',
            'cancel' => 'Annuler',
            'delete' => 'Supprimer',
            'edit' => 'Modifier',
            'new' => 'Ajouter un article',
            'publish' => 'Publier',
            'save' => 'Enregistrer l\'article',
            'unpublish' => 'Dépublier',
            'update' => 'Mettre à jour l\'article'
        ],
        'label' => [
            'category' => 'Catégorie',
            'content' => 'Contenu',
            'featured_image' => 'URL de l\'image à la une',
            'published_at' => 'Publié le',
            'source_link' => 'URL de la source',
            'steam_id' => 'Jeu Steam',
            'teaser' => 'Accroche',
            'title' => 'Titre',
        ],
        'placeholder' => [
            'category' => 'Sélectionnez la catégorie ici',
            'content' => 'Saisissez le contenu ici',
            'featured_image' => 'Saisissez l\'URL de l\'image à la une ici',
            'published_at' => 'Saisissez l\'horodatage de publication ici',
            'source_link' => 'Saisissez l\'URL de la source ici',
            'steam_id' => 'Sélectionnez le jeu Steam ici',
            'teaser' => 'Saisissez l\'accroche ici',
            'title' => 'Saisissez le titre ici'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Ajouter un article',
            'edit' => 'Modifier l\'article %article%',
            'index' => 'Articles'
        ],
        'seo' => [
            'add' => 'Ajouter un article',
            'backend' => 'Backend',
            'edit' => 'Modifier l\'article',
            'index' => 'Articles',
            'news' => 'Actualités'
        ]
    ],
    'modal' => [
        'delete' => [
            'body' => [
                'really_delete' => 'Supprimer vraiment l\'article d\'actualité <code>%news_article%</code> ?'
            ],
            'btn' => [
                'close' => 'Fermer',
                'delete' => 'Supprimer l\'article'
            ],
            'header' => [
                'title' => 'Supprimer l\'article'
            ]
        ],
        'publish' => [
            'body' => [
                'really_publish' => 'Publier vraiment l\'article d\'actualité <code>%news_article%</code> ?'
            ],
            'btn' => [
                'close' => 'Fermer',
                'publish' => 'Publier l\'article'
            ],
            'header' => [
                'title' => 'Publier l\'article'
            ]
        ],
        'unpublish' => [
            'body' => [
                'really_unpublish' => 'Dépublier vraiment l\'article d\'actualité <code>%news_article%</code> ?'
            ],
            'btn' => [
                'close' => 'Fermer',
                'unpublish' => 'Dépublier'
            ],
            'header' => [
                'title' => 'Dépublier'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'updated_by' => 'mis à jour par %username% le %updated_at%',
            'written_by' => 'écrit par %username% le %created_at%'
        ],
        'thead' => [
            'actions' => 'Actions',
            'category' => 'Catégorie',
            'title' => 'Titre'
        ]
    ]
];
