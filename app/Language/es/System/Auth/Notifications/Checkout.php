<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Auth/Notifications
 * File:     Checkout.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'error' => [
        'order' => 'No se pudo completar el pedido. Por favor, completa todos los campos correctamente e inténtalo de nuevo',
        'webhook' => [
            '3d_secure_failed' => 'Falló la autenticación 3D Secure.',
            'authentication_failure' => 'Error de autenticación. Por favor, inténtalo de nuevo.',
            'authentication_required' => 'Falló la autenticación. Por favor, inténtalo de nuevo.',
            'blocked' => 'El pago fue bloqueado. Por favor, contacta con tu banco.',
            'card_declined' => 'La tarjeta fue rechazada. Por favor, utiliza otro método de pago.',
            'expired_card' => 'La tarjeta ha expirado. Por favor, utiliza una tarjeta válida.',
            'fraudulent' => 'El pago fue rechazado por razones de seguridad.',
            'incorrect_cvc' => 'El código de seguridad (CVC) es incorrecto. Por favor, revisa tu entrada.',
            'incorrect_number' => 'El número de tarjeta no es válido. Por favor, revisa tu entrada.',
            'insufficient_funds' => 'Saldo insuficiente en la tarjeta. Por favor, utiliza otra tarjeta.',
            'invalid_expiry' => 'La fecha de caducidad no es válida. Por favor, revisa tu entrada.',
            'invoice_failed' => 'El pago de la factura falló.',
            'payment_failed' => 'El pago falló. Por favor, inténtalo de nuevo.',
            'processing_error' => 'Ocurrió un error durante el procesamiento. Por favor, inténtalo de nuevo.',
            'unknown' => 'Ocurrió un error desconocido. Por favor, contacta con soporte.'
        ]
    ]
];
