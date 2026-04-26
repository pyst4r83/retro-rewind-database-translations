<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Users.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'No se pudo encontrar el usuario con ID %user_id%'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'No hay usuarios disponibles. Por favor, agrega un usuario primero',
            'password' => 'La contraseña debe<br>- tener al menos 8 caracteres<br>- contener una letra minúscula<br>- contener una letra mayúscula<br>- contener un número<br>- contener uno de los siguientes caracteres especiales: <small class="fw-bold text-danger">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Los campos marcados con <strong class="body-color">*</strong> son obligatorios'
        ]
    ],
    'form' => [
        'btn' => [
            'activate' => 'Activar',
            'add' => 'Agregar',
            'cancel' => 'Cancelar',
            'deactivate' => 'Desactivar',
            'delete' => 'Eliminar',
            'edit' => 'Editar',
            'membership' => 'Membresía',
            'new' => 'Agregar usuario',
            'save' => 'Guardar usuario',
            'update' => 'Actualizar usuario',
            'update_membership' => 'Actualizar membresía del usuario'
        ],
        'label' => [
            'country' => 'País',
            'email' => 'Correo electrónico',
            'end_date' => 'Fecha de fin',
            'firstname' => 'Nombre',
            'is_admin' => 'Administrador',
            'is_superadmin' => 'Superadministrador',
            'language' => 'Idioma',
            'lastname' => 'Apellido',
            'membership' => 'Membresía',
            'password' => 'Contraseña',
            'password_repeat' => 'Repetir contraseña',
            'username' => 'Nombre de usuario'
        ],
        'options' => [
            'no' => 'No',
            'yes' => 'Sí'
        ],
        'placeholder' => [
            'country' => 'Selecciona país aquí',
            'email' => 'Ingresa correo electrónico aquí',
            'firstname' => 'Ingresa nombre aquí',
            'language' => 'Selecciona idioma aquí',
            'lastname' => 'Ingresa apellido aquí',
            'password' => 'Ingresa contraseña aquí',
            'password_repeat' => 'Vuelve a ingresar contraseña aquí',
            'username' => 'Ingresa nombre de usuario aquí'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Agregar usuario',
            'edit' => 'Editar usuario %user%',
            'edit_membership' => 'Editar membresía del usuario %user%',
            'index' => 'Usuarios'
        ],
        'seo' => [
            'add' => 'Agregar usuario',
            'backend' => 'Panel de administración',
            'edit' => 'Editar usuario',
            'edit_membership' => 'Editar membresía de usuario',
            'index' => 'Usuarios'
        ]
    ],
    'modal' => [
        'activate' => [
            'body' => [
                'really_activate' => '¿Activar realmente al usuario <code>%user%</code>?'
            ],
            'btn' => [
                'activate' => 'Activar usuario',
                'close' => 'Cerrar'
            ],
            'header' => [
                'title' => 'Activar usuario'
            ]
        ],
        'deactivate' => [
            'body' => [
                'really_deactivate' => '¿Desactivar realmente al usuario <code>%user%</code>?'
            ],
            'btn' => [
                'close' => 'Cerrar',
                'deactivate' => 'Desactivar usuario'
            ],
            'header' => [
                'title' => 'Desactivar usuario'
            ]
        ],
        'delete' => [
            'body' => [
                'really_delete' => '¿Eliminar realmente al usuario <code>%user%</code>?'
            ],
            'btn' => [
                'close' => 'Cerrar',
                'delete' => 'Eliminar usuario'
            ],
            'header' => [
                'title' => 'Eliminar usuario'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'active' => 'ACTIVO',
            'admin' => 'ADMIN',
            'inactive' => 'INACTIVO',
            'superadmin' => 'SUPERADMIN'
        ],
        'thead' => [
            'actions' => 'Acciones',
            'username' => 'Nombre de usuario'
        ]
    ]
];
