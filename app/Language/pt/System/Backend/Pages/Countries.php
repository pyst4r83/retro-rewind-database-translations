<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Countries.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'O país com ID %country_id% não pôde ser encontrado'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Nenhum país disponível. Por favor, adicione um país primeiro',
            'required_fields' => 'Campos marcados com <strong class="body-color">*</strong> são obrigatórios'
        ]
    ],
    'form' => [
        'btn' => [
            'add' => 'Adicionar',
            'cancel' => 'Cancelar',
            'delete' => 'Excluir',
            'delete_flag' => 'Excluir bandeira',
            'edit' => 'Editar',
            'new' => 'Adicionar país',
            'save' => 'Salvar país',
            'update' => 'Atualizar país'
        ],
        'hint' => [
            'flag' => 'Arraste a bandeira aqui',
            'flag_formats' => 'JPG, PNG, WEBP, GIF — máx. 1 MB',
            'flag_small' => 'ou clique para selecionar'
        ],
        'label' => [
            'name' => 'Nome %language%',
            'preview' => 'Pré-visualização',
            'status' => 'Favorito?',
            'tag' => 'Código',
            'upload_flag' => 'Enviar bandeira'
        ],
        'options' => [
            'status' => [
                'no' => 'Não',
                'yes' => 'Sim'
            ]
        ],
        'placeholder' => [
            'name' => 'Digite o nome %language% aqui',
            'tag' => 'Digite o código aqui'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Adicionar país',
            'edit' => 'Editar país %country%',
            'index' => 'Países'
        ],
        'seo' => [
            'add' => 'Adicionar país',
            'backend' => 'Painel administrativo',
            'edit' => 'Editar país',
            'index' => 'Países'
        ]
    ],
    'modal' => [
        'body' => [
            'really_delete' => 'Excluir realmente o país <code>%country%</code>?'
        ],
        'btn' => [
            'close' => 'Fechar',
            'delete' => 'Excluir país'
        ],
        'header' => [
            'title' => 'Excluir país'
        ]
    ],
    'ready' => 'Pronto',
    'table' => [
        'thead' => [
            'actions' => 'Ações',
            'flag' => 'Bandeira',
            'name' => 'Nome',
            'tag' => 'Código'
        ]
    ]
];
