<?php
/**
 * Yii Application Config
 *
 * Edit this file at your own risk!
 *
 * The array returned by this file will get merged with
 * vendor/craftcms/cms/src/config/app.php and app.[web|console].php, when
 * Craft's bootstrap script is defining the configuration for the entire
 * application.
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 *
 * If you want to modify the application config for *only* web requests or
 * *only* console requests, create an app.web.php or app.console.php file in
 * your config/ folder, alongside this one.
 */

use craft\helpers\App;

return [
    'id' => App::env('CRAFT_APP_ID') ?: 'CraftCMS',
    'modules' => [
        'make-users-editors' => \modules\MakeUsersEditors::class,
    ],
    'bootstrap' => ['make-users-editors'],
    'components' => [
        'redis' => [
            'class' => yii\redis\Connection::class,
            'hostname' => App::env('REDIS_HOSTNAME') ?: '127.0.0.1',
            'port' => App::env('REDIS_PORT') ?: 6379,
            'database' => App::env('REDIS_DEFAULT_DB') ?: 0,
        ],
        'cache' => [
            'class' => yii\redis\Cache::class,
            'keyPrefix' => App::env('CRAFT_APP_ID') ?: 'CraftCMS',
            'redis' => [
                'hostname' => App::env('REDIS_HOSTNAME') ?: '127.0.0.1',
                'port' => App::env('REDIS_PORT') ?: 6379,
                'database' => App::env('REDIS_CRAFT_DB') ?: 1,
            ],
        ],
    ]
];
