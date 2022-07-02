<?php

use Laminas\Router\Http\Literal;

return [
    'index' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/blog',
            'constraints' => [],
            'defaults' => [
                'controller' => \Blog\Controller\HomeController::class,
                'action' => 'index'
            ],
            'child_routes' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/post'
                ]
            ]
        ]
    ]
];
