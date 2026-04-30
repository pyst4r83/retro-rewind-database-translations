<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Notifications
 * File:     Movies.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'already_confirmed' => 'Este filme já foi avaliado e não pode ser enviado novamente.',
        'already_rated' => 'Este filme já foi avaliado e não pode ser enviado novamente.',
        'copy' => 'Não foi possível copiar para a área de transferência',
        'display_case' => [
            'error' => 'Erro ao salvar a vitrine',
            'invalid_status' => 'Status da vitrine inválido',
            'movie_not_found' => 'Filme não encontrado',
            'no_id' => 'Nenhum ID do filme fornecido'
        ],
        'favorite' => [
            'error' => 'Erro ao salvar favorito',
            'invalid_status' => 'Status do favorito inválido',
            'movie_not_found' => 'Filme não encontrado',
            'no_id' => 'Nenhum ID do filme fornecido'
        ],
        'inventory' => [
            'error' => 'Erro ao salvar inventário',
            'invalid_status' => 'Status do inventário inválido',
            'movie_not_found' => 'Filme não encontrado',
            'no_id' => 'Nenhum ID do filme fornecido'
        ],
        'movies_not_found' => 'Nenhum filme encontrado',
        'network' => 'Erro de rede. Por favor, tente novamente mais tarde.',
        'not_found' => 'Nenhum filme encontrado com este SKU.',
        'retry' => 'Ocorreu um erro. Por favor, tente novamente.',
        'save_failed' => 'Erro ao salvar a avaliação.',
        'search' => 'Erro na busca',
        'validation' => 'Por favor, verifique seus dados.',
        'vote' => [
            'already_voted' => 'Você já votou neste filme nas últimas 24 horas!',
            'cooldown' => 'Tempo de espera',
            'error' => 'Ocorreu um erro',
            'error_saving' => 'Erro ao salvar',
            'movie_not_found' => 'Filme não encontrado',
            'next_vote_in' => 'Próximo voto possível em',
            'no_id' => 'Nenhum ID do filme fornecido',
            'not_counted' => 'O voto não foi contabilizado!'
        ]
    ],
    'success' => [
        'display_case' => [
            'add' => 'Adicionado à vitrine',
            'delete' => 'Removido da vitrine'
        ],
        'favorite' => [
            'add' => 'Adicionado aos favoritos',
            'delete' => 'Removido dos favoritos'
        ],
        'inventory' => [
            'add' => 'Adicionado ao inventário',
            'delete' => 'Removido do inventário'
        ],
        'rated' => 'Avaliação salva com sucesso!',
        'vote' => [
            'countdown_expired' => 'Você pode votar novamente agora!',
            'counted' => 'Voto contabilizado!'
        ]
    ],
    'time' => [
        'and' => 'e',
        'hour_singular' => 'hora',
        'hour_plural' => 'horas',
        'less_than_minute' => 'menos de um minuto',
        'minute_singular' => 'minuto',
        'minute_plural' => 'minutos',
        'second_singular' => 'segundo',
        'second_plural' => 'segundos',
        'timer' => 'Votos apenas a cada 24 horas'
    ]
];
