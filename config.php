<?php

return [
    'version' => '0.99.1',

    'locale' => 'en_US',
    'plugins' => [
//        'Editor' => true,
//        'CMS' => true,
        'Capcha' => true,
        'Users' => true
    ],

    'db' => [
        'default' => [
            'type' => 'mysql',
            'hostname' => '127.0.0.1',
            'database' => 'pogomate',
            'username' => 'pogomate',
            'password' => 'ooFu9QueooFu9Que'
        ]
    ],

    'instances' => [
        'main' => [
            'include' => [
                'bootstrap' => true,
                'jquery' => true,
                'all' => true,
            ]
        ]
    ],

    'auth' => [
        'registration' => false
    ]
];
