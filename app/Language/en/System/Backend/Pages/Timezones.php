<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Timezones.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'The timezone with ID %timezone_id% could not be found'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'No timezones available. Please add a timezone first',
            'required_fields' => 'Fields marked with <strong class="body-color">*</strong> are required'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Add',
            'cancel' => 'Cancel',
            'delete' => 'Delete',
            'edit' => 'Edit',
            'new' => 'Add timezone',
            'save' => 'Save timezone',
            'update' => 'Update timezone'
        ],
        'label' => [
            'category' => 'Category',
            'name' => 'Name'
        ],
        'options' => [
            'category' => [
                'africa' => 'Africa',
                'america' => 'America',
                'antarctica' => 'Antarctica',
                'arctic' => 'Arctic',
                'asia' => 'Asia',
                'atlantic' => 'Atlantic',
                'australia' => 'Australia',
                'europe' => 'Europe',
                'indian' => 'Indian Ocean',
                'pacific' => 'Pacific'
            ]
        ],
        'placeholder' => [
            'category' => 'Select category here',
            'name' => 'Enter name here'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Add timezone',
            'edit' => 'Edit timezone %timezone%',
            'index' => 'Timezones'
        ],
        'seo' => [
            'add' => 'Add timezone',
            'backend' => 'Backend',
            'edit' => 'Edit timezone',
            'index' => 'Timezones'
        ]
    ],
    'modal' => [
        'body' => [
            'really_delete' => 'Really delete timezone <code>%timezone%</code>?'
        ],
        'btn' => [
            'close' => 'Close',
            'delete' => 'Delete timezone'
        ],
        'header' => [
            'title' => 'Delete timezone'
        ]
    ],
    'table' => [
        'thead' => [
            'actions' => 'Actions',
            'category' => 'Category',
            'name' => 'Name'
        ]
    ]
];
