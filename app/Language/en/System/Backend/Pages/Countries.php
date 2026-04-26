<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Countries.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'The country with ID %country_id% could not be found'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'No countries available. Please add a country first',
            'required_fields' => 'Fields marked with <strong class="body-color">*</strong> are required'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Add',
            'cancel' => 'Cancel',
            'delete' => 'Delete',
            'delete_flag' => 'Delete flag',
            'edit' => 'Edit',
            'new' => 'Add country',
            'save' => 'Save country',
            'update' => 'Update country'
        ],
        'hint' => [
            'flag' => 'Drag flag here',
            'flag_formats' => 'JPG, PNG, WEBP, GIF — max. 1 MB',
            'flag_small' => 'or click to select'
        ],
        'label' => [
            'name' => 'Name %language%',
            'preview' => 'Preview',
            'status' => 'Favorite?',
            'tag' => 'Code',
            'upload_flag' => 'Upload flag'
        ],
        'options' => [
            'status' => [
                'no' => 'No',
                'yes' => 'Yes'
            ]
        ],
        'placeholder' => [
            'name' => 'Enter name %language% here',
            'tag' => 'Enter code here'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Add country',
            'edit' => 'Edit country %country%',
            'index' => 'Countries'
        ],
        'seo' => [
            'add' => 'Add country',
            'backend' => 'Backend',
            'edit' => 'Edit country',
            'index' => 'Countries'
        ]
    ],
    'modal' => [
        'body' => [
            'really_delete' => 'Really delete country <code>%country%</code>?'
        ],
        'btn' => [
            'close' => 'Close',
            'delete' => 'Delete country'
        ],
        'header' => [
            'title' => 'Delete country'
        ]
    ],
    'ready' => 'Ready',
    'table' => [
        'thead' => [
            'actions' => 'Actions',
            'flag' => 'Flag',
            'name' => 'Name',
            'tag' => 'Code'
        ]
    ]
];
