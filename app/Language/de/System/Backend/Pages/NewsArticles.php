<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     NewsArticles.php
 * Language: Deutsch (de)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'Der Neuigkeiten-Artikel mit der ID %news_article_id% konnte nicht gefunden werden'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Keine Neuigkeiten-Artikel verfügbar. Bitte füge zuerst einen Neuigkeiten-Artikel hinzu',
            'required_fields' => 'Felder mit <strong class="body-color">*</strong> müssen ausgefüllt werden'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Hinzufügen',
            'cancel' => 'Abbrechen',
            'delete' => 'Löschen',
            'edit' => 'Bearbeiten',
            'new' => 'Artikel hinzufügen',
            'publish' => 'Veröffentlichen',
            'save' => 'Artikel speichern',
            'unpublish' => 'Veröffentlichung aufheben',
            'update' => 'Artikel aktualisieren'
        ],
        'label' => [
            'category' => 'Kategorie',
            'content' => 'Inhalt',
            'featured_image' => 'Hero Image Url',
            'published_at' => 'Veröffentlicht am',
            'source_link' => 'Quelle Url',
            'steam_id' => 'Steam Spiel',
            'teaser' => 'Teaser',
            'title' => 'Titel',
        ],
        'placeholder' => [
            'category' => 'Kategorie hier auswählen',
            'content' => 'Inhalt hier eintragen',
            'featured_image' => 'Hero Image Url hier eintragen',
            'published_at' => 'Veröffentlicht am Zeitstempel hier eintragen',
            'source_link' => 'Quelle Url hier eintragen',
            'steam_id' => 'Steam Spiel hier auswählen',
            'teaser' => 'Teaser hier eintragen',
            'title' => 'Titel hier eintragen'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Artikel hinzufügen',
            'edit' => 'Artikel %article% bearbeiten',
            'index' => 'Artikel'
        ],
        'seo' => [
            'add' => 'Artikel hinzufügen',
            'backend' => 'Backend',
            'edit' => 'Artikel bearbeiten',
            'index' => 'Artikel',
            'news' => 'Neuigkeiten'
        ]
    ],
    'modal' => [
        'delete' => [
            'body' => [
                'really_delete' => 'Neuigkeiten-Artikel <code>%news_article%</code> wirklich löschen?'
            ],
            'btn' => [
                'close' => 'Schließen',
                'delete' => 'Artikel löschen'
            ],
            'header' => [
                'title' => 'Artikel löschen'
            ]
        ],
        'publish' => [
            'body' => [
                'really_publish' => 'Neuigkeiten-Artikel <code>%news_article%</code> wirklich veröffentlichen?'
            ],
            'btn' => [
                'close' => 'Schließen',
                'publish' => 'Artikel veröffentlichen'
            ],
            'header' => [
                'title' => 'Artikel veröffentlichen'
            ]
        ],
        'unpublish' => [
            'body' => [
                'really_unpublish' => 'Veröffentlichung des Neuigkeiten-Artikels <code>%news_article%</code> wirklich aufheben?'
            ],
            'btn' => [
                'close' => 'Schließen',
                'unpublish' => 'Veröffentlichung aufheben'
            ],
            'header' => [
                'title' => 'Veröffentlichung aufheben'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'updated_by' => 'aktualisiert von %username% am %updated_at%',
            'written_by' => 'geschrieben von %username% am %created_at%'
        ],
        'thead' => [
            'actions' => 'Aktionen',
            'category' => 'Kategorie',
            'title' => 'Titel'
        ]
    ]
];
