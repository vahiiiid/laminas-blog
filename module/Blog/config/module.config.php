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
];
