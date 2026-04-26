<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     Checkout.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'card' => [
        'access' => [
            'info' => 'Todos os recursos do plano %plan% estão agora desbloqueados',
            'title' => 'Acesso'
        ],
        'email' => [
            'info' => 'Confirmação e fatura foram enviadas para sua caixa de entrada',
            'title' => 'E-mail'
        ],
        'order_summary' => [
            'duration' => 'Duração',
            'payment' => 'Forma de pagamento',
            'plan' => 'Plano',
            'price' => 'Preço',
            'security' => [
                'encrypted' => 'Criptografado',
                'secure' => 'Seguro',
                'ssl' => 'SSL'
            ],
            'terms' => [
                'info' => 'Ao fazer seu pedido, você concorda com nossos %terms% e com a %privacy%. Você pode cancelar a qualquer momento antes do final do período. Você será redirecionado para nosso provedor de pagamentos Stripe',
                'privacy_policy' => 'Política de privacidade',
                'terms_of_use' => 'Termos de uso'
            ],
            'total' => 'Total',
            'vat' => 'ICMS (19%)'
        ],
        'subscription' => [
            'info' => 'Cancele a qualquer momento nas configurações da sua conta',
            'title' => 'Assinatura'
        ],
        'troubleshoot' => [
            'bank' => [
                'info' => 'Contate seu banco - o pagamento pode ter sido bloqueado',
                'title' => 'Banco'
            ],
            'card_data' => [
                'info' => 'Verifique o número do cartão, data de validade e CVV',
                'title' => 'Dados do cartão'
            ],
            'coverage' => [
                'info' => 'Certifique-se de ter fundos suficientes em sua conta',
                'title' => 'Cobertura'
            ]
        ]
    ],
    'error_hint' => 'Precisa de ajuda? Entre em contato com nosso %contact%.',
    'form' => [
        'btn' => [
            'dashboard' => 'Ir para o painel',
            'order' => 'Finalizar pedido',
            'processing' => 'Preparando...',
            'try_again' => 'Tentar novamente'
        ],
        'label' => [
            'address' => 'Endereço',
            'check_interval' => 'Intervalo de verificação',
            'city' => 'Cidade',
            'country' => 'País',
            'date' => 'Data',
            'error' => 'Motivo',
            'error_code' => 'Código do erro',
            'every_2_seconds' => 'A cada 2 segundos',
            'firstname' => 'Nome',
            'interval' => 'Período de faturamento',
            'lastname' => 'Sobrenome',
            'next_payment' => 'Próximo pagamento',
            'payment' => 'Forma de pagamento',
            'plan' => 'Assinatura',
            'started' => 'Iniciado',
            'transaction_id' => 'ID da transação',
            'zip_code' => 'CEP'
        ],
        'options' => [
            'interval' => [
                'month' => '1 mês',
                'months' => '12 meses',
                'monthly' => 'Mensal',
                'yearly' => 'Anual'
            ],
            'payment' => [
                'abo' => 'Assinatura',
                'one_time' => 'Pagamento único'
            ]
        ],
        'placeholder' => [
            'address' => 'Digite o endereço aqui',
            'city' => 'Digite a cidade aqui',
            'country' => 'Selecione o país aqui',
            'firstname' => 'Digite o nome aqui',
            'interval' => 'Selecione o período de faturamento aqui',
            'lastname' => 'Digite o sobrenome aqui',
            'payment' => 'Selecione a forma de pagamento aqui',
            'plan' => 'Selecione a assinatura aqui',
            'zip_code' => 'Digite o CEP aqui'
        ],
        'title' => [
            'billing_address' => 'Endereço de cobrança',
            'error_details' => 'Detalhes do erro',
            'membership' => 'Escolha a assinatura',
            'order_summary' => 'Resumo do pedido'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'cancel' => 'Sua transação não pôde ser concluída',
            'index' => 'Pagamento seguro via conexão criptografada',
            'pending' => 'Aguarde um momento - estamos verificando sua transação',
            'success' => 'Sua transação foi concluída com sucesso'
        ],
        'seo' => [
            'cancel' => 'Pagamento falhou',
            'index' => 'Processar pagamento',
            'database' => 'Banco de dados',
            'pending' => 'Processando pagamento',
            'success' => 'Pagamento bem-sucedido'
        ]
    ],
    'payment_declined' => [
        'info' => 'A transação não pôde ser processada. Verifique seus dados de pagamento e tente novamente.',
        'title' => 'Pagamento recusado'
    ],
    'payment_outstanding' => [
        'info' => 'Seu pagamento está sendo processado pelo nosso provedor de pagamentos. Isso pode levar um momento.',
        'title' => 'Pagamento pendente'
    ],
    'pending' => 'Pendente',
    'pending_hint' => 'Por favor, não feche esta janela. Em caso de problemas, contate nosso %contact%.',
    'processing' => 'Processando...',
    'security' => [
        'automatically' => 'Automático',
        'automatically_info' => 'Você será redirecionado automaticamente assim que o pagamento for confirmado',
        'patience' => 'Paciência',
        'patience_info' => 'O processamento geralmente leva apenas alguns segundos',
        'secure' => 'Seguro',
        'secure_info' => 'Seus dados de pagamento são transmitidos de forma criptografada',
    ],
    'status' => 'Status',
    'steps' => [
        'one' => 'Escolha o plano',
        'three' => 'Confirmação',
        'two' => 'Pagamento'
    ],
    'success' => [
        'info' => 'Uma confirmação foi enviada para seu e-mail.',
        'title' => 'Pagamento confirmado'
    ],
    'support' => 'Suporte',
    'transaction_status' => 'Status da transação'
];
