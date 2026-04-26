<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Countries.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'Il paese con ID %country_id% non può essere trovato'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Nessun paese disponibile. Aggiungi prima un paese',
            'required_fields' => 'I campi contrassegnati con <strong class="body-color">*</strong> sono obbligatori'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Aggiungi',
            'cancel' => 'Annulla',
            'delete' => 'Elimina',
            'delete_flag' => 'Elimina bandiera',
            'edit' => 'Modifica',
            'new' => 'Aggiungi paese',
            'save' => 'Salva paese',
            'update' => 'Aggiorna paese'
        ],
        'hint' => [
            'flag' => 'Trascina la bandiera qui',
            'flag_formats' => 'JPG, PNG, WEBP, GIF — max. 1 MB',
            'flag_small' => 'o clicca per selezionare'
        ],
        'label' => [
            'name' => 'Nome %language%',
            'preview' => 'Anteprima',
            'status' => 'Preferito?',
            'tag' => 'Codice',
            'upload_flag' => 'Carica bandiera'
        ],
        'options' => [
            'status' => [
                'no' => 'No',
                'yes' => 'Sì'
            ]
        ],
        'placeholder' => [
            'name' => 'Inserisci nome %language% qui',
            'tag' => 'Inserisci codice qui'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Aggiungi paese',
            'edit' => 'Modifica paese %country%',
            'index' => 'Paesi'
        ],
        'seo' => [
            'add' => 'Aggiungi paese',
            'backend' => 'Backend',
            'edit' => 'Modifica paese',
            'index' => 'Paesi'
        ]
    ],
    'modal' => [
        'body' => [
            'really_delete' => 'Eliminare realmente il paese <code>%country%</code>?'
        ],
        'btn' => [
            'close' => 'Chiudi',
            'delete' => 'Elimina paese'
        ],
        'header' => [
            'title' => 'Elimina paese'
        ]
    ],
    'ready' => 'Pronto',
    'table' => [
        'thead' => [
            'actions' => 'Azioni',
            'flag' => 'Bandiera',
            'name' => 'Nome',
            'tag' => 'Codice'
        ]
    ]
];
