<?php

use Laminas\Router\Http\Segment;

return [
    'blog' => [
        'type' => Segment::class,
        'options' => [
            'route' => '/blog[/:action]',
            'constraints' => [],
            'defaults' => [
                'controller' => Blog\Controller\BlogController::class,
                'action' => 'index'
            ]
        ]
    ]
];
