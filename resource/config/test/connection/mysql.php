<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
 */
return [
    'default' => [
        'engine'=> 'mysqli',
        'host' => '',
        'user' => '',
        'password' => '',
        'database' => '',
        'port' => '3306',
        'pool'  => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 10,
            'heartbeat-time' => 35000,
            'init-connection'=> 0,
        ],
    ],

];