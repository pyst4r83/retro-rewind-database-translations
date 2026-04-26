<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     EditShopImage.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'delete' => 'Nenhuma imagem disponível para exclusão',
        'file_aspect_ratio' => 'A imagem deve ter uma proporção de 16:9',
        'file_dimensions' => 'A imagem deve ter pelo menos %minWidth% x %minHeight% pixels. Tamanho atual: %imageWidth% x %imageHeight% px',
        'file_size' => 'O arquivo é muito grande. Máximo de 2 MB permitido',
        'file_type' => 'Tipo de arquivo inválido. Os tipos permitidos são JPG, PNG e WebP',
        'edit' => 'A imagem da loja não pôde ser atualizada',
        'no_file' => 'Nenhum arquivo selecionado ou arquivo inválido',
        'nothing_changed' => 'Imagem da loja não salva. Nenhuma alteração foi feita',
        'saving' => 'Erro ao salvar o arquivo: %error%',
        'upload_failed' => 'Erro ao enviar o arquivo. Por favor, tente novamente'
    ],
    'success' => [
        'delete' => 'Imagem da loja excluída com sucesso',
        'edit' => 'Imagem da loja atualizada com sucesso'
    ]
];
