<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
 */
return [
    'default_write' => [
        'engine'=> 'redis',
        'server_ip' => '127.0.0.1',
        'port' => 6379,
        'pool'  => [
            'maximum-connection-count' => '50',
            'minimum-connection-count' => '10',
            'keeping-sleep-time' => '10',
            'heartbeat-time' => 35000,
            'init-connection'=> '2',
        ],
    ],
];
