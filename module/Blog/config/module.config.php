<?php

use Blog\Controller\BlogController;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            BlogController::class => InvokableFactory::class,
        ]
    ],
    'router' => [
        'routes' => include __DIR__ . '/routes.php'
    ],
    'doctrine' => [
        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'my_annotation_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'Blog/Entity',
                ],
            ],

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
//            'orm_default' => [
//                'drivers' => [
//                     register `my_annotation_driver` for any entity under namespace `My\Namespace`
//                    'My\Namespace' => 'my_annotation_driver',
//                ],
//            ],
        ],
    ],
];
