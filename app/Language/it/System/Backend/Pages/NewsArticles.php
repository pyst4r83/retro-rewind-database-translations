<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     NewsArticles.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'L\'articolo di notizie con ID %news_article_id% non può essere trovato'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Nessun articolo di notizie disponibile. Aggiungi prima un articolo',
            'required_fields' => 'I campi contrassegnati con <strong class="body-color">*</strong> sono obbligatori'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Aggiungi',
            'cancel' => 'Annulla',
            'delete' => 'Elimina',
            'edit' => 'Modifica',
            'new' => 'Aggiungi articolo',
            'publish' => 'Pubblica',
            'save' => 'Salva articolo',
            'unpublish' => 'Rimuovi pubblicazione',
            'update' => 'Aggiorna articolo'
        ],
        'label' => [
            'category' => 'Categoria',
            'content' => 'Contenuto',
            'featured_image' => 'URL immagine hero',
            'published_at' => 'Pubblicato il',
            'source_link' => 'URL fonte',
            'steam_id' => 'Gioco Steam',
            'teaser' => 'Anteprima',
            'title' => 'Titolo',
        ],
        'placeholder' => [
            'category' => 'Seleziona categoria qui',
            'content' => 'Inserisci contenuto qui',
            'featured_image' => 'Inserisci URL immagine hero qui',
            'published_at' => 'Inserisci timestamp pubblicazione qui',
            'source_link' => 'Inserisci URL fonte qui',
            'steam_id' => 'Seleziona gioco Steam qui',
            'teaser' => 'Inserisci anteprima qui',
            'title' => 'Inserisci titolo qui'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Aggiungi articolo',
            'edit' => 'Modifica articolo %article%',
            'index' => 'Articoli'
        ],
        'seo' => [
            'add' => 'Aggiungi articolo',
            'backend' => 'Backend',
            'edit' => 'Modifica articolo',
            'index' => 'Articoli',
            'news' => 'Notizie'
        ]
    ],
    'modal' => [
        'delete' => [
            'body' => [
                'really_delete' => 'Eliminare realmente l\'articolo di notizie <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Chiudi',
                'delete' => 'Elimina articolo'
            ],
            'header' => [
                'title' => 'Elimina articolo'
            ]
        ],
        'publish' => [
            'body' => [
                'really_publish' => 'Pubblicare realmente l\'articolo di notizie <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Chiudi',
                'publish' => 'Pubblica articolo'
            ],
            'header' => [
                'title' => 'Pubblica articolo'
            ]
        ],
        'unpublish' => [
            'body' => [
                'really_unpublish' => 'Rimuovere realmente la pubblicazione dell\'articolo <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Chiudi',
                'unpublish' => 'Rimuovi pubblicazione'
            ],
            'header' => [
                'title' => 'Rimuovi pubblicazione'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'updated_by' => 'aggiornato da %username% il %updated_at%',
            'written_by' => 'scritto da %username% il %created_at%'
        ],
        'thead' => [
            'actions' => 'Azioni',
            'category' => 'Categoria',
            'title' => 'Titolo'
        ]
    ]
];
