<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Panel Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration defines the available panels and their settings.
    | Each panel can have its own namespace and resource paths.
    |
    */

    'panels' => [
        'admin' => [
            'namespace' => 'App\\Admin\\Resources\\',
            'paths' => [
                'resources' => 'Admin/Resources',
            ],
        ],

        // Additional panels can be easily added with their own settings
        // 'customer' => [
        //     'namespace' => 'App\\Customer\\Resources\\',
        //     'paths' => [
        //         'resources' => 'Customer/Resources',
        //     ],
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global Settings
    |--------------------------------------------------------------------------
    |
    | These settings apply to all panels unless overridden at the panel level.
    |
    */

    'global' => [
        'middleware' => ['web', 'auth'],
        // Add other global settings here
    ],
];
