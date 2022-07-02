<?php

use Laminas\Router\Http\Literal;

return [
    'index' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/',
            'constraints' => [],
            'defaults' => [
                'controller' => \Blog\Controller\HomeController::class,
                'action' => 'index'
            ],
        ]
    ]
];
