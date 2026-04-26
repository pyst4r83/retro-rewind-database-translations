<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Pages
 * File:     Checkout.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'card' => [
        'access' => [
            'info' => 'Todas las funciones de %plan% ya están desbloqueadas',
            'title' => 'Acceso'
        ],
        'email' => [
            'info' => 'La confirmación y la factura han sido enviadas a tu bandeja de entrada',
            'title' => 'Correo electrónico'
        ],
        'order_summary' => [
            'duration' => 'Duración',
            'payment' => 'Método de pago',
            'plan' => 'Plan',
            'price' => 'Precio',
            'security' => [
                'encrypted' => 'Cifrado',
                'secure' => 'Seguro',
                'ssl' => 'SSL'
            ],
            'terms' => [
                'info' => 'Al realizar tu pedido, aceptas nuestros %terms% y la %privacy%. Puedes cancelar en cualquier momento antes de que finalice el plazo. Serás redirigido a nuestro proveedor de pagos Stripe',
                'privacy_policy' => 'Política de privacidad',
                'terms_of_use' => 'Términos de uso'
            ],
            'total' => 'Total',
            'vat' => 'IVA (19%)'
        ],
        'subscription' => [
            'info' => 'Cancela en cualquier momento desde la configuración de tu cuenta',
            'title' => 'Suscripción'
        ],
        'troubleshoot' => [
            'bank' => [
                'info' => 'Contacta con tu banco - es posible que el pago haya sido bloqueado',
                'title' => 'Banco'
            ],
            'card_data' => [
                'info' => 'Verifica que el número de tarjeta, fecha de caducidad y CVV sean correctos',
                'title' => 'Datos de la tarjeta'
            ],
            'coverage' => [
                'info' => 'Asegúrate de tener fondos suficientes en tu cuenta',
                'title' => 'Cobertura'
            ]
        ]
    ],
    'error_hint' => '¿Necesitas ayuda? Contacta con nuestro %contact%.',
    'form' => [
        'btn' => [
            'dashboard' => 'Ir al panel',
            'order' => 'Realizar pedido',
            'processing' => 'Preparando...',
            'try_again' => 'Intentar de nuevo'
        ],
        'label' => [
            'address' => 'Dirección',
            'check_interval' => 'Intervalo de verificación',
            'city' => 'Ciudad',
            'country' => 'País',
            'date' => 'Fecha',
            'error' => 'Motivo',
            'error_code' => 'Código de error',
            'every_2_seconds' => 'Cada 2 segundos',
            'firstname' => 'Nombre',
            'interval' => 'Período de facturación',
            'lastname' => 'Apellido',
            'next_payment' => 'Próximo pago',
            'payment' => 'Método de pago',
            'plan' => 'Membresía',
            'started' => 'Iniciado',
            'transaction_id' => 'ID de transacción',
            'zip_code' => 'Código postal'
        ],
        'options' => [
            'interval' => [
                'month' => '1 mes',
                'months' => '12 meses',
                'monthly' => 'Mensual',
                'yearly' => 'Anual'
            ],
            'payment' => [
                'abo' => 'Suscripción',
                'one_time' => 'Pago único'
            ]
        ],
        'placeholder' => [
            'address' => 'Ingresa dirección aquí',
            'city' => 'Ingresa ciudad aquí',
            'country' => 'Selecciona país aquí',
            'firstname' => 'Ingresa nombre aquí',
            'interval' => 'Selecciona período de facturación aquí',
            'lastname' => 'Ingresa apellido aquí',
            'payment' => 'Selecciona método de pago aquí',
            'plan' => 'Selecciona membresía aquí',
            'zip_code' => 'Ingresa código postal aquí'
        ],
        'title' => [
            'billing_address' => 'Dirección de facturación',
            'error_details' => 'Detalles del error',
            'membership' => 'Elige membresía',
            'order_summary' => 'Resumen del pedido'
        ]
    ],
    'meta' => [
        'breadcrumb' => [
            'cancel' => 'Tu transacción no pudo completarse',
            'index' => 'Pago seguro a través de conexión cifrada',
            'pending' => 'Espera un momento - estamos verificando tu transacción',
            'success' => 'Tu transacción se ha completado exitosamente'
        ],
        'seo' => [
            'cancel' => 'Pago fallido',
            'index' => 'Procesar pago',
            'database' => 'Base de datos',
            'pending' => 'Procesando pago',
            'success' => 'Pago exitoso'
        ]
    ],
    'payment_declined' => [
        'info' => 'No se pudo procesar la transacción. Por favor, verifica tus datos de pago e inténtalo de nuevo.',
        'title' => 'Pago rechazado'
    ],
    'payment_outstanding' => [
        'info' => 'Tu pago está siendo procesado por nuestro proveedor de pagos. Esto puede tomar un momento.',
        'title' => 'Pago pendiente'
    ],
    'pending' => 'Pendiente',
    'pending_hint' => 'Por favor, no cierres esta ventana. Si tienes problemas, contacta con nuestro %contact%.',
    'processing' => 'Procesando...',
    'security' => [
        'automatically' => 'Automático',
        'automatically_info' => 'Serás redirigido automáticamente una vez que se confirme el pago',
        'patience' => 'Paciencia',
        'patience_info' => 'El procesamiento generalmente toma solo unos segundos',
        'secure' => 'Seguro',
        'secure_info' => 'Tus datos de pago se transmiten cifrados',
    ],
    'status' => 'Estado',
    'steps' => [
        'one' => 'Elige plan',
        'three' => 'Confirmación',
        'two' => 'Pago'
    ],
    'success' => [
        'info' => 'Se ha enviado una confirmación a tu correo electrónico.',
        'title' => 'Pago confirmado'
    ],
    'support' => 'Soporte',
    'transaction_status' => 'Estado de la transacción'
];
