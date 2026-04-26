<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     NewsArticles.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'No se pudo encontrar el artículo de noticias con ID %news_article_id%'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'No hay artículos de noticias disponibles. Por favor, agrega un artículo de noticias primero',
            'required_fields' => 'Los campos marcados con <strong class="body-color">*</strong> son obligatorios'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Agregar',
            'cancel' => 'Cancelar',
            'delete' => 'Eliminar',
            'edit' => 'Editar',
            'new' => 'Agregar artículo',
            'publish' => 'Publicar',
            'save' => 'Guardar artículo',
            'unpublish' => 'Despublicar',
            'update' => 'Actualizar artículo'
        ],
        'label' => [
            'category' => 'Categoría',
            'content' => 'Contenido',
            'featured_image' => 'URL de la imagen destacada',
            'published_at' => 'Publicado el',
            'source_link' => 'URL de la fuente',
            'steam_id' => 'Juego de Steam',
            'teaser' => 'Resumen',
            'title' => 'Título',
        ],
        'placeholder' => [
            'category' => 'Selecciona categoría aquí',
            'content' => 'Ingresa contenido aquí',
            'featured_image' => 'Ingresa URL de la imagen destacada aquí',
            'published_at' => 'Ingresa fecha de publicación aquí',
            'source_link' => 'Ingresa URL de la fuente aquí',
            'steam_id' => 'Selecciona juego de Steam aquí',
            'teaser' => 'Ingresa resumen aquí',
            'title' => 'Ingresa título aquí'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Agregar artículo',
            'edit' => 'Editar artículo %article%',
            'index' => 'Artículos'
        ],
        'seo' => [
            'add' => 'Agregar artículo',
            'backend' => 'Panel de administración',
            'edit' => 'Editar artículo',
            'index' => 'Artículos',
            'news' => 'Noticias'
        ]
    ],
    'modal' => [
        'delete' => [
            'body' => [
                'really_delete' => '¿Eliminar realmente el artículo de noticias <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Cerrar',
                'delete' => 'Eliminar artículo'
            ],
            'header' => [
                'title' => 'Eliminar artículo'
            ]
        ],
        'publish' => [
            'body' => [
                'really_publish' => '¿Publicar realmente el artículo de noticias <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Cerrar',
                'publish' => 'Publicar artículo'
            ],
            'header' => [
                'title' => 'Publicar artículo'
            ]
        ],
        'unpublish' => [
            'body' => [
                'really_unpublish' => '¿Despublicar realmente el artículo de noticias <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Cerrar',
                'unpublish' => 'Despublicar'
            ],
            'header' => [
                'title' => 'Despublicar'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'updated_by' => 'actualizado por %username% el %updated_at%',
            'written_by' => 'escrito por %username% el %created_at%'
        ],
        'thead' => [
            'actions' => 'Acciones',
            'category' => 'Categoría',
            'title' => 'Título'
        ]
    ]
];
