<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Backend/Pages
 * File:     Users.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    '404' => [
        'page_not_found' => 'O usuário com ID %user_id% não pôde ser encontrado'
    ],
    'alerts' => [
        'info' => [
            'no_entries' => 'Nenhum usuário disponível. Por favor, adicione um usuário primeiro',
            'password' => 'A senha deve<br>- ter pelo menos 8 caracteres<br>- conter uma letra minúscula<br>- conter uma letra maiúscula<br>- conter um número<br>- conter um dos seguintes caracteres especiais: <small class="fw-bold text-danger">[ ! @ # $ % ^ & * ( ) \ - _ = + { } ; : , < . > § ~ ]</small>',
            'required_fields' => 'Campos marcados com <strong class="body-color">*</strong> são obrigatórios'
        ]
    ],
    'form' => [
        'btn' => [
            'activate' => 'Ativar',
            'add' => 'Adicionar',
            'cancel' => 'Cancelar',
            'deactivate' => 'Desativar',
            'delete' => 'Excluir',
            'edit' => 'Editar',
            'membership' => 'Assinatura',
            'new' => 'Adicionar usuário',
            'save' => 'Salvar usuário',
            'update' => 'Atualizar usuário',
            'update_membership' => 'Atualizar assinatura do usuário'
        ],
        'label' => [
            'country' => 'País',
            'email' => 'E-mail',
            'end_date' => 'Data de término',
            'firstname' => 'Nome',
            'is_admin' => 'Admin',
            'is_superadmin' => 'Superadmin',
            'language' => 'Idioma',
            'lastname' => 'Sobrenome',
            'membership' => 'Assinatura',
            'password' => 'Senha',
            'password_repeat' => 'Repetir senha',
            'username' => 'Nome de usuário'
        ],
        'options' => [
            'no' => 'Não',
            'yes' => 'Sim'
        ],
        'placeholder' => [
            'country' => 'Selecione o país aqui',
            'email' => 'Digite o e-mail aqui',
            'firstname' => 'Digite o nome aqui',
            'language' => 'Selecione o idioma aqui',
            'lastname' => 'Digite o sobrenome aqui',
            'password' => 'Digite a senha aqui',
            'password_repeat' => 'Digite a senha novamente aqui',
            'username' => 'Digite o nome de usuário aqui'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'add' => 'Adicionar usuário',
            'edit' => 'Editar usuário %user%',
            'edit_membership' => 'Editar assinatura do usuário %user%',
            'index' => 'Usuários'
        ],
        'seo' => [
            'add' => 'Adicionar usuário',
            'backend' => 'Painel administrativo',
            'edit' => 'Editar usuário',
            'edit_membership' => 'Editar assinatura do usuário',
            'index' => 'Usuários'
        ]
    ],
    'modal' => [
        'activate' => [
            'body' => [
                'really_activate' => 'Ativar realmente o usuário <code>%user%</code>?'
            ],
            'btn' => [
                'activate' => 'Ativar usuário',
                'close' => 'Fechar'
            ],
            'header' => [
                'title' => 'Ativar usuário'
            ]
        ],
        'deactivate' => [
            'body' => [
                'really_deactivate' => 'Desativar realmente o usuário <code>%user%</code>?'
            ],
            'btn' => [
                'close' => 'Fechar',
                'deactivate' => 'Desativar usuário'
            ],
            'header' => [
                'title' => 'Desativar usuário'
            ]
        ],
        'delete' => [
            'body' => [
                'really_delete' => 'Excluir realmente o usuário <code>%user%</code>?'
            ],
            'btn' => [
                'close' => 'Fechar',
                'delete' => 'Excluir usuário'
            ],
            'header' => [
                'title' => 'Excluir usuário'
            ]
        ]
    ],
    'table' => [
        'tbody' => [
            'active' => 'ATIVO',
            'admin' => 'ADMIN',
            'inactive' => 'INATIVO',
            'superadmin' => 'SUPERADMIN'
        ],
        'thead' => [
            'actions' => 'Ações',
            'username' => 'Nome de usuário'
        ]
    ]
];
