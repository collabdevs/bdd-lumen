<?php
return [
    'default'     => env('APP_ENV', 'local'),
    'migrations' => 'migrations',
    'connections' => [
        'local' => [
            'driver'    => 'mysql',
            'host'      => 'db4free.net',
            'database'  => 'bddlumen_test',
            'username'  => 'blueiluminado',
            'password'  => 'azulzinho',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'testing' => [
            'driver'    => 'mysql',
            'host'      => 'db4free.net',
            'database'  => 'bddlumen_test',
            'username'  => 'iluminado',
            'password'  => 'azulzinho',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
];