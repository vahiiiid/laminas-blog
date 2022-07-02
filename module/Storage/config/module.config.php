<?php

return [
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
