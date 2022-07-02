<?php

use Laminas\Router\Http\Literal;

return [
    'admin' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/admin',
            'constraints' => [],
            'defaults' => [
                'controller' => \Admin\Controller\AdminController::class,
                'action' => 'index'
            ]
        ]
    ]
];
