<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Users.php
 * Language: Italiano (it)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'L\'utente con ID %user_id% non può essere trovato'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Nessun utente disponibile. Aggiungi prima un utente',
            'password' => 'La password deve<br>- essere lunga almeno 8 caratteri<br>- contenere una lettera minuscola<br>- contenere una lettera maiuscola<br>- contenere un numero<br>- contenere uno dei seguenti caratteri speciali: <small class="fw-bold text-danger">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'I campi contrassegnati con <strong class="body-color">*</strong> sono obbligatori'
        ]
    ],
    'form' => [
        'btn' => [
            'activate' => 'Attiva',
            'add' => 'Aggiungi',
            'cancel' => 'Annulla',
            'deactivate' => 'Disattiva',
            'delete' => 'Elimina',
            'edit' => 'Modifica',
            'membership' => 'Abbonamento',
            'new' => 'Aggiungi utente',
            'save' => 'Salva utente',
            'update' => 'Aggiorna utente',
            'update_membership' => 'Aggiorna abbonamento'
        ],
        'label' => [
            'country' => 'Paese',
            'email' => 'Indirizzo email',
            'end_date' => 'Data fine',
            'firstname' => 'Nome',
            'is_admin' => 'Admin',
            'is_superadmin' => 'Superadmin',
            'language' => 'Lingua',
            'lastname' => 'Cognome',
            'membership' => 'Abbonamento',
            'password' => 'Password',
            'password_repeat' => 'Ripeti password',
            'username' => 'Nome utente'
        ],
        'options' => [
            'no' => 'No',
            'yes' => 'Sì'
        ],
        'placeholder' => [
            'country' => 'Seleziona paese qui',
            'email' => 'Inserisci indirizzo email qui',
            'firstname' => 'Inserisci nome qui',
            'language' => 'Seleziona lingua qui',
            'lastname' => 'Inserisci cognome qui',
            'password' => 'Inserisci password qui',
            'password_repeat' => 'Reinserisci password qui',
            'username' => 'Inserisci nome utente qui'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Aggiungi utente',
            'edit' => 'Modifica utente %user%',
            'edit_membership' => 'Modifica abbonamento utente %user%',
            'index' => 'Utenti'
        ],
        'seo' => [
            'add' => 'Aggiungi utente',
            'backend' => 'Backend',
            'edit' => 'Modifica utente',
            'edit_membership' => 'Modifica abbonamento',
            'index' => 'Utenti'
        ]
    ],
    'modal' => [
        'activate' => [
            'body' => [
                'really_activate' => 'Attivare realmente l\'utente <code>%user%</code>?'
            ],
            'btn' => [
                'activate' => 'Attiva utente',
                'close' => 'Chiudi'
            ],
            'header' => [
                'title' => 'Attiva utente'
            ]
        ],
        'deactivate' => [
            'body' => [
                'really_deactivate' => 'Disattivare realmente l\'utente <code>%user%</code>?'
            ],
            'btn' => [
                'close' => 'Chiudi',
                'deactivate' => 'Disattiva utente'
            ],
            'header' => [
                'title' => 'Disattiva utente'
            ]
        ],
        'delete' => [
            'body' => [
                'really_delete' => 'Eliminare realmente l\'utente <code>%user%</code>?'
            ],
            'btn' => [
                'close' => 'Chiudi',
                'delete' => 'Elimina utente'
            ],
            'header' => [
                'title' => 'Elimina utente'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'active' => 'ATTIVO',
            'admin' => 'ADMIN',
            'inactive' => 'INATTIVO',
            'superadmin' => 'SUPERADMIN'
        ],
        'thead' => [
            'actions' => 'Azioni',
            'username' => 'Nome utente'
        ]
    ]
];
