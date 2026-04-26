<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     NewsArticles.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'O artigo de notícias com ID %news_article_id% não pôde ser encontrado'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Nenhum artigo de notícias disponível. Por favor, adicione um artigo de notícias primeiro',
            'required_fields' => 'Campos marcados com <strong class="body-color">*</strong> são obrigatórios'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Adicionar',
            'cancel' => 'Cancelar',
            'delete' => 'Excluir',
            'edit' => 'Editar',
            'new' => 'Adicionar artigo',
            'publish' => 'Publicar',
            'save' => 'Salvar artigo',
            'unpublish' => 'Despublicar',
            'update' => 'Atualizar artigo'
        ],
        'label' => [
            'category' => 'Categoria',
            'content' => 'Conteúdo',
            'featured_image' => 'URL da imagem hero',
            'published_at' => 'Publicado em',
            'source_link' => 'URL da fonte',
            'steam_id' => 'Jogo Steam',
            'teaser' => 'Resumo',
            'title' => 'Título',
        ],
        'placeholder' => [
            'category' => 'Selecione a categoria aqui',
            'content' => 'Digite o conteúdo aqui',
            'featured_image' => 'Digite a URL da imagem hero aqui',
            'published_at' => 'Digite o timestamp de publicação aqui',
            'source_link' => 'Digite a URL da fonte aqui',
            'steam_id' => 'Selecione o jogo Steam aqui',
            'teaser' => 'Digite o resumo aqui',
            'title' => 'Digite o título aqui'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Adicionar artigo',
            'edit' => 'Editar artigo %article%',
            'index' => 'Artigos'
        ],
        'seo' => [
            'add' => 'Adicionar artigo',
            'backend' => 'Painel administrativo',
            'edit' => 'Editar artigo',
            'index' => 'Artigos',
            'news' => 'Notícias'
        ]
    ],
    'modal' => [
        'delete' => [
            'body' => [
                'really_delete' => 'Excluir realmente o artigo de notícias <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Fechar',
                'delete' => 'Excluir artigo'
            ],
            'header' => [
                'title' => 'Excluir artigo'
            ]
        ],
        'publish' => [
            'body' => [
                'really_publish' => 'Publicar realmente o artigo de notícias <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Fechar',
                'publish' => 'Publicar artigo'
            ],
            'header' => [
                'title' => 'Publicar artigo'
            ]
        ],
        'unpublish' => [
            'body' => [
                'really_unpublish' => 'Despublicar realmente o artigo de notícias <code>%news_article%</code>?'
            ],
            'btn' => [
                'close' => 'Fechar',
                'unpublish' => 'Despublicar'
            ],
            'header' => [
                'title' => 'Despublicar'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'updated_by' => 'atualizado por %username% em %updated_at%',
            'written_by' => 'escrito por %username% em %created_at%'
        ],
        'thead' => [
            'actions' => 'Ações',
            'category' => 'Categoria',
            'title' => 'Título'
        ]
    ]
];
