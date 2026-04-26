<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Countries.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'No se pudo encontrar el país con ID %country_id%'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'No hay países disponibles. Por favor, agrega un país primero',
            'required_fields' => 'Los campos marcados con <strong class="body-color">*</strong> son obligatorios'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Agregar',
            'cancel' => 'Cancelar',
            'delete' => 'Eliminar',
            'delete_flag' => 'Eliminar bandera',
            'edit' => 'Editar',
            'new' => 'Agregar país',
            'save' => 'Guardar país',
            'update' => 'Actualizar país'
        ],
        'hint' => [
            'flag' => 'Arrastra la bandera aquí',
            'flag_formats' => 'JPG, PNG, WEBP, GIF — máx. 1 MB',
            'flag_small' => 'o haz clic para seleccionar'
        ],
        'label' => [
            'name' => 'Nombre %language%',
            'preview' => 'Vista previa',
            'status' => '¿Favorito?',
            'tag' => 'Código',
            'upload_flag' => 'Subir bandera'
        ],
        'options' => [
            'status' => [
                'no' => 'No',
                'yes' => 'Sí'
            ]
        ],
        'placeholder' => [
            'name' => 'Ingresa nombre %language% aquí',
            'tag' => 'Ingresa código aquí'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Agregar país',
            'edit' => 'Editar país %country%',
            'index' => 'Países'
        ],
        'seo' => [
            'add' => 'Agregar país',
            'backend' => 'Panel de administración',
            'edit' => 'Editar país',
            'index' => 'Países'
        ]
    ],
    'modal' => [
        'body' => [
            'really_delete' => '¿Eliminar realmente el país <code>%country%</code>?'
        ],
        'btn' => [
            'close' => 'Cerrar',
            'delete' => 'Eliminar país'
        ],
        'header' => [
            'title' => 'Eliminar país'
        ]
    ],
    'ready' => 'Listo',
    'table' => [
        'thead' => [
            'actions' => 'Acciones',
            'flag' => 'Bandera',
            'name' => 'Nombre',
            'tag' => 'Código'
        ]
    ]
];
