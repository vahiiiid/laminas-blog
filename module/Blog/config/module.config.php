<?php

use Blog\Controller\HomeController;

return [
    'controllers' => [
        'factories' => [
            HomeController::class => function ($container) {
                return new \Blog\Controller\HomeController(
                    $container
                );
            },
        ]
    ],
    'router' => [
        'routes' => include __DIR__ . '/routes.php'
    ],
    'view_manager' => [
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/blog/layout/layout.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'doctrine' => [
        'driver' => [
            'my_annotation_driver' => [
                'paths' => [
                    __DIR__ . '/../src/Entity',
                ],
            ],
            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => [
                'drivers' => [
//                     register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'Blog\Entity' => 'my_annotation_driver',
                ],
            ],
        ],
    ],
];
