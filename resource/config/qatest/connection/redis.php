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
        'host' => '10.9.22.85',
        'port' => 6602,
        'pool'  => [
            'maximum-connection-count' => '50',
            'minimum-connection-count' => '10',
            'keeping-sleep-time' => '10',
            'init-connection'=> '2',
        ],
    ],
];
