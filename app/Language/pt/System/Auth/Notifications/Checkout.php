<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     Checkout.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'order' => 'O pedido não pôde ser concluído. Por favor, preencha todos os campos corretamente e tente novamente',
        'webhook' => [
            '3d_secure_failed' => 'A autenticação 3D Secure falhou.',
            'authentication_failure' => 'Erro de autenticação. Por favor, tente novamente.',
            'authentication_required' => 'A autenticação falhou. Por favor, tente novamente.',
            'blocked' => 'O pagamento foi bloqueado. Por favor, entre em contato com seu banco.',
            'card_declined' => 'O cartão foi recusado. Por favor, use outro método de pagamento.',
            'expired_card' => 'O cartão expirou. Por favor, use um cartão válido.',
            'fraudulent' => 'O pagamento foi recusado por motivos de segurança.',
            'incorrect_cvc' => 'O código de segurança (CVC) está incorreto. Por favor, verifique sua entrada.',
            'incorrect_number' => 'O número do cartão é inválido. Por favor, verifique sua entrada.',
            'insufficient_funds' => 'Saldo insuficiente no cartão. Por favor, use outro cartão.',
            'invalid_expiry' => 'A data de validade é inválida. Por favor, verifique sua entrada.',
            'invoice_failed' => 'O pagamento da fatura falhou.',
            'payment_failed' => 'O pagamento falhou. Por favor, tente novamente.',
            'processing_error' => 'Ocorreu um erro durante o processamento. Por favor, tente novamente.',
            'unknown' => 'Ocorreu um erro desconhecido. Por favor, entre em contato com o suporte.'
        ]
    ]
];
