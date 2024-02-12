<?php

if (!defined('ROOT_PATH_SLIM_CORE')) {
    define('ROOT_PATH_SLIM_CORE', __FILE__);
}

// Path settings
$settings['root'] = ROOT_PATH_SLIM_CORE;


$settings['path'] = [
    'slim' => [
        'console' => [
            'database' => ROOT_PATH_SLIM_CORE . '/src/Console/Database',
            'migration' => ROOT_PATH_SLIM_CORE . '/src/Console/Migration',
            'oauth' => ROOT_PATH_SLIM_CORE . '/src/Console/Oauth',
            'seeder' => ROOT_PATH_SLIM_CORE . '/src/Console/Seeder',
            'business' => ROOT_PATH_SLIM_CORE . '/src/Console/Business',
            'cache' => ROOT_PATH_SLIM_CORE . '/src/Console/Cache',
        ],
        'migration' => ROOT_PATH_SLIM_CORE . '/src/Migration',
        'seeder' => ROOT_PATH_SLIM_CORE . '/src/Seeder',
    ]
];