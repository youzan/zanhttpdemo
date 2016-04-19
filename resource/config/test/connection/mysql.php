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
        'pool'  => [
            'pool_name' => 'pifa',
            'maximum-connection-count' => '50',
            'minimum-connection-count' => '10',
            'keeping-sleep-time' => '10',
            'init-connection'=> '2',
            'host' => '10.200.175.98',
            'user' => 'pifa_user',
            'password' => 'GhspGBQwPGR7bbb2',
            'database' => 'pifa',
            'port' => '3308'
        ],
    ],
    'default_read' => [
        'engine'=> 'mysqli',
        'pool'  => [],
    ],
];