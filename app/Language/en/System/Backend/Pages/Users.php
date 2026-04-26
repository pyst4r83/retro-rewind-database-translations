<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Users.php
 * Language: English (en)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'The user with ID %user_id% could not be found'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'No users available. Please add a user first',
            'password' => 'The password must<br>- be at least 8 characters long<br>- contain one lowercase letter<br>- contain one uppercase letter<br>- contain one number<br>- contain one of the following special characters: <small class="fw-bold text-danger">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Fields marked with <strong class="body-color">*</strong> are required'
        ]
    ],
    'form' => [
        'btn' => [
            'activate' => 'Activate',
            'add' => 'Add',
            'cancel' => 'Cancel',
            'deactivate' => 'Deactivate',
            'delete' => 'Delete',
            'edit' => 'Edit',
            'membership' => 'Membership',
            'new' => 'Add user',
            'save' => 'Save user',
            'update' => 'Update user',
            'update_membership' => 'Update user membership'
        ],
        'label' => [
            'country' => 'Country',
            'email' => 'Email address',
            'end_date' => 'End date',
            'firstname' => 'First name',
            'is_admin' => 'Admin',
            'is_superadmin' => 'Superadmin',
            'language' => 'Language',
            'lastname' => 'Last name',
            'membership' => 'Membership',
            'password' => 'Password',
            'password_repeat' => 'Repeat password',
            'username' => 'Username'
        ],
        'options' => [
            'no' => 'No',
            'yes' => 'Yes'
        ],
        'placeholder' => [
            'country' => 'Select country here',
            'email' => 'Enter email address here',
            'firstname' => 'Enter first name here',
            'language' => 'Select language here',
            'lastname' => 'Enter last name here',
            'password' => 'Enter password here',
            'password_repeat' => 'Re-enter password here',
            'username' => 'Enter username here'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Add user',
            'edit' => 'Edit user %user%',
            'edit_membership' => 'Edit membership of user %user%',
            'index' => 'Users'
        ],
        'seo' => [
            'add' => 'Add user',
            'backend' => 'Backend',
            'edit' => 'Edit user',
            'edit_membership' => 'Edit user membership',
            'index' => 'Users'
        ]
    ],
    'modal' => [
        'activate' => [
            'body' => [
                'really_activate' => 'Really activate user <code>%user%</code>?'
            ],
            'btn' => [
                'activate' => 'Activate user',
                'close' => 'Close'
            ],
            'header' => [
                'title' => 'Activate user'
            ]
        ],
        'deactivate' => [
            'body' => [
                'really_deactivate' => 'Really deactivate user <code>%user%</code>?'
            ],
            'btn' => [
                'close' => 'Close',
                'deactivate' => 'Deactivate user'
            ],
            'header' => [
                'title' => 'Deactivate user'
            ]
        ],
        'delete' => [
            'body' => [
                'really_delete' => 'Really delete user <code>%user%</code>?'
            ],
            'btn' => [
                'close' => 'Close',
                'delete' => 'Delete user'
            ],
            'header' => [
                'title' => 'Delete user'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'active' => 'ACTIVE',
            'admin' => 'ADMIN',
            'inactive' => 'INACTIVE',
            'superadmin' => 'SUPERADMIN'
        ],
        'thead' => [
            'actions' => 'Actions',
            'username' => 'Username'
        ]
    ]
];
