<?php
/**
 * Created by PhpStorm.
 * User: xiaoniu
 * Date: 16/5/30
 * Time: 下午5:24
 */
return [
    'modules' => [
        'pf-api'
    ],
    'get' => [
        'host' => '192.168.66.237',
        'port' => 2379,
        'timeout' => 35000,
        'uri' => '/v2/keys',
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
        'loop_time' => 1000,
    ],
    'watch' => [
        'host' => '192.168.66.237',
        'port' => 2379,
        'timeout' => 10000,
        'uri' => '/v2/keys',
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
        'loop_time' => 5000,
    ],
    'register' => [
        'host' => '192.168.66.237',
        'port' => 8687,
        'uri' => '/register',
        'timeout' => 10000,
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
    ],
];