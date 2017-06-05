<?php

return [
    'default_write' => [
        'engine'=> 'mysqli',
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => '123456',
        'database' => 'information_schema',
        'port' => 3306,
        'pool'  => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 2,
            'heartbeat-time' => 5000,
            'init-connection'=> 2,
        ],
    ],
];