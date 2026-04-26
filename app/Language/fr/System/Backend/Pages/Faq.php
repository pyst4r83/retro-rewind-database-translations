<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Faq.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'La FAQ avec l\'ID %faq_id% n\'a pas pu être trouvée'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Aucune FAQ disponible. Veuillez d\'abord ajouter une FAQ',
            'required_fields' => 'Les champs marqués d\'un <strong class="body-color">*</strong> sont obligatoires'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Ajouter',
            'cancel' => 'Annuler',
            'delete' => 'Supprimer',
            'edit' => 'Modifier',
            'new' => 'Ajouter une FAQ',
            'save' => 'Enregistrer la FAQ',
            'update' => 'Mettre à jour la FAQ'
        ],
        'label' => [
            'answer' => 'Réponse %language%',
            'category' => 'Catégorie',
            'question' => 'Question %language%'
        ],
        'placeholder' => [
            'answer' => 'Entrez la réponse %language% ici',
            'category' => 'Sélectionnez la catégorie ici',
            'question' => 'Entrez la question %language% ici'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Ajouter une FAQ',
            'edit' => 'Modifier la FAQ %faq%',
            'index' => 'FAQ'
        ],
        'seo' => [
            'add' => 'Ajouter une FAQ',
            'backend' => 'Backend',
            'edit' => 'Modifier la FAQ',
            'index' => 'FAQs'
        ]
    ],
    'modal' => [
        'body' => [
            'really_delete' => 'Supprimer vraiment la FAQ <code>%faq%</code> ?'
        ],
        'btn' => [
            'close' => 'Fermer',
            'delete' => 'Supprimer la FAQ'
        ],
        'header' => [
            'title' => 'Supprimer la FAQ'
        ]
    ],
    'table' => [
        'thead' => [
            'actions' => 'Actions',
            'category' => 'Catégorie',
            'name' => 'Question'
        ]
    ]
];
