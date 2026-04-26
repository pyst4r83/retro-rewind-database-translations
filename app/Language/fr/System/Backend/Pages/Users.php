<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Users.php
 * Language: Français (fr)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'L\'utilisateur avec l\'ID %user_id% n\'a pas pu être trouvé'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Aucun utilisateur disponible. Veuillez d\'abord ajouter un utilisateur',
            'password' => 'Le mot de passe doit<br>- comporter au moins 8 caractères<br>- contenir une lettre minuscule<br>- contenir une lettre majuscule<br>- contenir un chiffre<br>- contenir l\'un des caractères spéciaux suivants : <small class="fw-bold text-danger">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Les champs marqués d\'un <strong class="body-color">*</strong> sont obligatoires'
        ]
    ],
    'form' => [
        'btn' => [
            'activate' => 'Activer',
            'add' => 'Ajouter',
            'cancel' => 'Annuler',
            'deactivate' => 'Désactiver',
            'delete' => 'Supprimer',
            'edit' => 'Modifier',
            'membership' => 'Abonnement',
            'new' => 'Ajouter un utilisateur',
            'save' => 'Enregistrer l\'utilisateur',
            'update' => 'Mettre à jour l\'utilisateur',
            'update_membership' => 'Mettre à jour l\'abonnement'
        ],
        'label' => [
            'country' => 'Pays',
            'email' => 'Adresse email',
            'end_date' => 'Date de fin',
            'firstname' => 'Prénom',
            'is_admin' => 'Admin',
            'is_superadmin' => 'Superadmin',
            'language' => 'Langue',
            'lastname' => 'Nom',
            'membership' => 'Abonnement',
            'password' => 'Mot de passe',
            'password_repeat' => 'Répéter le mot de passe',
            'username' => 'Nom d\'utilisateur'
        ],
        'options' => [
            'no' => 'Non',
            'yes' => 'Oui'
        ],
        'placeholder' => [
            'country' => 'Sélectionnez le pays ici',
            'email' => 'Entrez l\'adresse email ici',
            'firstname' => 'Entrez le prénom ici',
            'language' => 'Sélectionnez la langue ici',
            'lastname' => 'Entrez le nom ici',
            'password' => 'Entrez le mot de passe ici',
            'password_repeat' => 'Répétez le mot de passe ici',
            'username' => 'Entrez le nom d\'utilisateur ici'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Ajouter un utilisateur',
            'edit' => 'Modifier l\'utilisateur %user%',
            'edit_membership' => 'Modifier l\'abonnement de l\'utilisateur %user%',
            'index' => 'Utilisateurs'
        ],
        'seo' => [
            'add' => 'Ajouter un utilisateur',
            'backend' => 'Backend',
            'edit' => 'Modifier l\'utilisateur',
            'edit_membership' => 'Modifier l\'abonnement',
            'index' => 'Utilisateurs'
        ]
    ],
    'modal' => [
        'activate' => [
            'body' => [
                'really_activate' => 'Activer vraiment l\'utilisateur <code>%user%</code> ?'
            ],
            'btn' => [
                'activate' => 'Activer l\'utilisateur',
                'close' => 'Fermer'
            ],
            'header' => [
                'title' => 'Activer l\'utilisateur'
            ]
        ],
        'deactivate' => [
            'body' => [
                'really_deactivate' => 'Désactiver vraiment l\'utilisateur <code>%user%</code> ?'
            ],
            'btn' => [
                'close' => 'Fermer',
                'deactivate' => 'Désactiver l\'utilisateur'
            ],
            'header' => [
                'title' => 'Désactiver l\'utilisateur'
            ]
        ],
        'delete' => [
            'body' => [
                'really_delete' => 'Supprimer vraiment l\'utilisateur <code>%user%</code> ?'
            ],
            'btn' => [
                'close' => 'Fermer',
                'delete' => 'Supprimer l\'utilisateur'
            ],
            'header' => [
                'title' => 'Supprimer l\'utilisateur'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'active' => 'ACTIF',
            'admin' => 'ADMIN',
            'inactive' => 'INACTIF',
            'superadmin' => 'SUPERADMIN'
        ],
        'thead' => [
            'actions' => 'Actions',
            'username' => 'Nom d\'utilisateur'
        ]
    ]
];
