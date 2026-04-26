<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Setup/Pages
 * File:     Setup.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'env_file' => 'Arquivo de ambiente',
    'env_status' => [
        'bad' => 'Seu arquivo .env está incompleto ou contém valores inválidos',
        'issue' => 'Problema',
        'issues_headline' => 'Por favor, corrija as seguintes entradas:',
        'key' => 'Chave',
        'ok' => 'Seu arquivo .env parece estar bom'
    ],
    'env_status_error' => [
        'empty' => 'Valor está vazio',
        'missing_or_commented' => 'Ausente ou comentado',
        'must_be' => 'Deve ser: {0} (atual: {1})'
    ],
    'error' => 'Erro',
    'form' => [
        'btn' => [
            'check' => 'Verificar novamente',
            'install' => 'Instalar',
            'installing' => 'Instalando...',
            'visit_website' => 'Visitar site'
        ]
    ],
    'install_now' => 'Agora você pode instalar',
    'intro' => 'Esta página verifica sua configuração .env e pode executar migrações e o seeder de instalação',
    'meta' => [
        'seo' => [
            'index' => 'Configuração'
        ]
    ],
    'progress' => [
        'msg' => [
            'already_installed' => 'Já instalado',
            'env_not_ready' => 'O ambiente ainda não está pronto para a instalação',
            'install_done' => 'Instalação concluída com sucesso',
            'install_failed' => 'Falha na instalação',
            'install_locked' => 'A instalação já está em andamento. Por favor, aguarde e atualize a página',
            'install_starting' => 'Iniciando instalação...',
            'not_started' => 'Ainda não iniciado',
            'running_migrations' => 'Executando migrações...',
            'running_seeder' => 'Executando seeder: {0}...',
            'writing_flag' => 'Escrevendo flag de instalação...'
        ],
        'title' => 'Progresso'
    ]
];
