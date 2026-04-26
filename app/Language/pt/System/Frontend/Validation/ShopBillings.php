<?php

/**
 * ============================================
 * RETRO REWIND Database Language File
 * ============================================
 *
 * Folder:   System/Frontend/Validation
 * File:     ShopBillings.php
 * Language: Português Brasileiro (pt)
 * Version:  1.0.0
 * Author:   Der Pueh
 *
 * ============================================
 */

return [
    'customers_served_at_counter' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve informar quantos clientes foram atendidos no balcão'
    ],
    'day' => [
        'in_list' => 'Sua seleção não está na lista de dias',
        'required' => 'Você deve selecionar um dia'
    ],
    'month' => [
        'in_list' => 'Sua seleção não está na lista de meses',
        'required' => 'Você deve selecionar um mês'
    ],
    'movie_requests_fulfilled' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve informar quantas solicitações de filmes você atendeu'
    ],
    'movies_rented' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve informar quantos filmes foram alugados'
    ],
    'movies_returned' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve informar quantos filmes foram devolvidos'
    ],
    'movies_sold_income' => [
        'decimal' => 'O valor deve ser um número decimal',
        'greater_than' => 'O valor deve ser maior que 0',
        'required' => 'Você deve informar quantas receitas foram geradas pela venda de filmes'
    ],
    'rental_income' => [
        'decimal' => 'O valor deve ser um número decimal',
        'greater_than' => 'O valor deve ser maior que 0',
        'required' => 'Você deve informar quantas receitas foram geradas pelo aluguel de filmes'
    ],
    'requests_fulfilled' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve informar quantas solicitações você atendeu'
    ],
    'reserved_movies_rented_to_customers' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve informar quantos filmes reservados você alugou para clientes'
    ],
    'snack_drinks_requests' => [
        'integer' => 'O valor deve ser um número',
        'required' => 'Você deve informar quantas solicitações de snacks e bebidas você atendeu'
    ],
    'snacks_drinks_sold_income' => [
        'decimal' => 'O valor deve ser um número decimal',
        'greater_than' => 'O valor deve ser maior que 0',
        'required' => 'Você deve informar quantas receitas foram geradas pela venda de snacks e bebidas'
    ],
    'staff_expenses' => [
        'decimal' => 'O valor deve ser um número decimal',
        'greater_than' => 'O valor deve ser maior que 0',
        'required' => 'Você deve informar quantas despesas foram incorridas com funcionários'
    ],
    'store_snacks_sold_income' => [
        'decimal' => 'O valor deve ser um número decimal',
        'greater_than' => 'O valor deve ser maior que 0',
        'required' => 'Você deve informar quantas receitas foram geradas pela venda de snacks da loja'
    ],
    'year' => [
        'in_list' => 'Sua seleção não está na lista de anos',
        'required' => 'Você deve selecionar um ano'
    ]
];
