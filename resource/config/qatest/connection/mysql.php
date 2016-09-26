<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
 */
return [
    'default_write' => [
        'engine'=> 'mysqli',
        'host' => '10.9.34.252',
        'user' => 'pifa',
        'password' => 'pifa',
        'database' => 'pifa',
        'port' => '3306',
        'pool'  => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 10,
            'heartbeat-time' => 5000,
            'init-connection'=> 10,
        ],
    ],

];
