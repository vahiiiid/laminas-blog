<?php

use Blog\Controller\BlogController;

return [
    'controllers' => [
        'factories' => [
            BlogController::class => function($container) {
                return new Blog\Controller\BlogController(
                    $container
                );
            },
        ]
    ],
    'router' => [
        'routes' => include __DIR__ . '/routes.php'
    ],
    'view_manager' => [
        'template_path_stack' => [
            'blog' => __DIR__ . '/../view',
        ],
    ],
    'doctrine' => [
        'connection' => [
            // default connection name
            'orm_default' => [
                'params' => [
                    'host'     => 'dbdev.hotel.check24-test.de',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => 'apidev',
                    'dbname'   => 'blog',
                ],
            ],
        ],
        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'my_annotation_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
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
