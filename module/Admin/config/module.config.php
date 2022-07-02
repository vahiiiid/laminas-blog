<?php

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            \Admin\Controller\AdminController::class => InvokableFactory::class
        ]
    ],
    'router' => [
        'routes' => include __DIR__ . '/routes.php'
    ],
    'view_manager' => [
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/admin/layout/layout.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
