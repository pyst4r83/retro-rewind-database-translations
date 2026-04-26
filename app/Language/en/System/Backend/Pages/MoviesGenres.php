<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     MoviesGenres.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'The movie genre with ID %movie_genre_id% could not be found'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'No movie genres available. Please add a movie genre first',
            'required_fields' => 'Fields marked with <strong class="body-color">*</strong> are required'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Add',
            'cancel' => 'Cancel',
            'delete' => 'Delete',
            'edit' => 'Edit',
            'new' => 'Add genre',
            'save' => 'Save genre',
            'update' => 'Update genre'
        ],
        'label' => [
            'name' => 'Name %language%'
        ],
        'placeholder' => [
            'name' => 'Enter name %language% here'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Add genre',
            'edit' => 'Edit genre %genre%',
            'index' => 'Genres'
        ],
        'seo' => [
            'add' => 'Add genre',
            'backend' => 'Backend',
            'edit' => 'Edit genre',
            'index' => 'Genres',
            'movies' => 'Movies'
        ]
    ],
    'modal' => [
        'body' => [
            'really_delete' => 'Really delete movie genre <code>%movie_genre%</code>?'
        ],
        'btn' => [
            'close' => 'Close',
            'delete' => 'Delete genre'
        ],
        'header' => [
            'title' => 'Delete genre'
        ]
    ],
    'table' => [
        'thead' => [
            'actions' => 'Actions',
            'name' => 'Name'
        ]
    ]
];
