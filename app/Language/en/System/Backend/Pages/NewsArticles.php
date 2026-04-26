<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     NewsArticles.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'The news article with ID %news_article_id% could not be found'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'No news articles available. Please add a news article first',
            'required_fields' => 'Fields marked with <strong class="body-color">*</strong> are required'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Add',
            'cancel' => 'Cancel',
            'delete' => 'Delete',
            'edit' => 'Edit',
            'new' => 'Add article',
            'publish' => 'Publish',
            'save' => 'Save article',
            'unpublish' => 'Unpublish',
            'update' => 'Update article'
        ],
        'label' => [
            'category' => 'Category',
            'content' => 'Content',
            'featured_image' => 'Hero image URL',
            'published_at' => 'Published on',
            'source_link' => 'Source URL',
            'steam_id' => 'Steam game',
            'teaser' => 'Teaser',
            'title' => 'Title',
        ],
        'placeholder' => [
            'category' => 'Select category here',
            'content' => 'Enter content here',
            'featured_image' => 'Enter hero image URL here',
            'published_at' => 'Enter published timestamp here',
            'source_link' => 'Enter source URL here',
            'steam_id' => 'Select Steam game here',
            'teaser' => 'Enter teaser here',
            'title' => 'Enter title here'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Add article',
            'edit' => 'Edit article %article%',
            'index' => 'Articles'
        ],
        'seo' => [
            'add' => 'Add article',
            'backend' => 'Backend',
            'edit' => 'Edit article',
            'index' => 'Articles',
            'news' => 'News'
        ]
    ],
    'modal' => [
        'delete' => [
            'body' => [
                'really_delete' => 'Really delete news article <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Close',
                'delete' => 'Delete article'
            ],
            'header' => [
                'title' => 'Delete article'
            ]
        ],
        'publish' => [
            'body' => [
                'really_publish' => 'Really publish news article <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Close',
                'publish' => 'Publish article'
            ],
            'header' => [
                'title' => 'Publish article'
            ]
        ],
        'unpublish' => [
            'body' => [
                'really_unpublish' => 'Really unpublish news article <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Close',
                'unpublish' => 'Unpublish'
            ],
            'header' => [
                'title' => 'Unpublish'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'updated_by' => 'updated by %username% on %updated_at%',
            'written_by' => 'written by %username% on %created_at%'
        ],
        'thead' => [
            'actions' => 'Actions',
            'category' => 'Category',
            'title' => 'Title'
        ]
    ]
];
