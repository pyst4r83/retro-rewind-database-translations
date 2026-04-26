<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Countries.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'Le pays avec l\'ID %country_id% n\'a pas pu être trouvé'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Aucun pays disponible. Veuillez d\'abord ajouter un pays',
            'required_fields' => 'Les champs marqués d\'un <strong class="body-color">*</strong> sont obligatoires'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Ajouter',
            'cancel' => 'Annuler',
            'delete' => 'Supprimer',
            'delete_flag' => 'Supprimer le drapeau',
            'edit' => 'Modifier',
            'new' => 'Ajouter un pays',
            'save' => 'Enregistrer le pays',
            'update' => 'Mettre à jour le pays'
        ],
        'hint' => [
            'flag' => 'Glissez le drapeau ici',
            'flag_formats' => 'JPG, PNG, WEBP, GIF — max. 1 Mo',
            'flag_small' => 'ou cliquez pour sélectionner'
        ],
        'label' => [
            'name' => 'Nom %language%',
            'preview' => 'Aperçu',
            'status' => 'Favori ?',
            'tag' => 'Code',
            'upload_flag' => 'Télécharger le drapeau'
        ],
        'options' => [
            'status' => [
                'no' => 'Non',
                'yes' => 'Oui'
            ]
        ],
        'placeholder' => [
            'name' => 'Entrez le nom %language% ici',
            'tag' => 'Entrez le code ici'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Ajouter un pays',
            'edit' => 'Modifier le pays %country%',
            'index' => 'Pays'
        ],
        'seo' => [
            'add' => 'Ajouter un pays',
            'backend' => 'Backend',
            'edit' => 'Modifier le pays',
            'index' => 'Pays'
        ]
    ],
    'modal' => [
        'body' => [
            'really_delete' => 'Supprimer vraiment le pays <code>%country%</code> ?'
        ],
        'btn' => [
            'close' => 'Fermer',
            'delete' => 'Supprimer le pays'
        ],
        'header' => [
            'title' => 'Supprimer le pays'
        ]
    ],
    'ready' => 'Prêt',
    'table' => [
        'thead' => [
            'actions' => 'Actions',
            'flag' => 'Drapeau',
            'name' => 'Nom',
            'tag' => 'Code'
        ]
    ]
];
