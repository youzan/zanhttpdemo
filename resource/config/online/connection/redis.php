<?php


return [
    'default_write' => [
        'engine'=> 'redis',
        'host' => '127.0.0.1',
        'port' => 6379,
        'pool'  => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 2,
            'heartbeat-time' => 35000,
            'init-connection'=> 2,
        ],
    ],
];
