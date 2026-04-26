<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopBillings.php
 * Language: Español (es)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'customers_served_at_counter' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes ingresar cuántos clientes fueron atendidos en la caja'
    ],
    'day' => [
        'in_list' => 'Tu selección no está en la lista de días',
        'required' => 'Debes seleccionar un día'
    ],
    'month' => [
        'in_list' => 'Tu selección no está en la lista de meses',
        'required' => 'Debes seleccionar un mes'
    ],
    'movie_requests_fulfilled' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes ingresar cuántas solicitudes de películas cumpliste'
    ],
    'movies_rented' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes ingresar cuántas películas fueron alquiladas'
    ],
    'movies_returned' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes ingresar cuántas películas fueron devueltas'
    ],
    'movies_sold_income' => [
        'decimal' => 'La entrada debe ser un número decimal',
        'greater_than' => 'La entrada debe ser mayor que 0',
        'required' => 'Debes ingresar cuántos ingresos se generaron por la venta de películas'
    ],
    'rental_income' => [
        'decimal' => 'La entrada debe ser un número decimal',
        'greater_than' => 'La entrada debe ser mayor que 0',
        'required' => 'Debes ingresar cuántos ingresos se generaron por el alquiler de películas'
    ],
    'requests_fulfilled' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes ingresar cuántas solicitudes cumpliste'
    ],
    'reserved_movies_rented_to_customers' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes ingresar cuántas películas reservadas alquilaste a clientes'
    ],
    'snack_drinks_requests' => [
        'integer' => 'La entrada debe ser un número',
        'required' => 'Debes ingresar cuántas solicitudes de snacks y bebidas cumpliste'
    ],
    'snacks_drinks_sold_income' => [
        'decimal' => 'La entrada debe ser un número decimal',
        'greater_than' => 'La entrada debe ser mayor que 0',
        'required' => 'Debes ingresar cuántos ingresos se generaron por la venta de snacks y bebidas'
    ],
    'staff_expenses' => [
        'decimal' => 'La entrada debe ser un número decimal',
        'greater_than' => 'La entrada debe ser mayor que 0',
        'required' => 'Debes ingresar cuántos gastos se incurrieron por el personal'
    ],
    'store_snacks_sold_income' => [
        'decimal' => 'La entrada debe ser un número decimal',
        'greater_than' => 'La entrada debe ser mayor que 0',
        'required' => 'Debes ingresar cuántos ingresos se generaron por la venta de snacks de la tienda'
    ],
    'year' => [
        'in_list' => 'Tu selección no está en la lista de años',
        'required' => 'Debes seleccionar un año'
    ]
];
