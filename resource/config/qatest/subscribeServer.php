<?php
/**
 * Created by PhpStorm.
 * User: xiaoniu
 * Date: 16/8/19
 * Time: 下午4:00
 */
return [
    'host'          => '0.0.0.0',
    'port'          => '8103',
    'config' => [
        'worker_num' => 2,
        'dispatch_mode' => 3,
        'max_request' => 100000,
        'reactor_num' => 1,
        'daemonize' => false,
    ],
];