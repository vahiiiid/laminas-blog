<?php

return [
    'doctrine' => [
        'connection' => [
            // default connection name
            'orm_default' => [
                'params' => [
                    'host' => env('MYSQL_HOST'),
                    'port' => env('MYSQL_PORT'),
                    'user' => env('MYSQL_USER'),
                    // set the password on local file
                    'password' => env('MYSQL_PASSWORD'),
                    'dbname' => env('MYSQL_DB'),
                ],
            ],
        ],
        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'my_annotation_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
            ],

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => [
                'drivers' => [
//                     register `my_annotation_driver` for any entity under namespace `My\Namespace`
//                    'Blog\Entity' => 'my_annotation_driver',
                ],
            ],
        ],
        'migrations_configuration' => [
            'orm_default' => [
                'table_storage' => [
                    'table_name' => 'DoctrineMigrationVersions',
                    'version_column_name' => 'version',
                    'version_column_length' => 1024,
                    'executed_at_column_name' => 'executedAt',
                    'execution_time_column_name' => 'executionTime',
                ],
                'migrations_paths' => [
                    'DoctrineORMModule\Migrations' => __DIR__ . '/../../migrations',
                ], // an array of namespace => path
                'migrations' => [], // an array of fully qualified migrations
                'all_or_nothing' => false,
                'check_database_platform' => true,
                'organize_migrations' => 'year', // year or year_and_month
                'custom_template' => null,
            ],
        ],
    ]
];
